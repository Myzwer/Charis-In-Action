<?php
/**
* Template Name: Projects Page
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
<div class = "projects-header">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2>Projects</h2>
                    <hr>
                    <h3>God is on the move</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid-container projects-hero"> 
    <div class="grid-x grid-margin-x grid-margin-y">
        <div class="small-12 cell">
            <h1>Faith Demands Action.</h1>
            <p>Nam ullamcorper magna ac elit pellentesque, eget vestibulum eros luctus. Donec a est sed ex malesuada efficitur et eu arcu. Mauris nibh nisl, pulvinar placerat nunc ac, placerat porta nisi. Duis eu eros tortor. Integer fringilla elit vitae erat finibus posuere. Nunc aliquet ut augue a efficitur. Nunc ac tempor enim. Quisque ornare ac nisl sed aliquam. Etiam non tortor viverra, pretium tellus nec, tempor elit. Cras gravida sagittis lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras luctus tincidunt nunc eu ornare. Sed dictum velit dolor, sit amet congue ex elementum eget. Phasellus eu magna quam. Fusce efficitur eleifend lectus in tempus.</p>
        </div>
    </div>
</div>

<div class="grid-container"> 
    <div class="grid-x grid-margin-x grid-margin-y">
        <div class="small-12 medium cell">
            <h1 class = "center">Current Projects</h1>
            <hr>
        </div>
    </div>
</div>

<div class="grid-container special-project"> 
    <div class="grid-x grid-margin-x grid-margin-y">
        <div class="small-12 medium-4 cell">
            <img src="https://images.unsplash.com/photo-1511185307590-3c29c11275ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1648&q=80" alt="">
        </div>

        <div class="small-12 medium-8 cell">
            <h1>Project #1</h1>
            <p>Ut vehicula imperdiet neque vehicula sodales. Vestibulum ligula lectus, sollicitudin quis auctor ut, ultricies eu dolor. Sed vitae porttitor tortor. Vestibulum sed congue justo. Sed quis euismod odio, commodo accumsan erat. Praesent malesuada quam et neque pellentesque posuere. Nulla congue dolor ex, vel efficitur lectus ultricies non. Praesent pulvinar nisl nec tempus viverra. Sed non justo vel augue pharetra euismod. Pellentesque aliquet nec felis ut viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>
</div>
<hr class = "project-divide">

<div class="grid-container special-project"> 
    <div class="grid-x grid-margin-x grid-margin-y">
        <div class="small-12 medium-4 cell">
            <img src="https://images.unsplash.com/photo-1511283878565-0833bf39de9d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1653&q=80" alt="">
        </div>

        <div class="small-12 medium-8 cell">
            <h1>Project #2</h1>
            <p>Ut vehicula imperdiet neque vehicula sodales. Vestibulum ligula lectus, sollicitudin quis auctor ut, ultricies eu dolor. Sed vitae porttitor tortor. Vestibulum sed congue justo. Sed quis euismod odio, commodo accumsan erat. Praesent malesuada quam et neque pellentesque posuere. Nulla congue dolor ex, vel efficitur lectus ultricies non. Praesent pulvinar nisl nec tempus viverra. Sed non justo vel augue pharetra euismod. Pellentesque aliquet nec felis ut viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>
</div>
<hr class = "project-divide">

<div class="grid-container special-project"> 
    <div class="grid-x grid-margin-x grid-margin-y">
        <div class="small-12 medium-4 cell">
            <img src="https://images.unsplash.com/photo-1515205244153-fce4e5d8bc49?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1721&q=80" alt="">
        </div>

        <div class="small-12 medium-8 cell">
            <h1>Project #3</h1>
            <p>Ut vehicula imperdiet neque vehicula sodales. Vestibulum ligula lectus, sollicitudin quis auctor ut, ultricies eu dolor. Sed vitae porttitor tortor. Vestibulum sed congue justo. Sed quis euismod odio, commodo accumsan erat. Praesent malesuada quam et neque pellentesque posuere. Nulla congue dolor ex, vel efficitur lectus ultricies non. Praesent pulvinar nisl nec tempus viverra. Sed non justo vel augue pharetra euismod. Pellentesque aliquet nec felis ut viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>
</div>





<?php get_footer();