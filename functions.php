<?php
// ウィジェットエリア
// サイドバーのウィジェット
register_sidebar( array(
	'name' => __( 'Side Widget' ),
	'id' => 'side-widget',
	'before_widget' => '<li class="widget-container">',
	'after_widget' => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

// フッターエリアのウィジェット
register_sidebar(array(
	'name' => __( 'Footer Widget' ),
	'id' => 'footer-widget',
	'before_widget' => '<div class="widget-area"><ul><li class="widget-container">',
	'after_widget' => '</li></ul></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

define( 'WP_SCSS_ALWAYS_RECOMPILE', true );
// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(220, 165, true ); // 幅 220px、高さ 165px、切り抜きモード
add_filter( 'show_admin_bar', '__return_false' );
// カスタムナビゲーションメニュー
add_theme_support('menus');

function addtional_styles() {
  if( is_front_page() ){
    wp_enqueue_style( 'front-css', get_template_directory_uri() . './style.css' );
  }
}

function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blogs'; //任意のスラッグ名
	}
	return $args;
}

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
add_action( 'wp_enqueue_scripts', 'addtional_styles' );

class custom_walker_nav_menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array()) {
    $output .= '<div class="header-nav-child"><div class="container"><ul class="sub-menu">';
  }
  function end_lvl(&$output, $depth = 0, $args = array()) {
    $output .= '</ul></div></div>';
  }
}
?>
