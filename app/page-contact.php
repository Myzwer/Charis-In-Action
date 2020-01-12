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
<div class = "trip-header" style = "background: url(<?php the_field('contact_background_image'); ?>) no-repeat center center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
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

    <div class="grid-container contact-body">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="small-12 medium-6 large-6 cell contact-form">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
            <div class="small-12 medium-6 large-6 cell  contact-info">
                <h3><?php the_field('contact_headline'); ?></h3>
                <p><?php the_field('contact_main_paragraph'); ?></p>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="small-12 cell contact-image-banner ">
                <img class = "partner-4" src="<?php the_field('footer_image'); ?>" alt="">
            </div>
            <div class="small-12 cell email-banner">
                <h3><?php the_field('contact_footer_headline'); ?></h3>
                <p><?php the_field('contact_footer_body'); ?> </p>
            </div>
        </div>
    </div>

<?php get_footer();