<div id="container" class="columns static clearfix">
	<div id="content">
		<h1 class="title sep">Usa el marcador RE:media</h1>
		<p>El marcador o botón RE:media es un <a href="http://es.wikipedia.org/wiki/Bookmarklet" target="_blank">bookmarklet</a> que te permite arreglar las noticias directamente desde la web donde las estás leyendo, sin necesidad de abrir otra pestaña o ventana.</p>
        <p class="relative"><a href="javascript:(function()%7B%20%20_my_script%3Ddocument.createElement(%27SCRIPT%27)%3B%20%20_my_script.type%3D%27text/javascript%27%3B%20%20_my_script.src%3D%27http://remedia.la/js/bookmarklet.js%27%3B%20%20document.getElementsByTagName(%27head%27)%5B0%5D.appendChild(_my_script)%3B%7D)()%3B" class="bookmarklet">RE:portar</a> <span id="bookmarklet-arrow"></span></p>
        
		<p>Su uso es muy sencillo y no requiere descargas ni instalaciones. Simplemente arrastra el  botón a la barra de marcadores de tu navegador.</p>
        
      <br  />
      <br  />
        
        <p class="center"><img class="border" alt="Animación que muestra cómo arrastrar el botón al navegador, en tres pasos: pinchar, arrastrar, soltar" src="<?= base_url('static/bookmarklet/marcador.gif'); ?>"/></p>
        
      <br  />
      <br  />
        
        <p>Una vez lo hayas hecho, en la barra de marcadores de tu navegador aparecerá el bookmarklet "RE:portar".</p>
        
       <p>No ves dónde colocar el botón? <a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('navegadores')))); ?>"><? _e('Quizás esta guía te ayude'); ?></a>.</p>
            

		<!--<p class="center"><img class="border" alt="Barra de marcadores" src="<?= base_url('static/bookmarklet/bookmarklet-2.jpg'); ?>"/></p>-->
      
             <p>Así, cuando estés leyendo una noticia que creas que debe ser mejorada, podrás reportarla directamente haciendo clic en el botón. Si no te has identificado en RE:media, tendrás que hacerlo, en la pestaña nueva que se abre.
             <p>En la página de la noticia, se te abrirá una ventanita.</p>
			
             <br  />
			<p class="center"><img class="border" alt="Barra de marcadores" src="<?= base_url('static/bookmarklet/bookmarklet-3.jpg'); ?>"/></p>
           
            <br  />
            <p>Si eres la primera persona que reporta la noticia, te anotas su descubrimiento<p>
			<br  />
			<p class="center"><img class="border" alt="Enviar a re:media" src="<?= base_url('static/bookmarklet/bookmarklet-1.png'); ?>"/></p> 
            <br  />
			<p>Si la noticia que estás leyendo ya fue descubierta, la ventanita te informará de ello:</p>
			 <br  />
			<p class="center"><img class="border" alt="Barra de marcadores" src="<?= base_url('static/bookmarklet/bookmarklet-4.jpg'); ?>"/></p>
             <br  />
		<p>Podrás añadir tu reporte, tu voto de que esta noticia necesita un re:medio.</p>
        <p>También podrás ver la ficha de la noticia en RE:media o añadir tu corrección o ampliación, tu re:medio.</p>

 		<p>¡Así de fácil!</p>

		<p class="small"><strong>Importante</strong>: El marcador de RE:media <strong>NO</strong> guarda ningún tipo de información de tu navegación ni dato personal. Los reportes y re:medios que hagas desde tu marcador aparecerán en tu perfil de re:mediante, igual que si los hubieras hecho desde remedia.la.</p>

		<p class="small"><strong>¿Dudas? ¿Problemas para usar el marcador?</strong> Escríbenos cuando quieras a <a href="mailto: comunidad@remedia.la">comunidad(arroba)remedia(punto)la</a></p>

		<p class="nav">Ir a...</p>
				<ul>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('como-usar')))); ?>"><? _e('Cómo usar RE:media'); ?></a></li>
                <li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'faq'))); ?>"><? _e('FAQ'); ?></a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('aviso-legal')))); ?>"><? _e('Aviso legal'); ?></a></li>
				</ul>
	</div>
	<?php $this->load->view('includes/sidebar-static'); ?>
</div>
