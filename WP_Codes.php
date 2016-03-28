<?php


/*
 * Normal query loop
 */

global $post;

$args = array('post_type' => 'page', 'orderby' => 'menu_order');
$my_posts = get_posts( $args );
foreach( $my_posts as $post ): setup_postdata( $post );
?>

<li><a href="#"><?php the_title(); ?></a></li>

<?php endforeach; ?>