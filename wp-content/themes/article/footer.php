<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
                <input type = "hidden" class = "imglink" value = "<?php bloginfo('template_url'); ?>/images/menu-icons/">
             </main>
            </section>
        </section>
        <!-- JS -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/swiper/swiper.min.js"></script>

        <script type="text/javascript">
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                slidesPerView: 4,
                paginationClickable: true
            });

            var swiper2 = new Swiper('.view-container', {
                pagination: '.view-pagination',
                paginationClickable: true,
                loop: true,
                autoplay: 3000,
                grabCursor: true,
                slidesPerView: 1,
                speed: 500
            });
          

            /* INFINITE SCROLLING */

            // $(window).scroll(function(){ 
            //     var _href = window.location.href+'/loadMoreArticle';
            //     var ol = $("#articles");
            //     var totalResult = $(".total-articles").html();
            //     var start = ol.children().length;

            //     if($(window).scrollTop() == $(document).height() - $(window).height()){ 
            //         $.get(_href, {'start': start}, 

            //             function(res){ (start != totalResult) ? ol.append(res) : false ; }
                        
            //             );
            //     }
            // });

        </script>
</body>
</html>
