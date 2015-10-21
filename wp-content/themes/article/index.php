<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="scrollup-container">
        <a href="#" class="scrollup">
            <span>トップへ戻る</span>
        </a>
    </div>
    <div class = "view-container">      
        <div class="article-wrapper">  
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
            <div class="article-container">
                    <article id = "post-<?php echo $post_id; ?>" class = "<?php echo $post_id; ?> post type-post has-post-thumbnail list-container">
                        <p class = "category_tag">
                            <span class = "<?php echo $category_name; ?>">
                                <a href ="<?php echo esc_url( $category_link ); ?>">
                                   <?php echo $category_name ; ?>
                                </a>
                            </span>
                        </p>
                        <!-- content here -->
                        <a href = "<?php echo the_permalink(); ?>" class = "post-thumbnail">
                            <div class = "image">
                                <?php 
                                    if(has_post_thumbnail()) 
                                    {                    
                                        $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                                        echo '<img src="' . $image_src[0]  . '" width="100%"  />';
                                    } 
                                    // $size = array(550, 350);
                                    // the_post_thumbnail($size); 
                                    //the_content(); 
                                ?>
                            </div>
                        </a>
                        <header class="entry-header catgry-desc">
                            <div class="entry-meta">
                                <span class="cat-links" >
                                    <a href = "<?php echo esc_url( $category_link ); ?>"
                                    title="<?php echo $category_name; ?>" rel="category tag">
                                        <?php echo $category_name ; ?>
                                    </a>
                                </span>
                            </div>
                            
                            <h1 class="entry-title">
                                <a href="<?php echo the_permalink(); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                </a>
                            </h1>  
                        </header>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="view-pagination"></div>
    </div>
    <div class = "view-container-2">
        <ol id="articles">
         <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $options2 = array( 
                            'offset' => 6  , 'cat' => '-12,-13,-14' ,  
                              'posts_per_page' => 4 
                              // , 'paged' => $paged
                              );
            $query2 = new WP_Query($options2);
            while ( $query2->have_posts() ) : $query2->the_post();
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
                <li style = "list-style:none" id = "post-<?php echo $post_id; ?>" class = "post-<?php echo $post_id; ?> post type-post 
                    has-post-thumbnail list-container">
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
                                    <a href = "<?php echo esc_url( $category_link ); ?>"
                                    title="<?php echo $category_name; ?>" rel="category tag">
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
                                    <?php the_author(); ?> 
                                </a>
                            </div>
                             <div class = "entry-description">
                                <p>
                                    <?php echo ShortenText( strip_tags(get_the_content()), 500); ?>
                                    <a href = "<?php the_permalink(); ?>">  > 続きを読む</a>
                                </p>
                                <!-- the_content('> 続きを読む',TRUE); 
                                    the_content('Read More',TRUE,'Read More'); -->
                            </div> 
                        </div>
                    </div>
                </li>
        <?php endwhile; ?>
        </ol>
 
        
    </div>
  
    
<?php get_footer(); ?>
