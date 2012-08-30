
<div id="container" class="clearfix sending preview columns">
	<div id="content">
		<section class="report_info clearfix">
			<div class="screenshot">
				<img src="<?php echo base_url(); ?>fakes/screenshot-med.jpg" alt="Captura de <?=$report_sent->title;?>" />
				<a class="url_sent" href="<?=$report_sent->url; ?>" target="blank">Ver noticia original</a>
			</div>
			<h1 class="title"><?=$report_sent->title;?></h1>
			<div class="report_meta">
				<p class="authorship">Enviado por <a href="<?= site_url($this->router->reverseRoute('user-profile', array('username' => $report_sent->user->name))); ?>"><?= $report_sent->user->name; ?></a> el <?= $report_sent->created_at->format('d/m/Y'); ?></p>
				<p class="source">Fuente: <?= $report_sent->site; ?></p>
			</div>
		</section>
		<h2 class="action_title"><strong>Este es el reporte que vas a publicar</strong> Así es como se verá si lo envías</h2>

		<? $count=1; foreach ($report['type_info'] as $index => $type) :  ?>
			<div class="subreport">
				<div class="clearfix">
					<span class="counter">
						<strong>0</strong>
					</span>
					<div class="subreport_info">
						<h3 class="subreport_title"><?=$report['title'][$index]; ?></h3>
						<p class="authorship">Enviado por <?= $the_user->name; ?> el <?= date('d/m/Y'); ?></p>
						<p class="clearfix subreport_types">
							<? if ($types[$index]->parent_type) : ?>
							<span class="type"><?=$types[$index]->parent_type->type ;?></span> 
							<span class="type_info" title="<?= $types[$index]->type; ?>"><?= character_limiter($types[$index]->type,50); ?></span>
							<? else : ?>
								<span class="type"><?= $types[$index]->type; ?></span>
							<? endif; ?> 
						</p>
						
						<? if (!empty($report['content'][$index]) || !empty($report['urls_decode'][$index][0])) : ?>

						<a href="#" class="toggle_info show">Mostrar detalles y fuentes</a>
						<div class="subreport_content">
							<?=$report['content'][$index];?>
							<? if (count(array_filter($report['urls_decode'][$index]))>0) : ?>
								<h4 class="subreport_urls">Fuentes:</h4>
								<? foreach($report['urls_decode'][$index] as $url) : ?>
								<a href="<?=$url?>" target="_blank" class="source"><?=$url; ?></a>
								<? endforeach; ?>
							<? endif; ?>
						</div>
						<? endif; ?>
					</div>
				</div>
			</div>



		<? $count++; endforeach; ?>

		<? $hidden_fields = form_hidden(array_merge($report, array('edit_draft' => true))); ?>
		<?php echo form_open($this->router->reverseRoute('reports-send', array('id' => $report['report_id'])), '') ?>
			<? echo $hidden_fields; ?>
			<input type="submit" name="submit" class="edit" value="&larr; Hacer modificaciones" /> 
		<? echo form_close(); ?>

		<?php echo form_open($this->router->reverseRoute('reports-save'), '') ?>
			<? echo $hidden_fields; ?>
			<input type="submit" name="submit" class="button submit" value="Enviar reporte" /> 
		<? echo form_close(); ?>		
	</div>

	<aside id="sidebar">
		<div class="counter">
			<span class="count count-vote-<?= $report_sent->id ?>"><?= $report_sent->votes_count ?></span> 
			<? if ($report_sent->votes_count==1 && ($logged_in && $report_sent->is_voted($the_user->id))) : ?>
			persona (tu) quiere que alguien la arregle
			<? elseif ($report_sent->votes_count==1) :?>
			persona quiere que alguien la arregle
			<? else : ?>
			personas  quieren que alguien la arregle
			<? endif; ?>
		</div>
	</aside>
</div>
