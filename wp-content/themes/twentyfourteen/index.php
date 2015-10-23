<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
	

	<div id="main-content " class="main-content">
		<div class="tabletmini_and_mobile_only" id="mobile_featured">
		<div class="featured-content swiper-container" id="featured-content">
			<div class="swiper-wrapper">
				<div class="swiper-slide swiper-slide-visible swiper-slide-active">
					 <?php        
		                $options = array('posts_per_page' => 6 , 'cat' => '-12,-13,-14');
		                $query = new WP_Query($options);
		                while ( $query->have_posts() ) : $query->the_post();
		                    $cat = get_the_category();
		                    $category_name = " ";
		                    $post_id = get_the_ID();
		                    foreach ($cat as $c) 
		                    {
		                        $category_id = $c->term_id;
		                        $category_name =  $c->name;
		                        $category_link = get_category_link( $category_id );
		                    }
		           	 	?>
					<article id="post-<?php echo $post_id; ?>" class="post-<?php echo $post_id; ?> post type-post status-publish format-standard has-post-thumbnail hentry category-trend tag-featured tag-20728 tag-the-trash tag-27158 tag-party tag-21495 category_tag_box has-post-thumbnail">
						<p class="category_tag">
							<span class="<?php echo strtolower($category_name); ?>">
								<a href="<?php echo esc_url( $category_link ); ?>"><?php echo $category_name; ?></a>
							</span>
						</p>
						<a class="post-thumbnail" href="<?php the_permalink(); ?>" >
							<?php 
								$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                                echo '<img class="attachment-twentyfourteen-full-width wp-post-image" src="' . $image_src[0]  . '" "  />';
							?>
							<!-- <img width="640" height="381" src="http://img.tabi-labo.com/wp-content/uploads/2015/10/d78354c526cb6222a9bdc5124faa101e.png" 
							class="attachment-twentyfourteen-full-width wp-post-image" alt="スクリーンショット 2015-10-21 17.49.45">	 -->
						</a>
							<header class="entry-header">
								<h1 class="entry-title">
									<a href="<?php the_permalink(); ?>" rel="bookmark" >
										<?php the_title(); ?>
									</a>
								</h1>	
							</header><!-- .entry-header -->
					</article><!-- #post-## -->
					<?php endwhile; ?>
				</div><!-- .swiper-slide -->
			</div><!-- .swiper-wrapper -->
			<div class="pagination">
				<span class="swiper-pagination-switch"></span>
				<span class="swiper-pagination-switch"></span>
				<span class="swiper-pagination-switch"></span>
				<span class="swiper-pagination-switch"></span>
				<span class="swiper-pagination-switch"></span>
				<span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span>
			</div>
		</div><!-- #featured-content .featured-content -->
		</div>
	
		<!-- PC version -->
		<div class="tabletmini_and_mobile_hide" id="pc_featured">
			<div class="featured-content" id="featured-content">
				<div class="ssswiper-wrapper">
					 <?php        
		                $options = array('posts_per_page' => 6 , 'cat' => '-12,-13,-14');
		                $query = new WP_Query($options);
		                while ( $query->have_posts() ) : $query->the_post();
		                    $cat = get_the_category();
		                    $category_name = " ";
		                    $post_id = get_the_ID();
		                    foreach ($cat as $c) 
		                    {
		                        $category_id = $c->term_id;
		                        $category_name =  $c->name;
		                        $category_link = get_category_link( $category_id );
		                    }
		           	 	?>
					<article class="post-<?php echo $post_id; ?> post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-featured tag-19482 tag-27071 tag-plant tag-26991 category_tag_box has-post-thumbnail" id="post-<?php echo $post_id;?>">
						<p class="category_tag">
							<span class="<?php echo strtolower($category_name); ?>">
								<a href="<?php echo esc_url( $category_link ); ?>">
									<?php echo $category_name?>
								</a>
							</span>
						</p>
						<a href="<?php the_permalink(); ?>" class="post-thumbnail">
							<?php 
								$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                                echo '<img class="attachment-twentyfourteen-full-width wp-post-image" src="' . $image_src[0]  . '" "  />';
							?>
						</a>
						<header class="entry-header">
							<div class="entry-meta">
								<span class="cat-links">
									<a rel="category tag" title="<?php echo $category_name; the_title();?>" 
									href="<?php echo esc_url( $category_link ); ?>"><?php echo $category_name; ?></a>
								</span>
							</div><!-- .entry-meta -->
							<h1 class="entry-title">
								<a  rel="bookmark" href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h1>	
						</header><!-- .entry-header -->
					</article><!-- #post-## -->
					<?php endwhile;?>
				</div><!-- .swiper-wrapper -->
			</div><!-- #featured-content .featured-content -->
		</div>
		<!-- mobile menu bar -->

		<div class="menu_bar swiper-container mobile_menu_bar mobile_only swiper-free-mode">
			<div class="swiper-wrapper">
				<?php 
					$args = array('type' => 'post', 'exclude' => '12 13 14', 'taxonomy' => 'category'); 
					$categories = get_categories($args); 
					foreach ($categories as $category): 
				?>  
				<div class="swiper-slide swiper-slide-visible swiper-slide-active">
					<div class="title">
						<a href="#">
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

		<!-- tablet menu bar -->
		<div class="menu_bar swiper-container tablet_menu_bar tablet_only swiper-free-mode">
			<div class="swiper-wrapper" >
				<?php 
					$args = array('type' => 'post', 'exclude' => '12 13 14', 'taxonomy' => 'category'); 
					$categories = get_categories($args); 
					foreach ($categories as $category): 
				?>  	
				<div class="swiper-slide swiper-slide-visible swiper-slide-active">
					<div class="title">
						<a href="#"><?php echo $category->name; ?></a>
					</div>
				</div>
				<?php endforeach; ?>
				<!-- <div class="swiper-slide swiper-slide-visible" >
					<div class="title">
						<a href="http://tabi-labo.com/category/travel/">TRAVEL</a>
					</div>
				</div>
				<div class="swiper-slide swiper-slide-visible">
					<div class="title">
						<a href="http://tabi-labo.com/category/culture/">CULTURE</a>
					</div>
				</div>
				<div class="swiper-slide swiper-slide-visible">
					<div class="title">
						<a href="http://tabi-labo.com/category/lifestyle/">LIFESTYLE</a>
					</div>
				</div>
				<div class="swiper-slide swiper-slide-visible" >
					<div class="title">
						<a href="http://tabi-labo.com/category/food/">FOOD</a>
					</div>
				</div>
				<div class="swiper-slide" >
					<div class="title">
						<a href="http://tabi-labo.com/category/edge-runner/">EDGE RUNNER</a>
					</div>
				</div>
				<div class="swiper-slide" >
					<div class="title">
						<a href="http://tabi-labo.com/category/issue/">ISSUE</a>
					</div>
				</div>
				<div class="swiper-slide" >
					<div class="title">
						<a href="http://tabi-labo.com/category/technology/">TECHNOLOGY</a>
					</div>
				</div>
				<div class="swiper-slide" >
					<div class="title">
						<a href="http://tabi-labo.com/category/beauty/">BEAUTY</a>
					</div>
				</div>
				<div class="swiper-slide" >
					<div class="title">
						<a href="http://tabi-labo.com/category/sports/">SPORTS</a>
					</div>
				</div> -->
			</div>
		</div>

		<!-- primary -->
		<div id="primary" class="content-area">
			<div role="main" class="site-content" id="content">
				 <?php        
		                $options = array( 'cat' => '-12,-13,-14');
		                $query = new WP_Query($options);
		                while ( $query->have_posts() ) : $query->the_post();
		                    $cat = get_the_category();
		                    $category_name = " ";
		                    $post_id = get_the_ID();
		                    foreach ($cat as $c) 
		                    {
		                        $category_id = $c->term_id;
		                        $category_name =  $c->name;
		                        $category_link = get_category_link( $category_id );
		                    }
		           	 	?>
				<article class="post-<?php echo $post_id; ?> post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-featured tag-19482 tag-27071 tag-plant tag-26991 sns_count_box has-post-thumbnail" id="post-<?php echo $post_id; ?>">
					<div class="thumb_box_mobile mobile_only">
						<div class="post_category">
							<span><?php echo $category_name; ?></span>
						</div>
						<div class="post_category_line lifestyle"></div>
						<a href="<?php the_permalink(); ?>" class="post-thumbnail">
							<?php 
								$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                                echo '<img class="attachment-twentyfourteen-full-width wp-post-image" src="' . $image_src[0]  . '" "  />';
							?>
						</a>
							
					</div>
					
					<div class="thumb_box_pc mobile_hide category_tag_box">
						<p class="category_tag">
							<span class="<?php echo strtolower($category_name); ?>">
								<a href="<?php echo esc_url( $category_link ); ?>"><?php echo $category_name; ?></a>
							</span>
						</p>
							<a href="<?php the_permalink(); ?>" class="post-thumbnail">
								<?php 
									$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
	                                echo '<img class="attachment-twentyfourteen-full-width wp-post-image" src="' . $image_src[0]  . '" "  />';
								?>
							</a>
					</div>
					<header class="entry-header">
						<div class="entry-meta mobile_hide">
							<span class="cat-links">
								<a rel="category tag" title="<?php echo $category_name; the_title(); ?> " 
									href="<?php echo esc_url( $category_link ); ?>"> <?php echo $category_name; ?>
								</a>
							</span>
						</div>
						<h1 class="entry-title archive">
							<a rel="bookmark" href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h1>
						<div class="entry-meta ">
							<span class="byline">
								<span class="author vcard">
									<a rel = "author" class="url fn n" href = "<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                                    	<?php the_author(); ?> 
                                	</a>
								</span>
							</span>		
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->
					<div class="entry-summary">
						<p>
                            <?php echo ShortenText( strip_tags(get_the_content()), 500); ?>
                            <a href = "<?php the_permalink(); ?>">  > 続きを読む</a>
                        </p>
					</div><!-- .entry-summary -->
				</article><!-- #post-## -->
				<?php endwhile; ?>

				<nav role="navigation" class="navigation paging-navigation" style="display: none;">
					<h1 class="screen-reader-text">投稿ナビゲーション</h1>
					<div class="pagination loop-pagination">
						<!-- <span class="page-numbers current">1</span>
							<a href="http://tabi-labo.com/page/2/" class="page-numbers">2</a>
							<span class="page-numbers dots">…</span>
							<a href="http://tabi-labo.com/page/349/" class="page-numbers">349</a>
							<a href="http://tabi-labo.com/page/2/" class="next page-numbers">次へ →</a>		 -->
					</div><!-- .pagination -->
				</nav><!-- .navigation -->
			</div> <!-- end of content -->

		</div> <!-- end of primary -->
	
	</div><!-- #main-content -->

	
<?php
get_sidebar();
get_footer();
