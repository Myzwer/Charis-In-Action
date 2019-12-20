<?php
/**
* Template Name: Serve Page
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
<div class = "serve-header">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2>Serve With Us</h2>
                    <hr>
                    <h3>We like help!</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid-container serve-hero"> 
    <div class="grid-x grid-margin-x grid-margin-y">
        <div class="small-12 medium-7 cell">
            <h1>You can make a difference.</h1>
            <p>Ut vehicula imperdiet neque vehicula sodales. Vestibulum ligula lectus, sollicitudin quis auctor ut, ultricies eu dolor. Sed vitae porttitor tortor. Vestibulum sed congue justo. Sed quis euismod odio, commodo accumsan erat. Praesent malesuada quam et neque pellentesque posuere. Nulla congue dolor ex, vel efficitur lectus ultricies non. Praesent pulvinar nisl nec tempus viverra. Sed non justo vel augue pharetra euismod. Pellentesque aliquet nec felis ut viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
        <div class="small-12 medium-5 cell">
            This is the form
        </div>
    </div>
</div>






<?php get_footer();