<div id="container" class="columns static clearfix">
	<div id="content">
		<h1 class="title">Contacto</h1>
		<p class="sub_title sep">Para cualquier duda o comentario que te surja, no dudes en escribirnos a: <a href="mailto:comunidad@remedia.la">comunidad@remedia.la</a></p>
				<p>RE:media es un proyecto de <a href="http://www.guegue.com/" target="_blank">GüeGüe Comunicaciones</a>.</p>
<p>Utilizamos el software desarrollado por <a href="http://nxtmdia.com/" target="_blank">Nxtmedia</a>, liberado a la comunidad de software libre (<a href="https://github.com/dacmail/fixmedia" target="_blank">puedes verlo y descargarlo en GitHub)</a>.</p>
<p>Nos hemos inspirado en un proyecto muy similar, desarrollado en España, llamado <a href="http://fixmedia.org" target="_blank">Fixmedia</a>, cuyo equipo nos ha apoyado desde la distancia.</p>
<p>Los criterios de edición están abiertos a tu colaboración; si se te ocurre algún error típico de los medios de comunicación escritos que no hayamos contemplado, te invitamos a que <a href="https://docs.google.com/document/d/1DWL2b7JLiundPV01-xkXHi4uJqCpoDsqat4coMZmJ20/edit" target="_blank">aportes tus comentarios en este documento on.line</a>.</p> 
		
		<p class="nav">Ir a...</p>
				<ul>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'equipo'))); ?>">Equipo</a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'como-funciona'))); ?>">FAQ</a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('que-es-remedia')))); ?>"><? _e('Qué es RE:media'); ?></a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('como-funciona')))); ?>"><? _e('Cómo funciona'); ?></a></li>
				<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('aviso-legal')))); ?>"><? _e('Información legal'); ?></a></li>
				</ul>

	</div>
	<?php $this->load->view('includes/sidebar-static'); ?>
</div>
