	
<?php


/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */


$args = array(
    'post_type'      => 'fwd-testimonial',
    'posts_per_page' => 1,
    'orderby'        => 'rand'
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        the_content();
    }
    wp_reset_postdata();
}
?>
