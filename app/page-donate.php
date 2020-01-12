<?php
/**
* Template Name: Donate Page
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @since 1.0
* @version 1.0
*/

get_header(); ?>

<div class = "">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell billboard-main donate-header" style = "  background: url(<?php the_field('donate_background_image'); ?>) no-repeat bottom center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                <div class = "center">
                    <h2><?php the_field('donate_headline'); ?></h2>
                    <a class = "ff dark1" href = "<?php the_field('donate_button_link_1'); ?>"><?php the_field('donate_button_text_1'); ?> <i class="fas fa-arrow-circle-right push"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="small-12 cell donate-card">
                <h2><?php the_field('donate_headline'); ?></h2>
                <p><?php the_field('donate_main_body'); ?></p>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x">
            <div class="small-12 cell ">
                <img class = "partner-4" src="<?php the_field('donate_banner_image'); ?>" alt="">
            </div>
        </div>
    </div>

    <div class="grid-container fullWidth">
        <div class="grid-x">
            <div class="small-12 cell ">
                <div class="small-12 cell donate-banner">
                    <h2><?php the_field('donate_banner_text'); ?></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container fullWidth">
        <div class="grid-x grid-margin-x">
            <?php
            // Start the Repeater Loop
            if (have_rows('donation_partners')):
// Card Start
// Begin looping data
                while (have_rows('donation_partners')) : the_row();

                    echo '<div class="small-12 medium-6 large-4 cell">';
                    echo '<div class="grid-container fullWidth">';
                    echo '<div class="grid-x grid-margin-x">';

                    echo '<div class="small-12 image-container cell">';

                    echo '<img src="';
                    the_sub_field('repeater_image');
                    echo '">';

                    echo '</div>';

                    echo '<div class="small-12 cell donate-partner-card">';
//Name
                    echo '<h2>';
                    the_sub_field('donate_partner_title');
                    echo '</h2>';

//Job Title
                    echo '<p>';
                    the_sub_field('donate_partner_details');
                    echo '</p>';

//Button
                    echo '<div class = "button-center">';
                    echo '<a class = "ff dark1" href = "';
                    the_sub_field('partner_cta_link');
                    echo '"/>';
                    the_sub_field('partner_cta_text');
                    echo ' <i class="fas fa-arrow-circle-right"></i>';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                endwhile;
            else :
// no rows found
            endif;
            ?>

        </div>
    </div>

<?php get_footer();