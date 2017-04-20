<div class="sidebar">
	<div class="s_box">
		<?php wp_nav_menu('menu_class=side_menu&theme_location=snav&container=false'); ?>
	</div>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Сайдбар') ) { ?><?php } ?>
</div>