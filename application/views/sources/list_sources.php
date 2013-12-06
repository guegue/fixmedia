<div id="container" class="clearfix search top columns">
	<div id="content">
		<h1 class="title"><?=$title?></h1>
		<p class="sub_title"><?=$subtitle?></p>
        <section class="tabs notabs">
        	<ul class="tabs_items">
				<li class="<?= is_cur_page($this, 'sources','index') ? 'ui-state-active' : ''; ?>"><a href="<?= site_url($this->router->reverseRoute('sources')); ?>"><? _e('Global'); ?></a></li>
				<li class="<?= is_cur_page($this, 'sources','reports') ? 'ui-state-active' : ''; ?>"><a href="<?= site_url($this->router->reverseRoute('sources-reports')); ?>"><? _e('Reportes'); ?></a></li>
				<li class="<?= is_cur_page($this, 'sources','fixes') ? 'ui-state-active' : ''; ?>"><a href="<?= site_url($this->router->reverseRoute('sources-fixes')); ?>"><? _e('Re:medios'); ?></a></li>
				
				<li class="<?= is_cur_page($this, 'sources','news') ? 'ui-state-active' : ''; ?>"><a href="<?= site_url($this->router->reverseRoute('sources-news')); ?>"><? _e('Noticias'); ?></a></li>
			</ul>
        </section>
		<section class="users_list list profile">
			<? $position=1 + (($page-1)*10);?>
			<? foreach ($sources as $source) : ?>
				<article class="user_info clearfix">
					<? if ($position<=3) :?>
						<div class="avatar podium">
							<? if (!file_exists('static/sources/'. $source->site . '.jpg')) :?>
								<img src="<?= base_url('static/avatar-source.jpg'); ?>" width="150" alt="<?=$source->site;?>" />
							<? else : ?>
								<img src="<?= base_url('static/sources/' . $source->site .'.jpg'); ?>" width="150" alt="<?=$source->site;?>" />
							<? endif; ?>
							<div class="position"><?=$position;?>º</div>
						</div>
					<? else : ?>
						<div class="avatar others">
							<? if (!file_exists('static/sources/'. $source->site . '.jpg')) :?>
								<img src="<?= base_url('static/avatar-source.jpg'); ?>" width="100" alt="<?=$source->site;?>" />
							<? else : ?>
								<img src="<?= base_url('static/sources/' . $source->site .'.jpg'); ?>" width="100" alt="<?=$source->site;?>" />
							<? endif; ?>
							<div class="position"><?=$position;?></div>
						</div>
					<? endif; ?>
						<div class="data">
					  		<h2 class="name"><a href="<?= site_url($this->router->reverseRoute('source-profile', array('sitename' => $source->site))); ?>"><?= $source->site; ?></a></h2>
					  		<p class="counter <?= is_cur_page($this, 'sources','news') ? 'highlight' : ''; ?>"><? _e('Noticias'); ?>: <strong><?= $source->news; ?></strong></p>
                            <p class="counter <?= is_cur_page($this, 'sources','fixes') ? 'highlight' : ''; ?>"><? _e('Reportes'); ?>: <strong><?= $source->total_fixes; ?></strong></p>
                            <p class="counter <?= is_cur_page($this, 'sources','reports') ? 'highlight' : ''; ?>"><? _e('Re:medios'); ?>: <strong><?= $source->get_reports_by_site(); ?></strong></p>
							<p class="counter <?= is_cur_page($this, 'sources','index') ? 'highlight' : ''; ?>"><? _e('Reputación'); ?>: <strong><?= $source->karma ?></strong></p>
					  </div>
				</article>
			<? $position++; endforeach; ?>
		</section>
		<div class="pagination clearfix"><?=$pagination_links;?></div>
	</div>
	<?php $this->load->view('includes/sidebar'); ?>
</div>
