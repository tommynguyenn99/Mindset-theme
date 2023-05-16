<?php

/**
 * The template for displaying web category 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<?php
			// Get rid of category in title and wrap it in an h1 tag
			$title = single_term_title('', false);
			if (!empty($title)) {
				echo '<h1>' . $title . '</h1>';
			}

			the_archive_description('<div class="archive-description">', '</div>');
			?>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();
		?>


			<article>
				<a href="<?php the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
					<?php the_post_thumbnail('large'); ?>
				</a>
			</article>


	<?php
		endwhile;

		the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>
	<a href="#" class="topbutton"></a>
</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
