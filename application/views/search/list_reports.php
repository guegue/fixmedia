<div id="container" class="clearfix search columns">
	<div id="content">
		<h1 class="title"><?=$title?></h1>
		<form action="<?= site_url($this->router->reverseRoute('search')); ?>" method="GET" class="searchform">
           	<input type="text" value="<?= isset($term) ? $term : ''; ?>" name="q" class="input"/>
        </form>
        <section class="tabs notabs">
        	<ul class="tabs_items">
				<li class=""><a href="<?= site_url($this->router->reverseRoute('search')); ?>?q=<?= isset($term) ? $term : ''; ?>"><? _e('Noticias'); ?></a></li>
				<li class="ui-state-active"><a href="<?= site_url($this->router->reverseRoute('search-reports')); ?>?q=<?= isset($term) ? $term : ''; ?>"><? _e('Re:medios'); ?></a></li>
				<li class=""><a href="<?= site_url($this->router->reverseRoute('search-users')); ?>?q=<?= isset($term) ? $term : ''; ?>"><? _e('Re:mediantes'); ?></a></li>
			</ul>
        </section>
        <section class="order clearfix">
        	<span class="label"><? _e('Ordernar por'); ?>:</span>
        	<ul class="orderby clearfix">
        		<li class="item <?= $orderby ? '' : 'active' ?>"><a href="<?= site_url($this->router->reverseRoute('search-reports')); ?>?q=<?= isset($term) ? $term : ''; ?>"><? _e('Relevancia'); ?></a></li>
        		<li class="item <?= $orderby ? 'active' : '' ?>"><a href="<?= site_url($this->router->reverseRoute('search-reports')); ?>?q=<?= isset($term) ? $term : ''; ?>&order=date"><? _e('Fecha'); ?></a></li>
        	</ul>
        </section>
        <section class="reports_list subreports">
        	<? if (count($reports)) : ?>
				<? foreach ($reports as $report) : ?>
					<article class="report_info clearfix">
						<div class="screenshot">
							<? if (is_null($report->report->screenshot) || $report->report->screenshot=="ERROR") : ?>
								<img src="<?= base_url('static/screenshot-thumb.jpg'); ?>" alt="<? printf(_('Captura de %s'), $report->title); ?>"  title="karma <?= $report->report->karma ?>?>"/>
							<? else : ?>
								<img src="<?=base_url('images/sources/thumb-home-' . $report->report->id . '.png'); ?>" width="150" alt="<? printf(_('Captura de %s'), $report->title); ?>"  title="karma <?= $report->report->karma ?>?>"/>
							<? endif; ?>
							<div class="report_title"><?=$report->report->title;?></div>
						</div>
						<h2 class="title"><a href="<?= site_url($this->router->reverseRoute('reports-view', array('slug' => $report->report->slug))); ?>"><?=$report->title;?></a></h2>
						<div class="report_text"><?= highlight_phrase($report->content, $term, '<strong>' , '</strong>');?></div>
						<div class="report_meta">
							<p class="authorship"><? _e('Reportado por'); ?> <a href="<?= site_url($this->router->reverseRoute('user-profile', array('username' => $report->user->username))); ?>"><?= $report->user->name; ?></a> <? _e('el'); ?> <?= $report->created_at->format('d/m/Y'); ?></p>
							<p class="clearfix subreport_types type_<?= preg_replace('/[^a-z0-9]+/i','-',strtolower($report->type));?>">
								<span class="type"><?=$report->type;?></span>,
								<? if ($report->type_info!=$report->type) : ?>
								<span class="type_info" title="<?= $report->type_info; ?>"><?= character_limiter($report->type_info,120); ?></span>
								<? endif; ?>
							</p>
							<p class="source"><? _e('Medio'); ?>: <a href="<?= site_url($this->router->reverseRoute('source-profile', array('sitename' => $report->report->site))); ?>"><?= $report->report->site; ?></a></p>
						</div>
					</article>
				<? endforeach; ?>
			<? else : ?>
			<p class="sub_title"><? _e('No hemos encontrado re:medios con esos criterios de búsqueda'); ?></p>
			<? endif; ?>
		</section>
		<div class="pagination clearfix"><?=$pagination_links;?></div>
	</div>
	<?php $this->load->view('includes/sidebar'); ?>
</div>
