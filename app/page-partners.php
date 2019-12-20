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
<div class = "partners-header">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2>Our Partners</h2>
                    <hr>
                    <h3>Enim nulla accumsan fermentum felis ligula at massa.</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid-container partner_hero"> 
    <div class="grid-x grid-margin-x grid-margin-y">

    	<div class="small-12 cell">
			<h3>Vivamus aliquam neque ac est iaculis eget ultricies turpis bibendum</h3>
        </div>

        <div class="small-12 medium-6 large-8 cell">
        	<img class = "partner-1" src="https://images.unsplash.com/photo-1528275646751-ff237d1cd935?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="">
			<div class="partner-details">
				<h4>Partner #1</h4>
				<p>Cras in neque vel urna posuere euismod sit amet ac metus. Duis consequat, odio eget porta.</p>
			</div>
        </div>

        <div class="small-12 medium-6 large-4 cell">
        	<img class = "partner-2" src="https://images.unsplash.com/photo-1528277342758-f1d7613953a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="">
			<div class="partner-details">
				<h4>Partner #2</h4>
				<p>Aenean nec viverra sapien. Vestibulum egestas suscipit sem, rhoncus imperdiet quam facilisis ut.</p>
			</div>
        </div>


        <div class="small-12 medium-6 large-5 cell">
        	<img class = "partner-3" src="https://images.unsplash.com/photo-1517179184538-20d617e6c435?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1621&q=80" alt="">
			<div class="partner-details">
				<h4>Partner #3</h4>
				<p>Nulla tincidunt elementum nibh. In et auctor lorem. Ut placerat libero at posuere aliquam.</p>
			</div>
        </div>

        <div class="small-12 medium-6 large-7 cell">
        	<img class = "partner-4" src="https://images.unsplash.com/photo-1552710307-537199cd41c0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="">
			<div class="partner-details">
				<h4>Partner #4</h4>
				<p>Vestibulum egestas suscipit sem, rhoncus imperdiet quam facilisis ut. Etiam tempor aliquam ullamcorper.</p>
			</div>
        </div>

        <div class="small-12 cell">
        	<img class = "partner-5" src="https://images.unsplash.com/photo-1518709766631-a6a7f45921c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1525&q=80" alt="">
			<div class="partner-join">
				<h4>Interested In Becoming A Partner?</h4>
				<p>Vestibulum egestas suscipit sem, rhoncus imperdiet quam facilisis ut. Etiam tempor aliquam ullamcorper.</p>
				<a class = "ff dark1" href = "#">Join the Mission<i class="fas fa-arrow-circle-right push"></i></a>
			</div>
        </div>

    </div>
</div>





<?php get_footer();