<div class="m_box c_bottom">
	<div class="m_inb">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Футер') ) { ?><?php } ?>
	</div>
</div><!-- .content -->

<footer class="m_box footer">
	<div class="m_inb">
		<div class="f_copy">
			<div class="f_copy-info">&copy; 2009-2017 ООО «Компания Лидер»</div>
			<div class="f_copy-shema"><a href="#">Схема проезда и обратная связь</a></div>
			<a href="#" class="f_copy-vk">Наша группа Вконтакте</a>
		</div>
		<div class="f_adr">Наш адрес: 614051, г. Пермь, <span>ул. Уинская, 4 (М/р «Садовый»)</span></div>
		<div class="f_cont">
			<a href="tel:+73422944083" class="f_tel">+7 (342) 294-40-83</a>
			<div class="f_callme action" data-event="callme">Заказать звонок</div>
			<div class="f_made">
				<div class="f_made-item"><a href="#">Создание сайта</a> - Студия «Бобрик»</div>
				<div class="f_made-item"><a href="#">Продвижение сайта</a> - Команда «CleverTeam»</div>
			</div>
		</div>

	</div>
</footer><!-- .footer -->





<div class="popup-callme popup">
	<div class="popup-close">x</div>
	<div class="popup-title">Заказать звонок</div>
	<div class="popup-body"><?php echo do_shortcode('[contact-form-7 id="4" title="Заказать звонок"]'); ?></div>
</div>

<div class="popup-zakaz popup">
	<div class="popup-close">x</div>
	<div class="popup-title">Заказать металл</div>
	<div class="popup-body"><?php echo do_shortcode('[contact-form-7 id="20" title="Заказать металл"]'); ?></div>
</div>

<div class="popup-thy popup">
	<div class="popup-close">x</div>
	<div class="popup-title">Ваша заявка успешно отправлена</div>
</div>

<div class="overlay"></div>


<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox-1.3.7.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.main.js"></script>

</body>
</html>