<div class="c_news-item">
	<div class="c_news-item__date"><?php echo get_the_date('d m Y'); ?></div>
	<a href="<?php the_permalink(); ?>" class="c_news-item__link">
		<span class="c_news-item__title"><?php the_title(); ?></span>
		<span class="c_news-item__thumb"><img src="<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
				echo get_img_theme($image_url[0], 260, 150); ?>" alt="<?php the_title(); ?>"></span>
	</a>
	<div class="c_news-item__txt"><?php global $more; $more = 0; echo wp_trim_words(get_the_excerpt(), 12, '...'); ?></div>
</div>