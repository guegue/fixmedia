<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=1024" />
	<title><?=$page_title?> - RE:media</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/images/favicon.png">
    <meta name="description" content="<?= isset($description) ? $description : ''; ?>" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.23.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/default.js?v=1.4"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css?v=1.4">
</head>
<body>
    <header id="header">
        <div class="wrap clearfix">
            <p class="main_title"><a href="<?php echo base_url(); ?>" title="<? _e('RE:media, mejora las noticias'); ?>"><img src="<?= base_url('images/logo-remedia.png'); ?>" alt="<? _e('RE:media, mejora las noticias'); ?>" title="<? _e('RE:media, mejora las noticias'); ?>"/></a></p>
            <nav class="top-menu">
                <ul class="menu clearfix">
                    <li><? _e('arrastra el botón'); ?> <a href="javascript:(function()%7B%20%20_my_script%3Ddocument.createElement(%27SCRIPT%27)%3B%20%20_my_script.type%3D%27text/javascript%27%3B%20%20_my_script.src%3D%27http://remedia.la/js/bookmarklet.js%27%3B%20%20document.getElementsByTagName(%27head%27)%5B0%5D.appendChild(_my_script)%3B%7D)()%3B" class="bookmarklet"><? _e('Enviar a RE:media'); ?></a> <? _e('a tu navegador'); ?> [<a href="<?= site_url($this->router->reverseRoute('statics', array('page' => 'marcador'))); ?>"><? _e('+ info'); ?></a>]</li>
                    <li><a href="<?= site_url($this->router->reverseRoute('statics', array('page' =>  _('que-es-remedia')))); ?>"><? _e('¿Qué es RE:media?'); ?></a></li>
                </ul>
            </nav>
            <? if (!$logged_in) : ?>
                <a class="log_in" href="<?= site_url($this->router->reverseRoute('login')); ?>"><? _e('Iniciar sesión'); ?></a>
            <? else :?>
                <section class="user">
                    <a class="welcome" href="#"><span class="user_name"><?= $the_user->name; ?></span> <?= get_avatar($the_user, 40)?>
                    <? if (count($the_user->unread_activity)) : ?> <span title="<? _e('Notificaciones pendientes'); ?>" class="unread-activity"><?= count($the_user->unread_activity); ?></span><? endif; ?></a>
                    <div class="user_info">
                        <span class="indicator"></span>
                        <div class="clearfix">
                            <div class="user_avatar">
                                <?=get_avatar($the_user, 100,  sprintf(_("Avatar de %s"),$the_user->name)); ?>
                                <a href="<?= site_url($this->router->reverseRoute('user-profile', array('username' => $the_user->username))); ?>"><? _e('Ver perfil'); ?></a>
                            </div>

                            <div class="user_data">
                                <h2 class="name"><?= $the_user->name; ?></h2>
                                <p class="counters">
                                    <span class="fix_count"><?= count($the_user->fixes); ?></span> <? _e('fixes'); ?>
                                    <span class="report_count"><?= count($the_user->subreports); ?></span> <? _e('reportes'); ?>
                                </p>
                                <?= karma_graphic($the_user->karma, false); ?>
                            </div>
                        </div>
                        <div class="links-wrap">
                            <? if (count($the_user->unread_activity)) : ?> <a href="<?= site_url($this->router->reverseRoute('user-activity')); ?>" class="unread-activity"><? printf(_('%s notificaciones pendientes'), count($the_user->unread_activity)); ?></a><? endif; ?>
                            <a class="log_out" href="<?= site_url($this->router->reverseRoute('logout')); ?>"><? _e('Cerrar sesión'); ?></a>
                        </div>
                    </div>
                </section>
            <? endif; ?>
        </div>
    </header>
    <nav class="main-menu">
        <ul class="menu clearfix">
            <li><a href="<?= site_url($this->router->reverseRoute('reports-create')); ?>" class="button icon fixit"><? _e('Reportar'); ?></a></li>
            <li class="<?= is_cur_page($this, 'reports','index') ? 'current' : ''; ?>"><a class="link" href="<?= site_url(); ?>"><? _e('Más urgentes'); ?></a></li>
            <li class="<?= is_cur_page($this, 'reports','recents') ? 'current' : ''; ?>"><a class="link" href="<?= site_url($this->router->reverseRoute('home-recents')); ?>"><? _e('Recientes'); ?></a></li>
            <li class="<?= is_cur_page($this, 'reports','pendings') ? 'current' : ''; ?>"><a class="link" href="<?= site_url($this->router->reverseRoute('home-pending')); ?>"><? _e('Pendientes'); ?></a></li>
            <li class="<?= is_cur_page($this, 'members','index') ? 'current' : ''; ?>"><a class="link" href="<?= site_url($this->router->reverseRoute('users')); ?>"><? _e('Top re:mediantes'); ?></a></li>
            <li class="<?= is_cur_page($this, 'sources','pendings') ? 'current' : ''; ?>"><a class="link" href="<?= site_url($this->router->reverseRoute('sources')); ?>"><? _e('Top medios'); ?></a></li>
            <li class="<?= is_cur_page($this, 'stats','index') ? 'current' : ''; ?>"><a class="link" href="<?= site_url($this->router->reverseRoute('stats')); ?>"><? _e('Estadísticas'); ?></a></li>
            <li class="search">
                <form action="<?= site_url($this->router->reverseRoute('search')); ?>" method="GET">
                    <input type="text" value="<?= isset($term) ? $term : ''; ?>" name="q" placeholder="<? echo gettext('reportes, re:medios, re:mediantes'); ?>" />
                </form>
            </li>
        </ul>
    </nav>
