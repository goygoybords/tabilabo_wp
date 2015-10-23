			<div class="menu_bar swiper-container pc_menu_bar tablet_and_mobile_hide swiper-free-mode">
					<div class="swiper-wrapper">
						<?php 
							$args = array('type' => 'post', 'exclude' => '12 13 14', 'taxonomy' => 'category'); 
							$categories = get_categories($args); 
							foreach ($categories as $category): 
								$link = get_category_link( $category->term_id );
						?>  
						<div class="swiper-slide swiper-slide-visible swiper-slide-active">
							<div class="title">
								<a href="<?php echo $link; ?>"><?php echo $category->name; ?></a>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>	