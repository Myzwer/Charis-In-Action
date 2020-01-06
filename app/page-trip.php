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
<div class = "trip-header">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2>Take A Trip</h2>
                    <hr>
                    <h3>Secondary tagline or whatever</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-x">
        <div class="small-12 cell trip-type-head">
            <h2>Short Term Trips</h2>
            <p>Aenean ultrices mauris sit amet mauris tempor, id eleifend diam maximus. Etiam varius, magna nec vestibulum bibendum, orci felis luctus sem, vitae elementum ipsum nisl vitae augue. Proin luctus auctor neque. Mauris fringilla blandit nunc, quis vehicula magna.</p>
            <div class = "button-center">
                <a class = "ff dark1" href = "#">More Information <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-x">
        <div class="small-12 medium-6 large-4 cell">
            <img src="http://charis-in-action.local/wp-content/uploads/2020/01/photo-1528277342758-f1d7613953a2.jpeg" alt="">
            <div class="trip-info">
                <h2 class = "trip-title">Trip #1</h2>
                <p class = "trip-date">October 21, 2019</p>
                <p class = "trip-deets">Etiam leo velit, ornare vitae ornare et, cursus non enim. Aenean malesuada nunc eget nulla fermentum, et facilisis massa lobortis. Maecenas enim lorem, ultricies a ex vitae, scelerisque feugiat sem.</p>
                <div class = "button-center">
                    <a class = "ff dark1" href = "#">More Information <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="grid-container">
        <div class="grid-x">
            <div class="small-12 cell trip-type-head">
                <h2>Mid Term Trips</h2>
                <p>Aenean ultrices mauris sit amet mauris tempor, id eleifend diam maximus. Etiam varius, magna nec vestibulum bibendum, orci felis luctus sem, vitae elementum ipsum nisl vitae augue. Proin luctus auctor neque. Mauris fringilla blandit nunc, quis vehicula magna.</p>
                <div class = "button-center">
                    <a class = "ff dark1" href = "#">More Information <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x">
            <div class="small-12 medium-6 large-4 cell">
                <img src="http://charis-in-action.local/wp-content/uploads/2020/01/photo-1528277342758-f1d7613953a2.jpeg" alt="">
                <div class="trip-info">
                    <h2 class = "trip-title">Trip #1</h2>
                    <p class = "trip-date">October 21, 2019</p>
                    <p class = "trip-deets">Etiam leo velit, ornare vitae ornare et, cursus non enim. Aenean malesuada nunc eget nulla fermentum, et facilisis massa lobortis. Maecenas enim lorem, ultricies a ex vitae, scelerisque feugiat sem.</p>
                    <div class = "button-center">
                        <a class = "ff dark1" href = "#">More Information <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();