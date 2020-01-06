<?php
/**
* Template Name: BOD Page
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

<div class = "bod-header" style="background: url(<?php the_field('bod_background_image'); ?>) no-repeat bottom center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2><?php the_field('bod_title'); ?></h2>
                    <hr>
                    <h3><?php the_field('bod_tagline'); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="consult-team">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
            	<h1 class="decorated center">
					<span>The Board of Directors</span>
				</h1>
            </div>

            <?php
            // Start the Repeater Loop
            if( have_rows('board_member') ):
                // Card Start
                    // Begin looping data
                    while ( have_rows('board_member') ) : the_row();
                        echo '<div class="small-12 medium-4 cell">';
                        echo '<div class = "team-card">';
                        // Member Image
                        echo '<img src="';
                        the_sub_field('headshot');
                        echo '">';

                        //Name
                        echo '<h4>';
                        the_sub_field('name');
                        echo '</h4>';

                        //Job Title
                        echo '<p class = "team-card-title">';
                        the_sub_field('job_title');
                        echo '</p>';

                        //Bio
                        echo '<p class="team-card-bio">';
                        the_sub_field('bio');
                        echo '</p>';
                        echo '</div>';
                        echo '</div>';
                endwhile;
            else :
                // no rows found
            endif;
            ?>

            <div class="small-12 bottom-board cell">
                    <img src="<?php the_field('bod_footer_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();