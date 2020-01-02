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

<div class = "homepage-header" style ="background: linear-gradient(rgba(78,122,171, 0.45),rgba(78,122,171, 0.45)), url(<?php the_field('homepage_background_image'); ?>) no-repeat center center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
	<div class="grid-container fullWidth">
		<div class="grid-x grid-padding-x billboard-main">
			<div class="large-4 cell mobile-padding">
				<div class = "center">
					<h2>Engage</h2>
					<h3>The world</h3>
				</div>
			</div>
			<div class="large-4 cell mobile-padding">
				<div class = "center">
					<h2>Embrace</h2>
					<h3>the kingdom</h3>
				</div>
			</div>
			<div class="large-4 cell mobile-padding">
				<div class = "center">
					<h2>Empower</h2>
					<h3>the people</h3>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="grid-container fullWidth">
	<div class="grid-x grid-margin-x">
		<div class="small-12 large-6 cell frontpage-cards">
			<img src="<?php the_field('box_1_image'); ?>" alt="">
			<div class = "card_padding">
				<h3 class="decorated center">
					<span><?php the_field('box_1_title'); ?></span>
				</h3>
				<p><?php the_field('box_1_description'); ?></p>
				<div class = "button-center">
					<a class = "ff dark1" href = "<?php the_field('button_1_link'); ?>"><?php the_field('button_1_text'); ?><i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>

        <div class="small-12 large-6 cell frontpage-cards">
            <img src="<?php the_field('box_2_image'); ?>" alt="">
            <div class = "card_padding">
                <h3 class="decorated center">
                    <span><?php the_field('box_2_title'); ?></span>
                </h3>
                <p><?php the_field('box_2_description'); ?></p>
                <div class = "button-center">
                    <a class = "ff dark1" href = "<?php the_field('button_2_link'); ?>"><?php the_field('button_2_text'); ?><i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="small-12 cell frontpage-cards">
            <img src="<?php the_field('box_3_image'); ?>" alt="">
            <div class = "card_padding">
                <h3 class="decorated center">
                    <span><?php the_field('box_3_title'); ?></span>
                </h3>
                <p><?php the_field('box_3_description'); ?></p>
                <div class = "button-center">
                    <a class = "ff dark1" href = "<?php the_field('button_3_link'); ?>"><?php the_field('button_3_text'); ?><i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
	</div>
</div>

       
<div class = "frontpage-lower" style = " background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(<?php the_field('paragraph_background_image'); ?>) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
	<div class="grid-container fullWidth center">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="large-12 cell">
							<h3><?php the_field('paragraph_headline'); ?></h3>
							<p><?php the_field('paragraph_body'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <div class = "frontpage-counter">
        <div class="grid-container center">
            <div class="grid-x grid-padding-x">
                <div class = "small-12 large-4 cell">
                    <div class = "counter-outer" style="background:linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(<?php the_field('counter_1_image'); ?>) no-repeat center center scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                        <div id="counter">
                            <div class="counter-value" data-count="<?php the_field('counter_1_number'); ?>">0</div>
                            <div class="counter-tagline"><?php the_field('counter_1_category'); ?></div>
                        </div>
                    </div>
                    <h4 class="counter-header"><?php the_field('counter_1_headline'); ?></h4>
                    <p class = "people-group-desc"><?php the_field('counter_1_paragraph'); ?></p>
                </div>


                <div class = "small-12 large-4 cell">
                    <div class = "counter-outer" style="background:linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(<?php the_field('counter_2_image'); ?>) no-repeat center center scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                        <div id="counter">
                            <div class="counter-value" data-count="<?php the_field('counter_2_number'); ?>">0</div>
                            <div class="counter-tagline"><?php the_field('counter_2_category'); ?></div>
                        </div>
                    </div>
                    <h4 class="counter-header"><?php the_field('counter_2_headline'); ?></h4>
                    <p class = "people-group-desc"><?php the_field('counter_2_paragraph'); ?></p>
                </div>

                <div class = "small-12 large-4 cell">
                    <div class = "counter-outer" style="background:linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(<?php the_field('counter_3_image'); ?>) no-repeat center center scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                        <div id="counter">
                            <div class="counter-value" data-count="<?php the_field('counter_3_number'); ?>">0</div>
                            <div class="counter-tagline"><?php the_field('counter_3_category'); ?></div>
                        </div>
                    </div>
                    <h4 class="counter-header"><?php the_field('counter_3_headline'); ?></h4>
                    <p class = "people-group-desc"><?php the_field('counter_3_paragraph'); ?></p>
                </div>
            </div>
        </div>
    </div>


<div class = "frontpage-contact" style="background: linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, 0.45)), url(<?php the_field('homepage_footer_background_image'); ?>) no-repeat center center;background-attachment: scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
	<div class="grid-container fullWidth center">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="large-12 cell">
							<h3><?php the_field('homepage_footer_headline'); ?></h3>
							<a class = "ff dark1" href = "<?php the_field('homepage_footer_button_link'); ?>"><?php the_field('homepage_footer_button_text'); ?><i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php get_footer();
