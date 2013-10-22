<div id="container" class="columns static clearfix">
	<div id="content">
		<h1 class="title">Cofinanciadores</h1>
		<p class="sub_title sep">RE:media ha sido posible gracias a la <a href="http://www.goteo.org/project/remedia.la-mejora-las-noticias/supporters">financiación colectiva por parte de 170 personas</a> a través de la plataforma de crowdfunding Goteo.org.</p>
		<p>Ellas no sólo han permitido que el equipo de <a href="http://nxtmdia.com">Nxtmdia</a> se pudiera poner a trabajar en el diseño
			y desarrollo de la herramienta, sino que han sido la primera comunidad de usuarios de RE:media,
			y la aportación de muchos de ellos en nuestros <a href="http://www.remedia.la/blog/category/la-fabrica/beta-testing/">testings</a> ha sido fundamental.</p>

		<p>A todos ellos, <strong>gracias</strong></p>

			<iframe frameborder="0" height="540px" src="http://www.goteo.org/widget/wof/remedia.la-mejora-las-noticias/580" width="640px" scrolling="no"></iframe>

		<p>También queremos agradecer de forma especial a nuestros <strong>mecenas</strong>, aquellos cofinanciadores que a través de Goteo donaron 600 euros:</p>

		<ul>
		<li><a href="http://www.agitalo.es/">Agítalo 3.0</a></li>
		<li><a href="http://formadepie.org/">Forma de Pie</a></li>
		<li><a href="http://linkatu.net/">Linkatu</a></li>
		</ul>

	<p>Y también a <a href="http://www.irekia.euskadi.net/es">Irekia</a>, la plataforma de open government del Gobierno Vasco, cuya aportación (de 10.690 euros) va a posibilitar que RE:media siga desarrollando nuevas e importantes funcionalidades no previstas en la campaña de crowdfunding (entre ellas la importantísima API) y que se irán implementando durante los primeros meses de vida de RE:media. Os lo iremos contando, como todo, en <a href="http://www.remedia.la/blog">nuestro blog</a>.</p>
	<p>Por último, queremos agradecer públicamente a la empresa de hosting <a href="http://comvive.es">Comvive</a> que nos ceda sin coste alguno un VPS donde alojar RE:media :)</p>

	<p class="nav">Ir a... ‘<a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'que-es-remedia'))); ?>">Qué es remedia</a>’ o a la ‘<a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'como-funciona'))); ?>">FAQ</a>’</p>

	</div>
	<?php $this->load->view('includes/sidebar-static'); ?>
</div>
