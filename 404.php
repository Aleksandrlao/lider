<?php get_header(); ?>

<div class="m_box c_content">
	<div class="m_inb">
		<div class="content">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
			<h1>404 - Ничего не найдено!</h1>
			<div class="c_txt"><p>Извините, по вашему запросу ничего не найдено!</p></div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div><!-- .content -->

<?php get_footer(); ?>