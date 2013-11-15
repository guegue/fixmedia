<footer id="footer">
	<section class="main-footer">
		<div class="wrap clearfix">
			<div class="block">
				<p class="logo">Remedia.la</p>
				<p><? _e('Plataforma latinoamericana <br/>para la edición colaborativa de noticias,<br/> un proyecto de <a href="http://guegue.com" target="_blank\">GüeGüe Comunicaciones</a>'); ?></p>
			</div>

			<nav class="clearfix menus">
				<ul class="menu">
					<li class="name"><? _e('Índice'); ?></li>
					<li><a href="<?= site_url(); ?>"><? _e('Portada'); ?></a></li>
					<li><a href="<?= site_url(); ?>"><? _e('Más urgentes'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('home-pending')); ?>"><? _e('Pendientes'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('home-recents')); ?>"><? _e('Recientes'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('stats')); ?>"><? _e('Estadísticas'); ?></a></li>
				</ul>
				<ul class="menu">
					<li class="name"><? _e('Comunidad'); ?></li>
					<li><a href="http://remedia.la/usuario/registro"><? _e('Registro'); ?></a></li>
					<li><a href="http://remedia.la/usuario/entrar"><? _e('Inicio de sesión'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('user-profile', array('username' => $the_user->username))); ?>"><? _e('Mi perfil'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('marcador')))); ?>"><? _e('Usa nuestro marcador'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('users')); ?>"><? _e('Top re:mediantes'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('sources')); ?>"><? _e('Top medios'); ?></a></li>
					<li><a href="http://blogremedia.wordpress.com"><? _e('Blog'); ?></a></li>
					<li><a href="https://www.facebook.com/remedia.la"><? _e('En Facebook'); ?></a></li>
					<li><a href="https://twitter.com/RE_media_"><? _e('En Twitter'); ?></a></li>
				</ul>
				<ul class="menu">
					<li class="name">Ayuda</li>
					<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('que-es-remedia')))); ?>"><? _e('Qué es RE:media'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('como-funciona')))); ?>"><? _e('Cómo funciona'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('equipo')))); ?>"><? _e('Equipo'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('faq')))); ?>"><? _e('FAQ'); ?></a></li>
					<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('contacto')))); ?>"><? _e('Contacto'); ?></a></li>
					<!--<li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('aviso-legal')))); ?>"><? _e('Información legal'); ?></a></li>-->

				</ul>
			</nav>
		</div>
	</section>
	<section class="logos-footer">
		<div class="wrap clearfix">
			<div class="develop">
				<h3 class="title"><? _e('Reutilizamos el software desarrollado por'); ?>:</h3>
				<a href="http://nxtmdia.com"><img alt="Nxtmdia" src="<?= base_url('images/logos/logo-nxtmdia.jpg'); ?>"/></a>
			</div>
			<div class="cofin">
<!--
				<h3 class="title"><? _e('Cofinanciadores destacados'); ?>:</h3>
-->
			</div>
		</div>
		<p class="server"><? _e('Hospedaje y desarrollo web: <a href="http://guegue.com">Güeüe</a>'); ?></p>
	</section>

</footer>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30564782-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>
