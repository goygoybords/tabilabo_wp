		<!-- mobile menu bar -->
		<div class="menu_bar swiper-container mobile_menu_bar mobile_only swiper-free-mode">
			<div class="swiper-wrapper">
				<?php 
					$args = array('type' => 'post', 'exclude' => '12 13 14', 'taxonomy' => 'category'); 
					$categories = get_categories($args); 
					foreach ($categories as $category): 
						$link = get_category_link( $category->term_id );
				?>  
				<div class="swiper-slide swiper-slide-visible swiper-slide-active">
					<div class="title">
						<a href="<?php echo $link; ?>">
							<?php echo $category->name; ?>
						</a>
					</div>
				</div>	
				<?php endforeach; ?>
				<!-- <div class="swiper-slide swiper-slide-visible swiper-slide-active" >
					<div class="title">
						<a href="http://tabi-labo.com/category/trend/">TREND</a></div>
					</div>
				<div class="swiper-slide swiper-slide-visible">
				<div class="title">
					<a href="http://tabi-labo.com/category/travel/">TRAVEL</a></div>
				</div>
				<div class="swiper-slide swiper-slide-visible" >
					<div class="title">
						<a href="http://tabi-labo.com/category/culture/">CULTURE</a></div>
				</div>
				<div class="swiper-slide swiper-slide-visible" >
					<div class="title">
						<a href="http://tabi-labo.com/category/lifestyle/">LIFESTYLE</a></div>
					</div>
				<div class="swiper-slide" >
					<div class="title">
						<a href="http://tabi-labo.com/category/food/">FOOD</a></div>
					</div>
				<div class="swiper-slide" >
				<div class="title"><a href="http://tabi-labo.com/category/edge-runner/">EDGE RUNNER</a></div>
				</div>
						<div class="swiper-slide" >
				<div class="title"><a href="http://tabi-labo.com/category/issue/">ISSUE</a></div>
				</div>
						<div class="swiper-slide" >
				<div class="title"><a href="http://tabi-labo.com/category/technology/">TECHNOLOGY</a></div>
				</div>
						<div class="swiper-slide" >
				<div class="title"><a href="http://tabi-labo.com/category/beauty/">BEAUTY</a></div>
				</div>
						<div class="swiper-slide" >
				<div class="title"><a href="http://tabi-labo.com/category/sports/">SPORTS</a></div>
				</div> -->
			</div>
		</div>
		<!-- end of mobile menu bar -->