<aside id="sidebar">
	<section class="user_info">
		<div class="clearfix fix_reports_counters">
			<div class="fixes"><span class="count"><?= count($all_reports); ?></span> <? _e('noticias'); ?></div>
			<div class="reports"><span class="count"><?= count($subreports); ?></span> <? _e('re:medios'); ?></div>
		</div>
		<div class="total_fixes_counter"><span class="count"><?= $total_fixes[0]->total; ?></span> <? _e('reportes totales'); ?></div>
	</section>
	<section class="block ranking users">
		<h3 class="title"><? _e('Posición en RE:media'); ?></h3>
		<? foreach ($sites_ranking as $site_rank) :?>
			<?$sites_ranking_position++;?>
			<div class="row <?= $site_rank->site==$site ? 'user' : 'clearfix'; ?>">
				<span class="pos"><?= $sites_ranking_position ?></span> <span class="site"><a href="<?= site_url($this->router->reverseRoute('source-profile', array('sitename' => $site_rank->site))); ?>"><?= $site_rank->site; ?></a></span>
			</div>
		<? endforeach; ?>
	</section>
	<? $this->load->view('includes/mini-faqs'); ?>
</aside>
