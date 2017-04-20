<?php get_header(); ?>

<?php if (file_exists(TEMPLATEPATH.'/include-slider.php')) {require(TEMPLATEPATH.'/include-slider.php');}; ?>

<div class="m_box c_preim">
	<div class="m_inb">
		<div class="c_preim-list">
			<div class="c_preim-item">Являемся непосредственно <span>производителем мебели</span></div>
			<div class="c_preim-item">Гарантия на всю продукцию <span>и работы до 2 лет</span></div>
			<div class="c_preim-item">Продукция сертифицирована <span>и соответствует ГОСТам</span></div>
			<div class="c_preim-item">Сжатые сроки поставки <span>и производства</span></div>
		</div>
	</div>
</div><!-- .content -->


<div class="m_box c_cat">
	<div class="m_inb">
		<h1>Мебель для школ, детских садов, объектов социальной сферы и офисных помещений</h1>
		<div class="c_cat-list">

			<div class="c_cat-item">
				<div class="c_cat-item__big">
					<div class="c_cat-item__big-thumb"><a href="#"><img src="i/bg-cat-item.jpg" alt="cat item"></a></div>
					<div class="c_cat-item__big-title"><a href="#">Мебель для детского сада</a></div>
					<div class="c_cat-item__big-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
				</div>
				<div class="c_cat-item__list">
					<a href="#" class="c_cat-item__link">
						<span class="c_cat-item__link-thumb"><img src="i/bg-cat-item.jpg" alt="cat item"></span>
						<span class="c_cat-item__link-title">Столы и стулья</span>
					</a>
					<a href="#" class="c_cat-item__link">
						<span class="c_cat-item__link-thumb"><img src="i/bg-cat-item.jpg" alt="cat item"></span>
						<span class="c_cat-item__link-title">Столы и стулья</span>
					</a>
					<a href="#" class="c_cat-item__link">
						<span class="c_cat-item__link-thumb"><img src="i/bg-cat-item.jpg" alt="cat item"></span>
						<span class="c_cat-item__link-title">Столы и стулья</span>
					</a>
					<a href="#" class="c_cat-item__link">
						<span class="c_cat-item__link-thumb"><img src="i/bg-cat-item.jpg" alt="cat item"></span>
						<span class="c_cat-item__link-title">Столы и стулья</span>
					</a>
				</div>
				<div class="c_cat-item__more"><a href="#">Все категории</a></div>
			</div>

		</div>
	</div>
</div><!-- .content -->


<div class="m_box c_info">
	<div class="m_inb">
		<div class="c_head">Производство и продажа мебели</div>
		<div class="c_txt">
			<p>ООО "Компания Лидер" всегда готова предложить оптимальное решение для организации рабочего пространства Вашего офиса. В случае необходимости, мы разработаем для Вас индивидуальный проект с учетом особенностей планировки. Мы готовы полностью укомплектовать ваш офис так, чтобы он стал выглядеть солидно, но в то же время практично, лаконично и симпатично. Именно этим основным требованиям должна соответствовать современная офисная мебель.</p>
			<p>Наша компания комплектует образовательные учреждения дошкольного, основного и профессионального образования (детские сады, школах, гимназии, колледжи, профессионально-технические училища, техникумы, ВУЗы). Значительную часть своей жизни наши дети проводят в детском саду, школе, институте. При этом в любом возрасте люди стремятся к комфорту, который во многом зависит от окружающей нас мебели. Мы имеем большой опыт комплектации детских садов и учебных заведений, включая не только изготовление мебели, но и установку, монтаж другого технологического оборудования: пищеблока, холодильного оборудования, прачечных и гладильных комнат, а также монтаж сантехнических кабин и спортивных залов.</p>
		</div>
	</div>
</div><!-- .content -->


<div class="m_box c_news">
	<div class="m_inb">
		<div class="c_head">Новости</div>
		<div class="c_news-list">
		<?php $args = array( 'posts_per_page' => 4, 'cat' => 2, 'post_status' => 'publish' ); 
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
			<?php if (file_exists(TEMPLATEPATH.'/loop-news.php')) {require(TEMPLATEPATH.'/loop-news.php');}; ?>
		<?php } } else {
		// Постов не найдено
		} wp_reset_postdata(); ?>
		</div>
	</div>
</div><!-- .content -->

<?php get_footer(); ?>