<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
			
		</div><!-- #main -->
		<!-- hide footer -->
		<div class="tablet_and_mobile_only" id="footer_menu">
			<div data-page_dir="" data-scroll_id="" id="next_page_btn" class="hide"><a data-label="nextpage" data-id="footer_button" href="javascript:void(0)"><img alt="next" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/next.png"></a></div>
			<div class="footer_menu_button"><a data-label="home" data-id="footer_button" href="http://tabi-labo.com/"><img onclick="ga('send', 'event', 'footer_menu', 'click', 'home')" alt="home" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/footer_home.png"></a></div>
			<div id="footer_mobile_menu_button" class="footer_menu_button"><a data-label="catgory" data-id="footer_button" href="javascript:void(0)"><img onclick="ga('send', 'event', 'footer_menu', 'click', 'category')" alt="category" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/footer_category.png"></a></div>
			<div class="footer_menu_button"><a data-label="ranking" data-id="footer_button" href="http://tabi-labo.com/daily-ranking/"><img onclick="ga('send', 'event', 'footer_menu', 'click', 'ranking')" alt="ranking" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/footer_ranking.png"></a></div>
			<div id="footer_search_button" class="footer_menu_button"><a data-label="search" data-id="footer_button"><img onclick="ga('send', 'event', 'footer_menu', 'click', 'search')" alt="search" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/footer_search.png"></a></div>
		</div>

		<!-- scroll up -->

		<div class="tablet_and_mobile_hide">
			<a href="" id="pageTop" style="display: block;">
				<span>トップへ戻る</span>
			</a>
		</div>
		<input type = "hidden" class = "imglink" value = "<?php bloginfo('template_url'); ?>/images/menu-icons/">
		 <?php wp_footer(); ?>
	</div><!-- #page -->

	<!-- load custom js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/swiper/swiper.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/slidemenu.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/autopager.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
		<script src="http://tabi-labo.com/wp-content/themes/tabilabo/js/jquery.inview.min.js"></script>
		

	<!-- /load custom js -->
	
</script>
</body>
</html>