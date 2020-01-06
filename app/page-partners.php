<?php
/**
* Template Name: Partners Page
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
<div class = "partners-header" style = "background: url(<?php the_field('partner_background_image'); ?>) no-repeat bottom center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2><?php the_field('partner_page_title'); ?></h2>
                    <hr>
                    <h3><?php the_field('partners_page_tagline'); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid-container partner_hero"> 
    <div class="grid-x grid-margin-x grid-margin-y">

    	<div class="small-12 cell">
			<h3><?php the_field('partner_header_text'); ?></h3>
        </div>

        <div class="small-12 cell">
        	<img class = "partner-1" src="<?php the_field('partner_featured_image_1'); ?>" alt="">
			<div class="partner-details">
				<h4><?php the_field('partner_name_1'); ?></h4>
                <p><?php the_field('partner_information_1'); ?></p>
                <a class = "ff dark1" href = "<?php the_field('cta_button_link_1'); ?>"><?php the_field('cta_button_text_1'); ?> <i class="fas fa-arrow-circle-right push"></i></a>
            </div>
        </div>

        <div class="small-12 medium-6 cell">
            <img class = "partner-2" src="<?php the_field('partner_featured_image_2'); ?>" alt="">
            <div class="partner-details fixed-height ">
                <h4><?php the_field('partner_name_2'); ?></h4>
                <p><?php the_field('partner_information_2'); ?></p>
                <a class = "ff dark1" href = "<?php the_field('cta_button_link_2'); ?>"><?php the_field('cta_button_text_2'); ?> <i class="fas fa-arrow-circle-right push"></i></a>
            </div>
        </div>


        <div class="small-12 medium-6 cell">
            <img class = "partner-3" src="<?php the_field('partner_featured_image_3'); ?>" alt="">
            <div class="partner-details fixed-height">
                <h4><?php the_field('partner_name_3'); ?></h4>
                <p><?php the_field('partner_information_3'); ?></p>
                <a class = "ff dark1" href = "<?php the_field('cta_button_link_3'); ?>"><?php the_field('cta_button_text_3'); ?> <i class="fas fa-arrow-circle-right push"></i></a>
            </div>
        </div>

        
        <div class="small-12 cell">
            <img class = "partner-4" src="<?php the_field('partner_featured_image_4'); ?>" alt="">
            <div class="partner-join">
                <h4><?php the_field('partner_name_4'); ?></h4>
                <p><?php the_field('partner_information_4'); ?></p>
                <a class = "ff dark1" href = "<?php the_field('cta_button_link_4'); ?>"><?php the_field('cta_button_text_4'); ?> <i class="fas fa-arrow-circle-right push"></i></a>
            </div>
        </div>

    </div>
</div>





<?php get_footer();