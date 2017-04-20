<?php get_header(); ?>

<div class="m_box c_content">
	<div class="m_inb">
		<div class="content">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="c_txt"><?php the_content(); ?></div>
			<?php endwhile; else : endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div><!-- .content -->

<?php get_footer(); ?>