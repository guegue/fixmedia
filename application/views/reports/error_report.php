<div id="container" class="clearfix sending editing columns">
	<div id="content">
		<? $data['report'] = $report_sent; ?>
		<?php $this->load->view('includes/report-info',$data); ?>
		<? $hidden_fields = array('report_id' => $report['report_id'], 'report_url' => $report['report_url'], 'report_title' => $report['report_title'], 'site' => $report['site']); ?>
		<?php echo form_open($this->router->reverseRoute('reports-preview'), array('id' => 'form_report', 'class' => 'clearfix'), $hidden_fields) ?>
			<? foreach ($report['type'] as $index => $type) : $count=$index+1;?>
				<div class="report_data">
					<p><label class="label"><? _e('Elige el tipo de reporte'); ?></label>
					<div class="wrap_types clearfix">
					<? foreach ($reports_types_tree as $report_type) : ?>
						<span class="wrap_type <? echo (($type==$report_type->id) ? 'active' : '');?>">
							<input data-count="<?=$count?>" data-service="<?php echo site_url('services/get_subtypes_select'); ?>" type="radio" name="type[<?=$count-1?>]" class="main_type_radio" id="type_<?=$report_type->id;?>" value="<?=$report_type->id;?>"  <? echo (($type==$report_type->id) ? 'checked' : '');?>/>
							<label for="type_<?=$report_type->id;?>"><?=$report_type->type;?></label>
						</span>
						<? if ($type==$report_type->id) { $selected_type=$report_type; } ?>
					<? endforeach; ?>
					</div>
					</p>
					<div class="fields_wrap open" id="fields_<?=$count;?>">
						<div class="row wrap_title <?php  echo (form_error('title[' . $index . ']') ? 'wrap_error' : ''); ?>">
							<label class="label" for="title"><? _e('¿Qué quieres arreglar?'); ?> <span class="tip"><? _e('Dilo en un titular, recuerda que al final puedes seguir añadiendo reportes a esta misma noticia'); ?></span></label>
							<input class="text" type="text" id="title_<?=$count;?>" name="title[]" value="<?php echo set_value('title[' . $index . ']'); ?>" maxlength="120" />
							<span class="help">
								<? if ($type==1) : ?>
								<? _e('Esto es lo primero que verán el resto de usuarios, es importante titular bien: destaca en una frase la esencia de tu corrección.'); ?>
								<? else : ?>
								<? _e('Esto es lo primero que verán el resto de usuarios, es importante titular bien: destaca en una frase la esencia de tu ampliación.'); ?>
								<? endif ?>
								<span class="charcount">120</span>
							</span>
							<?php echo form_error('title[' . $index . ']', '<span class="error">', '</span>'); ?>
						</div>

						<div class="row wrap_content <?php  echo (form_error('content[' . $index . ']') ? 'wrap_error' : ''); ?>">
							<label class="label" for="content"><? _e('Explícalo'); ?> <span class="tip"><? _e('Si es necesario'); ?></span></label>
							<textarea class="textarea" id="content_<?=$count;?>" name="content[]" maxlength="400"><?php echo set_value('content[' . $index . ']'); ?></textarea>
							<div class="help">
								<? if ($type==1) : ?>
								<? _e('Identifica en breves palabras la parte de la noticia que consideras que debe ser corregida, por qué debe serlo y cuál es tu alternativa.'); ?>
								<? else : ?>
								<? _e('Identifica en breves palabras por qué crees que a esta noticia la falta más contenido y cuál es.'); ?>
								<? endif ?>
								<span class="charcount">400</span>
							</div>
							<?php echo form_error('content[' . $index . ']', '<span class="error">', '</span>'); ?>
						</div>
						<? $classes=''; ?>
						<? foreach ($report['urls'][$index] as $k => $url) : ?>
							<? $classes .= form_error('urls[' . $index . '][' . $k .']') ?  ' wrap_error' : ''; ?>
						<? endforeach; ?>
						<div class="row wrap_urls <? echo $classes; ?>">
							<label class="label" for="urls"><? _e('Fuentes o archivos'); ?> <span class="tip"><? _e('Si es necesario añadie URL a fuentes directas, otras noticias, enlaces, etc.'); ?></span></label>
							<? if ($report['urls'][$index]) :?>
								<? foreach ($report['urls'][$index] as $k => $url) : ?>
									<input type="text" class="urls text" id="urls_<?=$count;?>" name="urls[<?=$count-1;?>][]" value="<?=$url?>"/>
									<?php echo form_error('urls[' . $index . '][' . $k .']', '<span class="error">', '</span>'); ?>
								<? endforeach; ?>
							<? else : ?>
								<input type="text" class="urls text" id="urls_<?=$count;?>" name="urls[<?=$count-1;?>][]" value=""/>
							<? endif; ?>
							<span class="help">
								<? if ($type==1) : ?>
								<? _e('Por ejemplo, un enlace a otra noticia sobre el mismo asunto o un enlace a un documento, fotografía o archivo que justifiquen tu corrección.'); ?>
								<? else : ?>
								<? _e('Por ejemplo, un enlace a otra noticia sobre el mismo asunto pero más completa o un enlace a un documento, fotografía, gráfico o archivo que contengan la ampliación.'); ?>
								<? endif ?>
							</span>

							<? if (count($report['urls'][$index])<3) : ?><a href="#" class="add_url"><? _e('Agregar otra URL'); ?></a><? endif; ?>
						</div>


						<div class="row wrap_type_info">

							<label class="label" for="type_info"><? _e('Clasifica tu reporte'); ?> <span class="tip"><? _e('Ayuda a la comunidad a comprender rápidamente cual es el problema en esta noticia'); ?></span></label>
								<p class="<? echo (($report['type_info'][$index]==0) ? 'checked' : ''); ?> option clearfix"><input type="radio" name="type_info[<?=$count-1;?>]" value="0" id="type0-<?=$count-1;?>" checked /><label for="type0-<?=$count-1;?>">Ninguna</label></p>
							<? foreach ($selected_type->childrens as $children) : ?>
								<p class="<? echo (($report['type_info'][$index]==$children->id) ? 'checked' : ''); ?> option clearfix"><input type="radio" name="type_info[<?=$count-1;?>]" id="type<?=$children->id; ?>-<?=$count-1;?>" value="<?=$children->id; ?>" <? echo (($report['type_info'][$index]==$children->id) ? 'checked' : ''); ?> /><label for="type<?=$children->id; ?>-<?=$count-1;?>"><?=$children->type;?></label></p>
							<? endforeach; ?>
							<span class="help">
								<? if ($type==1) : ?>
									<? _e('Escoge la opción que mejor se ajuste al tipo de corrección que deseas realizar sobre esta noticia.'); ?>
								<? else : ?>
									<? _e('Escoge la opción que mejor se ajuste al tipo de ampliación que deseas realizar sobre esta noticia.'); ?>
								<? endif ?>
							</span>
						</div>
					</div>
				</div>
			<? endforeach; ?>
			<a href="#" id="add_more" data-service="<?php echo site_url('services/get_more_data'); ?>" class="add"><? _e('Añadir otra corrección/ampliación'); ?></a>
			<input type="submit" class="button submit" name="submit" value="<? _e('Veamos cómo queda'); ?>" />
		</form>
		<a href="<?= site_url(); ?>" id="cancel" class="cancel"><? _e('Cancelar'); ?></a>
	</div>

	<aside id="sidebar" class="report">
		<div class="counter"><span class="count count-vote-<?= $report_sent->id ?>"><?= $report_sent->votes_count ?></span>
			<? if ($report_sent->votes_count==1 && ($logged_in && $report_sent->is_voted($the_user->id))) : ?>
			<? _e('persona (tú) quiere que alguien la re:medie'); ?>
			<? elseif ($report_sent->votes_count==1) :?>
			<? _e('persona quiere que alguien la re:medie'); ?>
			<? else : ?>
			<? _e('personas quieren que alguien la re:medie'); ?>
			<? endif; ?>
		</div>
	</aside>

</div>
