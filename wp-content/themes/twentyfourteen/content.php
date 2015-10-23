<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" 
	<?php post_class(); ?>>

	<div class="thumb_box_mobile mobile_only">
		<?php twentyfourteen_post_thumbnail(); ?>
	</div>
	<div class="thumb_box_pc mobile_hide category_tag_box">
		<?php twentyfourteen_post_thumbnail(); ?>
	</div>

	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
			<div class="entry-meta">
				<span class="cat-links">
					<?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
			</div>
			<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
			?>

		<div class="entry-meta">
			<span class="byline">
				<span class="author vcard">
					<a rel = "author" class="url fn n" href = "<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                    	<?php the_author(); ?> 
                	</a>
				</span>
			</span>	
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
		<div class="entry-summary">
			<?php 
				echo "<p>";
	            echo ShortenText( strip_tags(get_the_content()), 500); 
	            echo '<a href = "<?php the_permalink(); ?>">  > 続きを読む</a>';
	            echo "</p>";
				//the_excerpt(); 
			?>
		</div>
	<!-- .entry-summary -->
	<?php else : ?>
	<!-- <div class="entry-content"> -->
	<div class="entry-summary">
		<?php
			echo "<p>";
            echo ShortenText( strip_tags(get_the_content()), 500); 
            echo '<a href = "<?php the_permalink(); ?>">  > 続きを読む</a>';
            echo "</p>";
                       
			/* translators: %s: Name of current post */
			// the_content( sprintf(
			// 	__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),
			// 	the_title( '<span class="screen-reader-text">', '</span>', false )
			// ) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->

