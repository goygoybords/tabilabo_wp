<?php
/**
 * The template for displaying Author bios
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
	get_header();
?>
    <header class="archive-header">
        <h1 class="archive-title"><?php echo get_the_author(); ?></h1>
    </header>
	<div class = "view-container-2">
        <ol id="articles">
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
                <li style = "list-style:none" id = "post-<?php echo $post_id; ?>" class = "<?php echo $post_id; ?> post type-post has-post-thumbnail list-container">
                    <div class = "article-thumbnail">
                        <p class = "category_tag">
                            <span class = "<?php echo $category_name; ?>">
                                <a href ="<?php echo esc_url( $category_link ); ?>">
                                    <?php echo $category_name ; ?>
                                </a> 
                            </span>
                        </p>
                        <a href = "<?php the_permalink(); ?>" class = "post-thumbnail">
                            <div class = "image">
                               	<?php 
                               		if(has_post_thumbnail()) 
                                    {                    
                                        $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                                        echo '<img src="' . $image_src[0]  . '" width="100%"  />';
                                    } 
                               	?>
                            </div>
                        </a>
                        <div class = "post-detail">  
                            <div class="entry-meta">
                                <span class="cat-links">
                                    <a href="" title="<?php echo $category_name ; ?> {{ ar.title }}" rel="category tag">
                                        <?php echo $category_name ; ?>
                                    </a>
                                </span>
                            </div>
                            <div class="entry-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                </a>
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
                                <p>
                                    <?php echo ShortenText( strip_tags(get_the_content()), 500); ?>
                                    <a href = "<?php the_permalink(); ?>">  > 続きを読む</a>
                                </p>
                            </div> 
                        </div>
                    </div>
                </li>
               
            <?php endwhile; ?>
        </ol>
    </div>

<?php get_footer(); ?>