<?php 
function last_five_posts( $atts ){

$my_posts = new WP_Query;
$myposts = $my_posts->query( array(
	'post_type' => 'books',
	'posts_per_page' => 5
) );

$out = '<div class="shortcode__last-posts">';
foreach( $myposts as $pst ){
	$id = $pst->ID;
	$out.= '<a href="' . get_permalink($id) . '"><img src="' . get_the_post_thumbnail_url($id) . '"><span>'.get_the_title($id).'</span></a>';
}

$out.= '</div>';
	return $out;
}
add_shortcode('last-posts', 'last_five_posts');