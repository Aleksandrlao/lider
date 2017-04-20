<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title><?php wp_title('&mdash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
</head>
<body>
<header class="m_box header">
	<div class="m_inb">
		<a href="<?php bloginfo('url'); ?>/" class="h_logo"></a>
		<div class="h_cont">
			<a href="tel:+73422944083" class="h_tel">+7 (342) 294-40-83</a>
			<div class="h_telmin">
				<a href="tel:+73422613224">+7 (342) 261-32-24</a>,
				<a href="tel:+73422613538">+7 (342) 261-35-38</a>
			</div>
			<div class="h_callme action" data-event="callme">Не смогли дозвониться?</div>
		</div>
		<div class="h_desc">Производство и продажа мебели для школ, детских садов, <span>объектов социальной сферы и офисных помещений.</span> Детское игровое и спортивное оборудование.</div>
	</div>
</header><!-- .header-->

<nav class="m_box h_nav">
	<div class="m_inb">
		<?php wp_nav_menu('menu_class=top_menu&theme_location=tnav&container=false'); ?>
	</div>
</nav>