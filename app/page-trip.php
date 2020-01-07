<?php
/**
* Template Name: Trip Page
*
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @since 1.0
* @version 1.0
*/

get_header(); ?>
<!-- The Header section with the photo and mission statement. -->
<div class = "trip-header" style = "background: url(<?php the_field('trip_background_image'); ?>) no-repeat bottom center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2><?php the_field('trip_page_title'); ?></h2>
                    <hr>
                    <h3><?php the_field('trip_page_tagline'); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-x">
        <div class="small-12 cell trip-type-head">
            <h2><?php the_field('st_title'); ?></h2>
            <p><?php the_field('st_details_paragraph'); ?></p>
            <div class = "button-center">
                <a class = "ff dark1" href = "<?php the_field('st_button_link'); ?>"><?php the_field('st_button_text'); ?> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <?php
        // Start the Repeater Loop
        if( have_rows('short_term_trip') ):
            // Card Start
            // Begin looping data
            while ( have_rows('short_term_trip') ) : the_row();
                echo '<div class="small-12 medium-6 large-4 cell">';

                //Trip Image
                echo '<img src="';
                the_sub_field('st_background_image');
                echo '">';

                //Start Trip Info
                echo '<div class="trip-info">';

                echo '<h2 class = "trip-title">';
                the_sub_field('st_trip_title');
                echo '</h2>';

                echo '<p class = "trip-date">';
                the_sub_field('st_trip_date_start');
                echo ' - ';
                the_sub_field('st_trip_date_end');
                echo '</p>';

                echo '<p class = "trip-deets">';
                the_sub_field('st_trip_details');
                echo '</p>';

                echo '<div class = "button-center">';
                    echo '<a class = "ff dark1" href = "';
                    the_sub_field('st_trip_button_link');
                    echo '"/>';
                    the_sub_field('st_trip_button_text');
                    echo ' <i class="fas fa-arrow-circle-right"></i>';
                    echo '</a>';
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







    <div class="grid-container">
        <div class="grid-x">
            <div class="small-12 cell trip-type-head">
                <h2><?php the_field('mt_title'); ?></h2>
                <p><?php the_field('mt_details_paragraph'); ?></p>
                <div class = "button-center">
                    <a class = "ff dark1" href = "<?php the_field('mt_button_link'); ?>"><?php the_field('mt_button_text'); ?> <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <?php
            // Start the Repeater Loop
            if( have_rows('mid_term_trip') ):
                // Card Start
                // Begin looping data
                while ( have_rows('mid_term_trip') ) : the_row();
                    echo '<div class="small-12 medium-6 large-4 cell">';

                    //Trip Image
                    echo '<img src="';
                    the_sub_field('mt_background_image');
                    echo '">';

                    //Start Trip Info
                    echo '<div class="trip-info">';

                    echo '<h2 class = "trip-title">';
                    the_sub_field('mt_trip_title');
                    echo '</h2>';

                    echo '<p class = "trip-date">';
                    the_sub_field('mt_trip_date_start');
                    echo '</p>';

                    echo '<p class = "trip-deets">';
                    the_sub_field('mt_trip_details');
                    echo '</p>';

                    echo '<div class = "button-center">';
                    echo '<a class = "ff dark1" href = "';
                    the_sub_field('mt_trip_button_link');
                    echo '"/>';
                    the_sub_field('mt_trip_button_text');
                    echo ' <i class="fas fa-arrow-circle-right"></i>';
                    echo '</a>';
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