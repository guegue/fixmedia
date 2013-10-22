<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function calculate_karma_users($user, $avg_fixes) {
		$karma_base = 5;
		$date_limit = "date_sub(now(), interval 7 day)";
		$output='';
		$output .= "</br>\r\n<strong>*** Calculando karma de usuario '$user->name' ($user->id)</strong></br>\r\n";
		$output .= "media fixes por noticias global -> $avg_fixes </br>\r\n";
		$output .= "karma actual -> $user->karma </br>\r\n";

		/*
			- Votos a noticia que tu has enviado aumentaría tu karma
			- Votos positivos a reporte que tu has enviado aumentaría tu karma
			- Votos negativos a reportes que tu has enviado disminuiría tu karma
			- Reporte de otro usuario a noticia que tu has enviado aumentaría tu karma
		*/

		// Votos a noticia que tu has enviado aumentaría tu karma


		$reports = Report::find_by_sql("SELECT user_id FROM reports WHERE user_id=$user->id AND created_at > $date_limit");
		$subreports = Report::find_by_sql("SELECT user_id FROM reports_data WHERE user_id=$user->id AND created_at > $date_limit");

		$avg_user_fixes = Report::find_by_sql("SELECT AVG(votes_count) as avg FROM reports WHERE user_id=$user->id");
        $avg_user_fixes= $avg_user_fixes[0]->avg>0 ? $avg_user_fixes[0]->avg-1 : 0;
		$output .= "media fixes por noticias del usuario -> $avg_user_fixes </br>\r\n";

		$max_user_fixes = Vote::find_by_sql("SELECT item_id, SUM(vote_value) as votes FROM votes v INNER JOIN reports r ON (r.id=v.item_id) WHERE vote_type LIKE 'FIX'
											AND v.user_id!=$user->id AND r.user_id=$user->id GROUP BY item_id ORDER BY votes DESC LIMIT 1");
		$max_user_fixes = empty($max_user_fixes) ? 0 : $max_user_fixes[0]->votes;

		$received_fixes = Vote::find_by_sql("SELECT SUM(v.vote_value) as fixes FROM votes v INNER JOIN reports r ON (v.item_id=r.id)
									WHERE v.vote_type LIKE 'FIX' AND r.user_id = $user->id AND v.user_id != $user->id
									AND v.created_at > $date_limit LIMIT 1");
		$reports_sent = count($reports);
		$subreports_sent = count($subreports);
		$output .= "noticias enviadas -> $reports_sent </br>\r\n";
		$output .= "reportes enviados -> $subreports_sent </br>\r\n";

		$received_fixes = $received_fixes[0];
		$received_fixes->fixes = (!empty($received_fixes->fixes) ? $received_fixes->fixes : 0);
		$output .= "fixes recibidos en sus noticias -> $received_fixes->fixes </br>\r\n";

		if ($reports_sent>0) :
			$value_fixes = round(($received_fixes->fixes*$reports_sent)-$avg_fixes/2,2);
			$karma_base_user=$karma_base;
		elseif ($received_fixes->fixes>0) :
			$karma_base_user=$karma_base-0.5; //penalización en la base por no enviar noticias pero si recibe fixes
			$value_fixes = round(($received_fixes->fixes*0.8)-$avg_fixes/2,2);
		else :
			$karma_base_user=$karma_base-1; //penalización en la base por no enviar noticias
			$value_fixes = $received_fixes->fixes;
		endif;
		$output .= "valor de fixes recibidos -> $value_fixes </br>\r\n";
		if ($subreports_sent==0) :
			$karma_base_user=$karma_base_user-1; //penalización en la base por no reportar
		endif;
		$output .= "karma base del usuario -> $karma_base_user </br>\r\n";
		//Votos positivos a reporte que tu has enviado aumentaría tu karma

		$positive_votes = Vote::find_by_sql("SELECT SUM(v.vote_value) as votes FROM votes v INNER JOIN reports_data r ON (v.item_id=r.id)
									WHERE v.vote_type LIKE 'REPORT' AND r.user_id = $user->id AND v.user_id != $user->id
									AND vote_value>0 AND v.created_at > $date_limit LIMIT 1");
		foreach ($positive_votes as $vote) :
			$value_positive_votes = $vote->votes = (!empty($vote->votes) ? $vote->votes : 0);
			$output .= "votos positivos recibidos en sus reportes -> $value_positive_votes </br>\r\n";
			break;
		endforeach;

		//Votos negativos a reportes que tu has enviado disminuiría tu karma

		$negative_votes = Vote::find_by_sql("SELECT SUM(v.vote_value) as votes FROM votes v INNER JOIN reports_data r ON (v.item_id=r.id)
									WHERE v.vote_type LIKE 'REPORT' AND r.user_id = $user->id AND v.user_id != $user->id
									AND vote_value<0 AND v.created_at > $date_limit LIMIT 1");
		foreach ($negative_votes as $vote) :
			$value_negative_votes = $vote->votes = (!empty($vote->votes) ? $vote->votes : 0);
			$output .= "votos negativos recibidos en sus reportes -> $value_negative_votes </br>\r\n";
			break;
		endforeach;


		//Reporte de otro usuario a noticia que tu has enviado aumentaría tu karma
		$report_from_others = Reports_data::find_by_sql("SELECT COUNT(rd.id) as reports FROM reports_data rd
														INNER JOIN reports r ON (r.id=rd.report_id) WHERE rd.user_id!=$user->id
														AND r.user_id=$user->id AND rd.created_at > $date_limit");
		foreach ($report_from_others as $report) :
			$value_reports_from_others = $report->reports;
			$output .= "reportes recibidos a sus fix iniciales -> $value_reports_from_others </br>\r\n";
			break;
		endforeach;

		//Calculo final del karma
		$calculated_karma = $karma_base_user + $value_fixes + $value_positive_votes*2 + $value_negative_votes*4 + $value_reports_from_others*2;
		$output .= "karma nuevo -> $calculated_karma </br>\r\n";
		$calculated_karma = min($calculated_karma, 20);
		if ($calculated_karma > $user->karma) :
			$user->karma = 0.8*$user->karma + 0.2*$calculated_karma;
		else :
			$user->karma = 0.95*$user->karma + 0.05*$calculated_karma;
		endif;

		$output .= "karma final -> $user->karma </br>\r\n";
		$user->save();
		return $output;
	}
	function calculate_karma_reports() {
         $reports = Report::all(array('conditions' => 'created_at > date_sub(now(), interval 5 hour) OR karma_value>1'));
         $karma=0;
         $output="<html></body>";
         $output .= "======= INICIANDO PROCESO ======= " . time() . "</br>\r\n";
         foreach ($reports as $report) :
           	$interval = time()-$report->created_at->getTimestamp();
           	if ($interval < 18000  && $interval > 600) {
              	$report->karma_value = 3.5 - $interval/7200;
           	} else {
              	$report->karma_value = 1;
           	}
           	$output .= "*** el valor para la noticia con ID '$report->id' es '$report->karma_value' </br>\r\n";
           	$report->save();
         endforeach;
        $reports = Report::all(array('conditions' => 'created_at < date_sub(now(), interval 2 day) AND karma_value=1'));
		foreach ($reports as $report) :
            $report->karma_value = 0.5;
           	$report->save();
         endforeach;
        $reports = Report::all(array('conditions' => 'created_at < date_sub(now(), interval 7 day) AND karma_value=0.5'));
		foreach ($reports as $report) :
            $report->karma_value = 0;
           	$report->save();
        endforeach;
         $output .= "Final del proceso: " . time() . "</body></html>";
         echo $output;
         $headers = "From: remedia@remedia.la \r\n";
			$headers .= "Reply-To: remedia@remedia.la \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
         //mail('dacmail@gmail.com', 'Ejecución cálculo coeficiente', $output, $headers);
	}
?>
