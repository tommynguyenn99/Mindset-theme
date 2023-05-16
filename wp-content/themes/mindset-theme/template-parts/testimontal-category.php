<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

$terms = get_terms(
	array(
		'taxonomy' => 'page-about',
	)
);

if ($terms && !is_wp_error($terms)) :
?>
	<section>
		<h2><?php esc_html_e('Random Testimonial', 'fwd'); ?></h2>
		<ul>
			<?php foreach ($terms as $term) : ?>
				<li>
					<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php
		$args = array(
			'post_type' => 'fwd-testimonial',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) :
			while ($query->have_posts()) :
				$query->the_post();
				the_content();
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</section>
<?php endif; ?>