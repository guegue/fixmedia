<aside id="sidebar">
	<section class="likes">
		<a href="https://twitter.com/RE_media_" class="twitter-follow-button" data-show-count="false" data-lang="es"><? _e('Seguir a @RE_media_'); ?></a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		<div class="fb-like" data-href="http://www.facebook.com/remedia.la" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div>
	</section>
	<section class="message">
		<p><a href="http://www.remedia.la/estaticas/marcador">Usa nuestro marcador para re:mediar desde cualquier sitio</a></p>
	<!--	<p><a href="http://www.remedia.la/estaticas/botones">Usa nuestro botón</a></p>-->
	</section>
	<? if (isset($sites_most_fixes)) :?>
	<section class="block ranking">
		<h3 class="title"><? _e('Medios con más reportes'); ?></h3>
		<? $pos=0; ?>
		<? foreach ($sites_most_fixes as $site) :?>
			<?$pos++;?>
			<div class="row clearfix">
				<span class="pos"><?=$pos?></span> <span class="site"><a href="<?= site_url($this->router->reverseRoute('source-profile', array('sitename' => $site->site))); ?>"><?= $site->site; ?></a></span> <span class="votes"><?= $site->votes; ?></span>
			</div>
		<? endforeach; ?>
	</section>
	<? endif; ?>
	<? if (isset($sites_most_reported)) :?>
	<section class="block ranking">
		<h3 class="title"><? _e('Medios con más re:medios'); ?></h3>
		<? $pos=0; ?>
		<? foreach ($sites_most_reported as $site) :?>
			<?$pos++;?>
			<div class="row clearfix">
				<span class="pos"><?=$pos?></span> <span class="site"><a href="<?= site_url($this->router->reverseRoute('source-profile', array('sitename' => $site->site))); ?>"><?= $site->site; ?></a></span> <span class="votes"><?= $site->reports; ?></span>
			</div>
		<? endforeach; ?>
	</section>
	<? endif; ?>
	<? $this->load->view('includes/mini-faqs'); ?>
</aside>
