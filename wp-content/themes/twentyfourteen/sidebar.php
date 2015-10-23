<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
	$options = array(
	        'theme_location'  => '',
	        'menu'            => 'Sidebar Menu',
	        'container'       => '',
	        'container_class' => '',
	        'container_id'    => '',
	        'menu_class'      => '',
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
	<!-- SIDEBAR -->
	<div class="pc_only" id="secondary">
		<div class="sidebar widget widget_nav_menu">
			<dl id="slidemenu_list">
				<dt>カテゴリー</dt>
				<dd>
					<ul>
						<?php wp_nav_menu($options); ?>
					</ul>
					<!-- <ul>
						<li>
							<a href="http://tabi-labo.com/category/trend/">
							<img alt="トレンド" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_trend.png">
							</a>
							<a href="http://tabi-labo.com/category/trend/" class="menu_link icon_menu">トレンド</a>
						</li>
						<li>
							<a href="http://tabi-labo.com/category/travel/">
								<img alt="トラベル" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_travel.png">
							</a>
							<a href="http://tabi-labo.com/category/travel/" class="menu_link icon_menu">トラベル</a>
						</li>
						<li>
							<a href="http://tabi-labo.com/category/culture/">
							<img alt="カルチャー" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_culture.png">
							</a>
							<a href="http://tabi-labo.com/category/culture/" class="menu_link icon_menu">カルチャー</a>
						</li>
						<li>
							<a href="http://tabi-labo.com/category/lifestyle/">
							<img alt="ライフスタイル" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_lifestyle.png">
							</a>
							<a href="http://tabi-labo.com/category/lifestyle/" class="menu_link icon_menu">ライフスタイル</a>
						</li>
						<li>
							<a href="http://tabi-labo.com/category/food/">
							<img alt="フード" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_food.png">
							</a>
							<a href="http://tabi-labo.com/category/food/" class="menu_link icon_menu">フード</a>
						</li>
						<li>
							<a href="http://tabi-labo.com/category/edge-runner/">
							<img alt="エッジランナー" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_edge-runner.png">
							</a>
							<a href="http://tabi-labo.com/category/edge-runner/" class="menu_link icon_menu">エッジランナー</a>
						</li>
						<li>
							<a href="http://tabi-labo.com/category/issue/">
							<img alt="社会問題" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_issue.png">
							</a>
							<a href="http://tabi-labo.com/category/issue/" class="menu_link icon_menu">社会問題</a>
						</li>
						<li>
							<a href="http://tabi-labo.com/category/technology/">
							<img alt="テクノロジー" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_technology.png">
							</a>
							<a href="http://tabi-labo.com/category/technology/" class="menu_link icon_menu">テクノロジー</a>
						</li>
						<li>
							<a href="http://tabi-labo.com/category/beauty/">
							<img alt="ビューティー" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_beauty.png">
							</a>
							<a href="http://tabi-labo.com/category/beauty/" class="menu_link icon_menu">ビューティー</a>
						</li>
						<li>
							<a href="http://tabi-labo.com/category/sports/">
							<img alt="スポーツ" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/icon_sports.png">
							</a>
							<a href="http://tabi-labo.com/category/sports/" class="menu_link icon_menu">スポーツ</a>
						</li>
					</ul> -->
				</dd>
				<!-- hide side bar -->
				<dt class="pc_hide">TABI LABO について</dt>
				<dd class="pc_hide">
					<ul>
						<?php wp_nav_menu($options); ?>
						<!-- <li><a href="http://tabi-labo.com/about/" class="menu_link">TABI LABO とは</a></li>
						<li><a href="http://tabi-labo.com/company/" class="menu_link">会社概要</a></li>
						<li><a href="http://tabi-labo.com/ambassador/" class="menu_link">TABI LABO アンバサダー</a></li>
						<li><a href="http://tabi-labo.com/advertisement/" class="menu_link">広告掲載について</a></li>
						<li><a href="http://tabi-labo.com/category/invitation/" class="menu_link">求人・募集</a></li>
						<li><a href="http://tabi-labo.com/category/event/" class="menu_link">イベント</a></li>
						<li><a href="http://tabi-labo.com/category/press/" class="menu_link">お知らせ</a></li>
						<li><a href="http://tabi-labo.com/contact/" class="menu_link">お問い合わせ</a></li>
						<li><a href="http://tabi-labo.com/sitepolicy/" class="menu_link">サイトポリシー</a></li>
						<li><a href="http://tabi-labo.com/contents-policy/" class="menu_link">コンテンツポリシー</a></li>
						<li><a href="" class="menu_link"></a></li> -->
					</ul>
				</dd>
			</dl>
		</div>	
	</div> <!-- end of sidebar -->
