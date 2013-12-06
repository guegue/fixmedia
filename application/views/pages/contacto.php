<div id="container" class="columns static clearfix">
	<div id="content">
		<h1 class="title">Contacto</h1>
		<p class="sub_title sep">Para cualquier duda o comentario que te surja, no dudes en escribirnos a: <a href="mailto:comunidad@remedia.la">comunidad@remedia.la</a></p>
        <p> </p>
        <h2>También estamos en...</h2>
        
        <ul>
        <li><a href="https://www.facebook.com/remedia.la" target="_blank">Facebook</a></li>
        <li><a href="https://twitter.com/RE_media_" target="_blank">Twitter</a></li>
       <li><a href="http://blogremedia.wordpress.com/" target="_blank">Y tenemos blog</a></li>
        </ul>
  <p> </p><p> </p>
        
        <h2>¿Problemas?</h2>
        <p>¿Has detectado un error, hay algo que falla, que falta o que no te gusta? Por favor, cuéntanoslo a través de este formulario:
        <iframe src="https://docs.google.com/forms/d/1RazCkfSfwfJrgtDpH9o8dxHCbWfALthXNGyNr8AH6i0/viewform?embedded=true" width="640" height="787" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe></p>
	
						
		<p class="nav">Ir a...</p>
				<ul>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'equipo'))); ?>"><? _e('Equipo'); ?></a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'faq'))); ?>"><? _e('FAQ'); ?></a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('como-usar')))); ?>"><? _e('Cómo usar RE:media'); ?></a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('aviso-legal')))); ?>"><? _e('Aviso legal'); ?></a></li>
				</ul>

	</div>
	<?php $this->load->view('includes/sidebar-static'); ?>
</div>
