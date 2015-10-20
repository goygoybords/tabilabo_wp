<?php 
    $options = array(
        'theme_location'  => '',
        'menu'            => 'Sidebar Menu',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'nav',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '%3$s',
        'depth'           => 0,
        'walker'          => ''
    ); 
?>
    <aside class = "sidebar">
        <nav class = "nav">
            <ul class = "navigation">
                <li class = "li_category">Category</li>
                <?php wp_nav_menu($options); ?>
            </ul>
        </nav>
    </aside>
<!-- 
<aside class="sidebar">
        <nav class = "nav">
            <ul class="navigation">
                <li class = "li_category">Category</li>
                <li class = "li_trend">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_trend.png" /></a>
                    <a href="#">Trend</a>
                </li>
                <li class = "li_travel">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_travel.png" /></a>
                    <a href="#">Travel</a>
                </li>
                <li class = "li_culture">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_culture.png" /></a>
                    <a href="#">Culture</a>
                </li>
                <li class = "li_life-style">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_lifestyle.png" /></a>
                    <a href="#">Life Style</a>
                </li>
                <li class = "li_edge-runner">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_edge-runner.png" /></a>
                    <a href="#">Edge Runner</a>
                </li>
                <li class = "li_issue">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_issue.png" /></a>
                    <a href="#">Issue</a>
                </li>
                <li class = "li_technology">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_technology.png" /></a>
                    <a href="#">Technology</a>
                </li>
                <li class = "li_beauty">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_beauty.png" /></a>
                    <a href="#">Beauty</a>
                </li>
                <li class = "li_sports">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_sports.png" /></a>
                    <a href="#">Sports</a>
                </li>
                <li class = "li_feature">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu-icons/icon_feature.png" /></a>
                    <a href="#">Feature</a>
                </li>
            </ul>
        </nav>
</aside> -->