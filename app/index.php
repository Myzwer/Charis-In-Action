<?php
/**
* Template Name: Front Page
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

<div class = "homepage-header">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <img class = "logo" src="http://charis-in-action.local/wp-content/uploads/2019/07/logo.png">
                    <h2>Developing Disciples that develop disciples</h2>
                    <a class = "ff dark1" href = "#">Learn More About Us<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class = "homepage-hero">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="small-12 large-4 cell column_1">
                <div class = "center">
                    <div class = "circle">
                        <i class="fas fa-church main"></i>
                    </div>
                    <h3>Our Mission and Vision</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis turpis eu congue pharetra. In ut urna sem. Donec non est mi. Duis laoreet lobortis lobortis. Nulla arcu purus, malesuada in laoreet vitae, tincidunt nec augue.</p>
                    <a class = "ff dark1" href = "#">Learn More About Us<i class="fas fa-arrow-circle-right push"></i></a>
                </div>
            </div>

            <div class="small-12 large-4 cell column_1">
                <div class = "center">
                    <div class = "circle">
                        <i class="fas fa-user-friends main"></i>
                    </div>
                    <h3>Our Partners In Minsitry</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis turpis eu congue pharetra. In ut urna sem. Donec non est mi. Duis laoreet lobortis lobortis. Nulla arcu purus, malesuada in laoreet vitae, tincidunt nec augue.</p>
                    <a class = "ff dark1" href = "#">Learn More About Us<i class="fas fa-arrow-circle-right push"></i></a>
                </div>
            </div>

            <div class="small-12 large-4 cell column_1">
                <div class = "center">
                    <div class = "circle">
                        <i class="fas fa-gift main"></i>
                    </div>
                    <h3>Support Our Mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis turpis eu congue pharetra. In ut urna sem. Donec non est mi. Duis laoreet lobortis lobortis. Nulla arcu purus, malesuada in laoreet vitae, tincidunt nec augue.</p>
                    <a class = "ff dark1" href = "#">Learn More About Us<i class="fas fa-arrow-circle-right push"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();
