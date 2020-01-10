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
                <h3>Reach out and stuff.</h3>
                <p>Donec arcu nunc, feugiat et venenatis ornare, laoreet sit amet erat. Nunc sed ipsum ultricies, cursus mi a, mattis ante. Integer id mollis ligula. Nunc velit velit, tempus vel accumsan at, dictum eu nisi. Integer accumsan sapien sed diam tempus, molestie vestibulum ligula ultrices. Nullam ac viverra quam. Aliquam sagittis enim vitae eleifend placerat. Morbi et elit sed libero venenatis iaculis.</p>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="small-12 cell contact-image-banner ">
                <img class = "partner-4" src="http://charis-in-action.local/wp-content/uploads/2020/01/frontpage-contact.jpeg" alt="">
            </div>
            <div class="small-12 cell email-banner">
                <h3>Email work better?</h3>
                <p>Hey, that's fine probably. Curabitur dignissim metus sed elit accumsan, sed ornare velit sodales. Integer nec dapibus ligula. Sed et neque vel purus commodo <a href="mailto:info@charisinaction.org">info@charisinaction.org</a>. </p>
            </div>
        </div>
    </div>

<?php get_footer();