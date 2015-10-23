<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="shortcut icon" href="http://tabilabo.s3.amazonaws.com/wp-content/uploads/2014/07/favicon.ico">
       
		<!-- load custom css -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
		<link media="all" type="text/css" href="http://tabi-labo.com/wp-content/themes/tabilabo/css/wpp.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/swiper/swiper.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/genericons.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/widget.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/custom.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/custom-archive.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/jquery.slidemenu.css" rel="stylesheet"> 
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

		<!-- /load custom css -->
		
	</head>

<body <?php body_class(); ?> >

	<div class="widget-area" id="slidemenu">
		<div id="slidemenu_contents">
			<div class="sidebar widget widget_nav_menu">
				<dl id="slidemenu_list">
					<dt>カテゴリー</dt>
					<dd>
						<ul>
							<?php wp_nav_menu(array('menu' => 'Sidebar Menu','fallback_cb'=> 'wp_page_menu', 'items_wrap' => '%3$s')); ?>
							<!-- <li>
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
					<dt class="pc_hide">TABI LABO について</dt>
					<dd class="pc_hide">
					<ul>
						<?php wp_nav_menu(array('menu' => 'Sidebar Menu','fallback_cb'=> 'wp_page_menu', 'items_wrap' => '%3$s')); ?>
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
		</div>
	</div>

	<div class="hfeed site" id="page">
	<header role="banner" class="site-header" id="masthead">
		<div class="header-main tablet_and_mobile_hide">
			<div id="mobile_menu_button"></div>
			
			<h1 class="site-title mobile_hide">
				<a data-label="logo" data-id="header" rel="home" href="<?php bloginfo('home');?>">
					<img width="200" alt="TABI LABO" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/logo.png"></a>
				</h1>	
			
			
			<div class="search-toggle">
				<a class="screen-reader-text" href="#search-container">検索</a>
			</div>
			<?php 
				$header_menu_options = array('theme_location'  => '','menu' => 'Header Menu', 'echo' => true,
                            'fallback_cb'     => 'wp_page_menu','items_wrap'      => '%3$s'); 
			?>
			<nav role="navigation" class="site-navigation primary-navigation" id="primary-navigation">
				<h1 class="menu-toggle pc_only">メインメニュー</h1>
				<a href="#content" class="screen-reader-text skip-link">コンテンツへ移動</a>
				<div class="menu-global-container">
					<ul class="nav-menu" id="menu-global">
						<?php wp_nav_menu($header_menu_options); ?>
					</ul>
				</div>			
			</nav>
		</div>
		<div class="search-box-wrapper hide" id="search-container">
			<div class="search-box">
				<form action="http://tabi-labo.com/" class="search-form" method="get" role="search">
				<label>
					<span class="screen-reader-text">検索:</span>
					<input type="search" title="検索:" name="s" value="" placeholder="検索 …" class="search-field">
				</label>
				<input type="submit" value="検索" class="search-submit">
			</form>			</div>
		</div>
	</header><!-- #masthead -->

	<div class="header-mobile site-header tablet_and_mobile_only">
		<a data-label="logo" data-id="header" rel="home" href="http://tabi-labo.com/"><img width="210" alt="TABI LABO" src="http://tabi-labo.com/wp-content/themes/tabilabo/images/logo.png"></a>
		<div id="mobile-search-container" class="search-box hide">
			<form action="http://tabi-labo.com/" class="search-form" method="get" role="search">
				<label>
					<span class="screen-reader-text">検索:</span>
					<input type="search" title="検索:" name="s" value="" placeholder="検索 …" class="search-field">
				</label>
				<input type="submit" value="検索" class="search-submit">
			</form>		
		</div>
	</div>

	<div class="site-main" id="main">
 