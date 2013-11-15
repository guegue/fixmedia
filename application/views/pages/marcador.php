<div id="container" class="columns static clearfix">
	<div id="content">
		<h1 class="title sep">Usa el marcador RE:media</h1>
		<p class="center"><img class="border" alt="Enviar a re:media" src="<?= base_url('static/bookmarklet/bookmarklet-1.png'); ?>"/></p>
		<p>El marcador RE:media es un <a href="http://es.wikipedia.org/wiki/Bookmarklet" target="_blank">bookmarklet</a> que te permite arreglar las noticias directamente desde la web donde la estás leyendo, sin necesidad de abrir otra pestaña o ventana para reportarla, compartirla y/o re:mediarla..</p>
		<p>Su uso es muy sencillo y no requiere descargas ni instalaciones. Simplemente arrastra el siguiente botón a la barra de marcadores de tu navegador:</p>

		<p class="relative"><a href="javascript:(function()%7B%20%20_my_script%3Ddocument.createElement(%27SCRIPT%27)%3B%20%20_my_script.type%3D%27text/javascript%27%3B%20%20_my_script.src%3D%27http://remedia.la/js/bookmarklet.js%27%3B%20%20document.getElementsByTagName(%27head%27)%5B0%5D.appendChild(_my_script)%3B%7D)()%3B" class="bookmarklet">Enviar a re:media</a> <span id="bookmarklet-arrow"></span></p>

		<p>Una vez lo hayas hecho, en la barra de marcadores de tu navegador aparecerá el bookmarklet “Enviar a re:media”:</p>

		<p class="center"><img class="border" alt="Barra de marcadores" src="<?= base_url('static/bookmarklet/bookmarklet-2.jpg'); ?>"/></p>


		<p>Así, cuando estés leyendo una noticia que creas que debe ser mejorada, podrás reportarla y/o re:mediarla directamente haciendo clic en ese marcador. Se te abrirá una ventanita como esta:</p>

		<p class="center"><img class="border" alt="Barra de marcadores" src="<?= base_url('static/bookmarklet/bookmarklet-3.jpg'); ?>"/></p>

		<p>Al hacer clic en el botón, irás a otra pestaña, para completar el proceso.</p>

		<p>Si la noticia que estás leyendo ya fue descubierta en RE:media, la ventanita te informará de ello:</p>

		<p class="center"><img class="border" alt="Barra de marcadores" src="<?= base_url('static/bookmarklet/bookmarklet-4.jpg'); ?>"/></p>
		<p>En la ventanita también podrás re:mediar la noticia, verla o ver datos del medio.</p>

 		<p>¡Así de fácil!</p>

		<p class="small"><strong>Importante</strong>: El marcador de RE:media NO guarda ningún tipo de información de tu navegación ni ningún dato personal. Los reportes y re:medios que hagas desde tu marcador aparecerán en tu perfil igual que si los hubieras hecho desde Remedia.la.</p>

		<p class="small"><strong>¿Dudas? ¿Problemas para usar el marcador?</strong> Escríbenos cuando quieras a comunidad(arroba)remedia(punto)org</p>

		<p class="nav">Ir a... ‘<a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'equipo'))); ?>">Equipo</a>’ o a la ‘<a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'como-funciona'))); ?>">FAQ</a>’</p>

	</div>
	<?php $this->load->view('includes/sidebar-static'); ?>
</div>
