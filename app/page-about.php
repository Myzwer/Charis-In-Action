<?php
/**
* Template Name: About Page
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
<!-- The Header section with the photo and mission statement. -->
<div class = "about-header" style="  background: url(<?php the_field('about_background_image'); ?>) no-repeat bottom center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2><?php the_field('about_page_title'); ?></h2>
                    <hr>
                    <h3><?php the_field('about_tagline'); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- This is the top hero section with the about copy and the 2 side image links. -->
<div class="grid-container about_hero"> 
    <div class="grid-x grid-margin-x">
        <div class="small-12 large-8 cell about_bio">
            <div class = "inner-bio">
                <p>
                    <?php the_field('about_main_copy'); ?>
                </p>
            </div>
        </div>

        <div class="small-12 large-4 cell about_images">
            <div class="grid-container fullWidth"> 
                <div class="grid-x grid-margin-x">
                     <div class="small-12 medium-6 large-12 cell">
                        <a href = "<?php the_field('link_box_1'); ?>">
                            <div class = "about-card-outer">
                                <div class = "about-card-inner">
                                    <div class = "about-card-overlay">
                                    <h3 class="headline">
                                        <span><?php the_field('link_text_box_1'); ?></span>
                                    </h3>
                                    </div>
                                    <img src="<?php the_field('background_image_box_1'); ?>" alt="">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="small-12 medium-6 large-12 add-padding cell">
                        <a href = "<?php the_field('link_box_2'); ?>">
                            <div class = "about-card-outer">
                                <div class = "about-card-inner">
                                    <div class = "about-card-overlay">
                                    <h3 class="headline">
                                        <span><?php the_field('link_text_box_2'); ?></span>
                                    </h3>
                                    </div>
                                    <img src="<?php the_field('background_image_box_2'); ?>" alt="">
                                </div>
                            </div>
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid-container about_hero"> 
    <div class="grid-x grid-margin-x">
        <div class="small-12 medium-5 large-4 cell">
            <div class="contact-card">
                <p>
                    <span class = "underline">
                        <span><?php the_field('phone_number'); ?></span>
                    </span>

                    <span class = "underline">
                        <span><?php the_field('email_about'); ?></span>
                    </span>

                    <span class = "underline">
                        <span><?php the_field('website_about'); ?></span>
                    </span>
                </p>

                <p>
                    <span class = "underline">
                        <span><?php the_field('address_line_1'); ?></span>
                    </span>

                    <span class = "underline">
                        <span><?php the_field('address_line_2'); ?></span>
                    </span>
                </p>

                <p>
                    <span class = "underline">
                        <span><?php the_field('final_cta'); ?></span>
                    </span>

                    <span>
                    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                </span>
                </p>
            </div>
        </div>
        
        <div class="small-12 medium-7 large-8 cell">
            <div class = "about-contact-photo" style = "background: url(<?php the_field('image_about_footer'); ?>) no-repeat bottom center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
            </div>
        </div>
    </div>
</div>





<?php get_footer();