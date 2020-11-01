<?php

if ( ! function_exists( 'lab_setup' ) ) :

function lab_setup() {
	/*
	 * 自動フィードリンク
	 * 参照：https://wpdocs.osdn.jp/%E8%87%AA%E5%8B%95%E3%83%95%E3%82%A3%E3%83%BC%E3%83%89%E3%83%AA%E3%83%B3%E3%82%AF
	 */
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * titleを自動で書き出し
	 * 参照：http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#Title_.E3.82.BF.E3.82.B0
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * アイキャッチ画像を設定できるようにする
	 * 参照：http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#.E6.8A.95.E7.A8.BF.E3.82.B5.E3.83.A0.E3.83.8D.E3.82.A4.E3.83.AB
	 */
    add_theme_support( 'post-thumbnails' );
    // add_theme_support( 'post-thumbnails', array( 'post' ) ); // 投稿のみの例

	/*
	 * 検索フォーム、コメントフォーム、コメントリスト、ギャラリー、キャプションでHTML5マークアップの使用を許可します
	 * 参照：http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	/*
	 * テーマカスタマイザーにおける編集ショートカット機能の使用
	 * 参照：https://celtislab.net/archives/20161222/wp-customizer-edit-shortcut/
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * カスタムメニュー位置を定義
	 * 参照：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
	 */
	register_nav_menus( array(
		'global' => 'グローバルナビ',
	) );
	
}
endif;
add_action( 'after_setup_theme', 'lab_setup' );

/*
 * 動画や写真を投稿する際のコンテンツの最大幅を設定
 * 参照：https://wpdocs.osdn.jp/%E3%82%B3%E3%83%B3%E3%83%86%E3%83%B3%E3%83%84%E5%B9%85
 */
function lab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lab_content_width', 640 );
}
add_action( 'after_setup_theme', 'lab_content_width', 0 );

/*
 * サイドバーを定義
 * 参照：http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
function lab_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'ここにウィジェットを追加',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lab_widgets_init' );

/*
 * スクリプトを読み込み
 * wp_enqueue_styleについて参照：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/wp_enqueue_style
 * wp_enqueue_scriptについて参照：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/wp_enqueue_script
 */

// cssの読み込み
function custom_enqueue(){
	wp_enqueue_style('main_style', get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts','custom_enqueue'); 

// jQueryの読み込み
function add_my_scripts() {
  wp_enqueue_script( 'base-script',get_template_directory_uri().'/js/humberger.js',array(),false,true );
}
add_action( 'wp_enqueue_scripts', 'add_my_scripts' );



// function add_my_files() {	
//   //WordPress 本体の jQuery を登録解除
//   wp_deregister_script( 'jquery');  
//   //jQuery を CDN から読み込む
//   wp_enqueue_script( 'jquery', 
//     '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', 
//     array(), 
//     '5.5.1', 
//     true 
//   );
//   wp_enqueue_script( 
//     'base-script', 
//     get_theme_file_uri( '/js/humberger.js' ), 
//     array( 'jquery' ), 
//     filemtime( get_theme_file_path( '/js/humberger.js' ) ), 
//     true
//   );
//   //スタイルシートの読み込み
// 	wp_enqueue_style('main_style', get_template_directory_uri() . '/style.css');
// }
// add_action('wp_enqueue_scripts', 'add_my_files');