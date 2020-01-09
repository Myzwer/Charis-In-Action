<?php
/**
* Template Name: Contact Page
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
<div class = "trip-header" style = "background: url(<?php the_field('contact_background_image'); ?>) no-repeat bottom center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2><?php the_field('contact_page_title'); ?></h2>
                    <hr>
                    <h3><?php the_field('contact_page_tagline'); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer();