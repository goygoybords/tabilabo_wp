<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>
	<div class = "single-view-article">
		<?php 
			while ( have_posts() ) : the_post(); 
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
            <article id = "post-<?php echo $post_id; ?>" class = "post-<?php echo $post_id; ?> post type-post hast-post-thumbnail list-container">
                <div class = "article-thumbnail">
                    <div class = "image">
                        <?php 
	                        if(has_post_thumbnail()) 
	                        {                    
	                            $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
	                            echo '<img src="' . $image_src[0]  . '" width="70%"  />';
	                        } 
                        ?>
                    </div>

                    <div class = "post-detail">  
                        <div class="entry-meta">
                            <span class="cat-links">
                                <a href="" title="<?php echo $category_name; ?> {{ articles.title }}" rel="category tag">
                                	<?php echo $category_name; ?>
                                </a>
                            </span>
                        </div>
                        <div class="entry-title">
                        	<?php the_title(); ?>
                        </div> 
                        <div class = "enty-author">
                            <a href = "<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
	                            <span class="glyphicon glyphicon-user"></span>
	                            <?php 
	                                the_author();
	                            ?> 
                            </a>
                        </div>
                        <div class = "entry-description">
                            <p><?php the_content(); ?></p>
                        </div> 
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>
