<div id="container" class="clearfix sending new clearfix">
	<div id="content">
		<h1 class="title sep"><? _e('Reporta una noticia'); ?></h1>
		<p class="sub_title"><? _e('Si has leído una noticia que crees que puedes corregir o ampliar, comienza introduciendo aquí su URL'); ?></p>
		<?php echo form_open($this->router->reverseRoute('reports-create')) ?>
			<div class="row wrap_create_report">
				<label class="label" for="title"><? _e('Url de la noticia'); ?></label>
				<input class="text" type="input" placeholder="<? _e('http://ejemplo.com/noticia.html'); ?>" value="<?= isset($url) ? $url : set_value('url'); ?>" name="url" /><br />
				<?php echo form_error('url', '<span class="error">', '</span>'); ?>
				<? if (!empty($error_url_check)) : ?>
					<span class="error"><?=$error_url_check ?></span>
				<? endif; ?>
			</div>
			<input class="submit button" type="submit" name="submit" value="<? _e('Siguiente'); ?>" />
		</form>
	</div>
</div>

