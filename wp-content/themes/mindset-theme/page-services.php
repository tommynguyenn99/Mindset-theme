<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

	<?php

	$taxonomy = 'fwd_service_type';
	$terms    = get_terms(
		array(
			'taxonomy' =>  $taxonomy
		)
	);
	if ($terms && !is_wp_error($terms)) {
		foreach ($terms as $term) {
			$args = array(
				'post_type'      => 'fwd_services_post',
				'posts_per_page' => -1,
				'order'          => 'ASC',
				'orderby'        => 'title',
				'tax_query'      => array(
					array(
						'taxonomy' => $taxonomy,
						'field'    => 'slug',
						'terms'    => $term->slug,
					)
				),
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) {
				// Output Term name.
				echo '<h2>' . $term->name . '</h2>';


				// Output Content.
				while ($query->have_posts()) {
					$query->the_post();

					if (function_exists('get_field')) {
						if (get_field('services_text_field')) {
							echo '<h3 id="' . esc_attr(get_the_ID()) . '">' . esc_html(get_the_title()) . '</h3>';
							the_field('services_text_field');
						}
					}
				}
				wp_reset_postdata();
			}
		}
	}
	?>


	<a href="#" class="topbutton"></a>
</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
