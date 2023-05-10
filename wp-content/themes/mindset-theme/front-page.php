<?php

/**
 * The template for displaying the home page
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
    ?>
        <section class="home-intro">
            <?php
            // Load intro section from seperate page using WP_Query 
            // Page ID is the id of the about page where we added text 

            $args = array('page_id' => 8);


            $intro_query = new WP_Query($args);


            if ($intro_query->have_posts()) {
                while ($intro_query->have_posts()) {
                    $intro_query->the_post();

                    the_content();
                }
                wp_reset_postdata();
            }
            ?>
        </section>

        <section class="home-work">

        </section>

        <section class="home-work"></section>

        <section class="home-left">
            <?php
            if (function_exists('get_field')) {
                if (get_field('left_section_heading_')) {
                    echo '<h2>';
                    the_field('left_section_heading_');
                    echo '</h2>';
                }

                if (get_field('left_section_content')) {
                    echo '<p>';
                    the_field('left_section_content');
                    echo '</p>';
                }
            }

            ?>
        </section>

        <section class="home-right">
            <?php
            if (function_exists('get_field')) {
                if (get_field('right_section_heading_')) {
                    echo '<h2>';
                    the_field('right_section_heading_');
                    echo '</h2>';
                }

                if (get_field('right_section_content')) {
                    echo '<p>';
                    the_field('right_section_content');
                    echo '</p>';
                }
            }

            ?>
        </section>

        <section class="home-slider"></section>

        <section class="home-blog">
            <!-- Translate into another language -->
            <h2><?php esc_html_e('Latest Blog Posts', 'fwd') ?></h2>


            <?php
            $args = array(
                // get post type
                'post_type'      => 'post',
                // grab two posts per page 
                'posts_per_page' => 4

            );
            $blog_query = new WP_Query($args);

            // if blog query have post 
            if ($blog_query->have_posts()) {
                // if did, run function 
                while ($blog_query->have_posts()) {
                    // have the post below singlular or else will loop 
                    $blog_query->the_post();
            ?>
                    <article>
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('latest-blog-post'); ?>
                            </div><!-- .post-thumbnail -->
                            <h3><?php the_title(); ?></h3>
                            <p>Published on: <?php echo get_the_date(); ?></p>
                        </a>
                    </article>
            <?php
                }
                wp_reset_postdata();
            }

            ?>
        </section>


    <?php
    endwhile; // End of the loop.
    ?>


</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
