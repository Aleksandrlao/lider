<?php get_header(); ?>

<div class="m_box c_content">
	<div class="m_inb">
		<div class="content">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
			<h1><?php single_cat_title(); ?></h1>
			<div class="c_txt"></div>
			<div class="c_category-loop">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<?php if (file_exists(TEMPLATEPATH.'/loop-category.php')) {require(TEMPLATEPATH.'/loop-category.php');}; ?>
				<?php endwhile; else : endif; ?>
			</div>
			<div class="c_txt"></div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div><!-- .content -->

<?php get_footer(); ?>