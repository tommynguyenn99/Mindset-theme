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

    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(5); ?>" <?php post_class(); ?>>

            <div class="entry-content">
                <?php
                if (function_exists('get_field')) {

                    if (get_field('address')) {
                        the_field('address');
                    }

                    if (get_field('email_address_required_')) {
                        the_field('email_address_required_');
                    }
                }
                ?>
            </div>


            <?php
            // Display the field value...
            the_field('address');

            ?>
            <?php
            // Display the field value...
            the_field('email_address_required_');

            ?>

        </article>

    <?php endwhile; // End of the loop. 
    ?>