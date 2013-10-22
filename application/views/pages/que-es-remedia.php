<div id="container" class="columns static clearfix">
	<div id="content">
		<h1 class="title">¿Qué es RE:media?</h1>
		<p class="sub_title sep">RE:media es una herramienta que nos permite mejorar las noticias entre todos, pidiendo que alguien las arregle (FIX), ampliando la información o corrigiendo la existente.</p>
		<p>A través de RE:media podrás -con dos clics- reportar errores y aportar ampliaciones a las noticias de cualquier sitio online. También podrás valorar las aportaciones de otros usuarios y contrastar diferentes fuentes y opiniones.</p>
		<iframe width="640" height="360" src="http://www.youtube.com/embed/Jt6wBkVCczo?rel=0" frameborder="0" allowfullscreen></iframe>
		<p><strong><a href="http://www.remedia.la/estaticas/como-funciona">¿Cómo usar RE:media?  Es muy fácil, descúbrelo aquí.</a></strong></p>
	<p class="nav">Ir a... ‘<a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'como-funciona'))); ?>">Cómo funciona</a>’ o a la ‘<a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'como-funciona'))); ?>">FAQ</a>’</p>

	</div>
	<?php $this->load->view('includes/sidebar-static'); ?>
</div>
