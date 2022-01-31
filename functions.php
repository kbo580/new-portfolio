<?php


function my_styles(){
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/styles.css' , array(), '1.0.0');
  wp_enqueue_script('script-name', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0',);
  wp_enqueue_style( 'icon', "https://use.fontawesome.com/releases/v5.15.4/css/all.css");
}
add_action('wp_enqueue_scripts', 'my_styles');

add_theme_support('post-thumbnails');

function post_has_archive($args, $post_type){
  if('post'== $post_type){
    $args['rewrite']=true;
    $args ["label"] = '製作物'; /*「投稿」のラベル名 */
    $args['has_archive']='works'; /* アーカイブにつけるスラッグ名 */
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* 特定のページの１ページあたりの表示数を変更する */
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_archive() ) { 
      $query->set( 'posts_per_page', '3' ); 
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

function bcn_add($bcnObj) {
	if (is_post_type_archive('post')) {
		$bcnObj->add(new bcn_breadcrumb('製作物一覧', null, array('archive', 'post-clumn-archive', 'current-item')));
		$trail_tmp = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = clone $bcnObj->trail[0];
		$bcnObj->trail[0] = $trail_tmp;
	}
	return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');

