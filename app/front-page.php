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


<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="small-12 large-6 cell frontpage-cards">
			<img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80" alt="">
			<div class = "card_padding">
				<h3 class="decorated center">
					<span>Donate</span>
				</h3>
				<p>Phasellus aliquam mi vitae tincidunt consequat. Morbi mi nunc, ullamcorper at lectus ac, gravida malesuada enim.</p>
				<div class = "button-center">
					<a class = "ff dark1" href = "#">Give to the Mission<i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>

		<div class="small-12 large-6 cell frontpage-cards">
			<img src="https://images.unsplash.com/photo-1553775927-a071d5a6a39a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1578&q=80" alt="">
			<div class = "card_padding">
				<h3 class="decorated center"><span>Blog and Updates</span></h3>
				<p>Suspendisse sed ultricies justo, euismod consectetur turpis. Integer id sollicitudin nulla.</p>
				<div class = "button-center">
					<a class = "ff dark1" href = "#">Stay Up To Date<i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>

		<div class="small-12 cell frontpage-cards">
			<img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1648&q=80" alt="">
			<div class = "card_padding">
				<h3 class="decorated center"><span>Contact</span></h3>
				<p>Suspendisse sed ultricies justo, euismod consectetur turpis. Integer id sollicitudin nulla.</p>
				<div class = "button-center">
					<a class = "ff dark1" href = "#">Get In Touch <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

       
<div class = "frontpage-lower">
	<div class="grid-container fullWidth center">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="large-12 cell">
							<h3>Pellentesque id accumsan tortor. Ut imperdiet nulla sit amet mi suscipit maximus.</h3>
							<p>Aliquam fermentum vehicula diam sit amet pellentesque. Pellentesque nisi felis, varius sit amet sollicitudin vel, finibus at dolor. Quisque tincidunt fringilla ante, vel auctor risus condimentum id. Aliquam mi nulla, porta sit amet odio eget, porta auctor ligula. Aenean lorem nisi, suscipit et efficitur eu, vestibulum vel nulla. Fusce felis eros, hendrerit nec suscipit sed, lobortis ut ante. Donec sit amet tincidunt augue, non lobortis eros. Suspendisse pulvinar nisi ut tellus convallis, id ornare elit pharetra.</p>
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
                    <div class = "counter-outer">
                        <div id="counter">
                            <div class="counter-value" data-count="11730">0</div>
                            <div class="counter-tagline">people groups</div>
                        </div>
                    </div>
                    <h4 class="counter-header">What is a people group?</h4>
                    <p class = "people-group-desc">An ethno-linguistic group with a common self-identity that is shared by the various members. For strategic purposes it is the largest group within which the Gospel can spread without encountering barriers of understanding or acceptance.</p>
                </div>

                <div class = "small-12 large-4 cell">
                    <div class = "counter-outer-2">
                        <div id="counter">
                            <div class="counter-value" data-count="7070">0</div>
                            <div class="counter-tagline">Unreached People Groups</div>
                        </div>
                    </div>
                    <h4 class="counter-header">Why are they Unreached?</h4>
                    <p class = "people-group-desc">A people group is considered unreached (UPG) when there is no indigenous community of believing Christians able to engage this people group with church planting. Technically speaking, the percentage of evangelical Christians in this people group is less than 2 percent.</p>
                </div>

                <div class = "small-12 large-4 cell">
                    <div class = "counter-outer-3">
                        <div id="counter">
                            <div class="counter-value" data-count="3132">0</div>
                            <div class="counter-tagline">Unengaged People Groups</div>
                        </div>
                    </div>
                    <h4 class="counter-header">Who are the Unengaged?</h4>
                    <p class = "people-group-desc">Unreached people groups are unengaged (UUPG) when there is no church planting strategy, consistent with evangelical faith and practice, under way. Gathering believers and planting churches are the keys to establishing an effective and multiplying presence among these people groups.</p>
                </div>
            </div>
        </div>
    </div>


<div class = "frontpage-contact">
	<div class="grid-container fullWidth center">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="large-12 cell">
							<h3>Jesus Reached People. We reach people. You can reach us too.</h3>
							<a class = "ff dark1" href = "#">Contact Us<i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php get_footer();
