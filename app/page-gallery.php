<?php
/**
* Template Name: Gallery Page
*
* This is the most generic template file in a WordPress theme
* and one of the two requiHaiti files for a theme (the other being style.css).
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

<div class = "gallery-header">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2>Gallery</h2>
                    <hr>
                    <h3>Enim nulla accumsan fermentum felis ligula at massa.</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h3 class = "gallery-hero">Duis ac eros neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</h3>
        </div> 
    </div>
</div>


<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">


            <div class="filters"> 
                <div class="grid-x grid-padding-x">
                    <div class="large-3 cell"> 

                        <div class="filters__item tab-heading-01">
                            <a><span class="filters__btn  js-filter" data-color="all">All</span></a>
                        </div>

                    </div>

                    <div class="large-3 cell"> 
                        <div class="filters__item tab-heading-01">
                            <a><span class="filters__btn  js-filter" data-color="Haiti">Haiti</span></a>
                        </div>
                    </div>
                    
                    <div class="large-3 cell"> 
                        <div class="filters__item tab-heading-01">
                            <a><span class="filters__btn  js-filter" data-color="Zambia">Zambia</span></a>
                        </div>
                    </div>
                    
                    <div class="large-3 cell"> 
                        <div class="filters__item">
                            <span class="filters__btn  js-filter" data-color="Sydney">Sydney</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery">
                <div class="gallery__item  js-filterable" data-color="Haiti">
                    <?php 
                    if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'haiti-gallery', 'slug' ); }
                    ?>
                </div>

                <div class="gallery__item  js-filterable" data-color="Haiti">

                </div>

                <div class="gallery__item  js-filterable" data-color="Zambia">
                    

                </div>

                <div class="gallery__item  js-filterable" data-color="Sydney">
                    

                </div>

            </div>

        </div>
    </div>
</div>

<?php get_footer();

