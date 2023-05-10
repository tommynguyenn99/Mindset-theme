<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-contact">

	</div><!-- .footer-contact -->
	<div class="footer-menus">
		<nav id="footer-navigation" class="footer-navigation">
			<?php
			if (!is_page('contact')) {
				// Get the values of Field A and Field B from another post
				$post_id = 5; // Replace 123 with the ID of the post you want to retrieve the values from
				$field_a_value = get_field('address', $post_id);

				// Display the values in the footer
				echo '<div>' . $field_a_value . '</div>';
			}
			?>
			<?php wp_nav_menu(array('theme_location' => 'footer-left')); ?>
		</nav>
		<nav id="footer-navigation" class="footer-navigation">
			<?php
			if (!is_page('contact')) {
				// Get the values of Field A and Field B from another post
				$post_id = 5; // Replace 123 with the ID of the post you want to retrieve the values from
				$field_b_value = get_field('email_address_required_', $post_id);

				// Display the values in the footer
				echo '<div>' . $field_b_value . '</div>';
			}
			?>
			<?php wp_nav_menu(array('theme_location' => 'footer-right')); ?>
		</nav>
	</div><!-- .footer-menus -->
	<div class="site-info">
		<a href="<?php echo esc_url(get_privacy_policy_url()); ?>">Privacy Policy</a>
		<?php esc_html_e('Created by ', 'fwd'); ?><a href="<?php echo esc_url(__('https://wp.bcitwebdeveloper.ca/', 'fwd')); ?>"><?php esc_html_e('Jonathon Leathers', 'fwd'); ?></a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>