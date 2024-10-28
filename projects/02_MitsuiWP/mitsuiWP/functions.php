<?php

add_theme_support( 'menus' );
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );


function my_wp_nav_menu_add_bootstrap_class( $classes, $item ) {
    
if ( in_array("current-menu-item", $classes, true) ){
	$classes[] = "nav-item active";
}
else{
	$classes[] = "nav-item";
}
	return $classes;
}

add_theme_support( 'title-tag' );
//タイトル出力
function wpbeg_title( $title ) {
		if ( is_front_page() && is_home() ) { //トップページなら
				$title = get_bloginfo( 'name', 'display' );
		} elseif ( is_singular() ) { //シングルページなら
				$title = single_post_title( '', false );
		}
				return $title;
		}
add_filter( 'pre_get_document_title', 'wpbeg_title' );

add_filter( 'nav_menu_css_class', 'my_wp_nav_menu_add_bootstrap_class', 10, 2 );

add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
function add_class_on_link($item_output, $item){
return preg_replace('/(<a.*?)/', '$1' . " class='nav-link'", $item_output);
}

add_theme_support('post-thumbnails');