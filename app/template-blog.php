<?php
/**
* Template Name: Blog
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
<div class="bg-4">
	<div class = "blog-header">
		<div class="grid-container fullWidth">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell billboard-main">
					<div class = "center">
						<h2>The Charis In Action Blog</h2>
						<!-- <img class = "blog-logo" src="http://charis-in-action.local/wp-content/uploads/2019/07/logo.png"> -->
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="grid-container fullWidth">
		<div class="grid-x grid-padding-x">
			<div class="large-6 cell">
				<div class = "blog-card">
					<div class = "card-thumbnail">
						<img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="">
					</div>
					<div class="card-cat">Updates</div>
					<h3>Article Title and whatnot</h3>
					<p>Line or two from the thing as an exceprt[...]</p>
					<div class = "card-details">
						<span class = "card-name">Todd Stewart</span> | <span class = "card-date">July 10, 2019</span>
					</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer();
