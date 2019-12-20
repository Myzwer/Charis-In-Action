<?php
/**
* Template Name: About Page
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
<div class = "about-header">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2>About Us</h2>
                    <hr>
                    <h3>We have a mission statement and it goes here.</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- This is the top hero section with the about copy and the 2 side image links. -->
<div class="grid-container about_hero"> 
    <div class="grid-x grid-margin-x">
        <div class="small-12 large-8 cell about_bio">
            <div class = "inner-bio">
                <p>
                Charis in Action was founded by Dr. Todd Stewart in 2014 to support external ministries outside the local church.  Charis is the Greek word for grace, God's undeserved favor that He provides for mankind. Charis in Action equips disciples of Jesus to both share and demonstrate the love of Jesus Christ. It is literally God's grace in action throughout the world. The foundation of everything we do is rooted in the Great Commission: “Go and make disciples of all nations” Matthew 28:19.  It is our passion to make Jesus known to every nation, tribe, people, and language.  Therefore, we partner with, equip, and send missional servants to faithfully carry out the Great Commission.  We believe the local church is the primary biblical sending organization.  However, some churches and church leaders do not understand or embrace this commitment.  We want to help followers of Jesus have a pathway to engage in the global mission of God.  

                </p>
            </div>
        </div>

        <div class="small-12 large-4 cell about_images">
            <div class="grid-container fullWidth"> 
                <div class="grid-x grid-margin-x">
                     <div class="small-12 medium-6 large-12 cell">
                        <a href = "http://charisinaction.org/directors">
                            <div class = "about-card-outer">
                                <div class = "about-card-inner">
                                    <div class = "about-card-overlay">
                                    <h3 class="headline">
                                        <span>Our Directors</span>
                                    </h3>
                                    </div>
                                    <img src="https://images.unsplash.com/photo-1505562130589-9879683e72da?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="small-12 medium-6 large-12 add-padding cell">
                        <a href = "http://charisinaction.org/partners">
                            <div class = "about-card-outer">
                                <div class = "about-card-inner">
                                    <div class = "about-card-overlay">
                                    <h3 class="headline">
                                        <span>Our Partners</span>
                                    </h3>
                                    </div>
                                    <img src="https://images.unsplash.com/photo-1465533403411-0af6ede250dd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="">
                                </div>
                            </div>
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid-container about_hero"> 
    <div class="grid-x grid-margin-x">
        <div class="small-12 medium-5 large-4 cell">
            <div class="contact-card">
                <p>
                    <span class = "underline">
                        <span>123 456 7890</span>
                    </span>

                    <span class = "underline">
                        <span>todd@charisinaction.org</span>
                    </span>

                    <span class = "underline">
                        <span>charisinaction.org</span>
                    </span>
                </p>

                <p>
                    <span class = "underline">
                        <span>42 Wallaby Way</span>
                    </span>

                    <span class = "underline">
                        <span>Sydney, Australia</span>
                    </span>
                </p>

                <p>
                    <span class = "underline">
                        <span>Contact Us</span>
                    </span>

                    <span>
                    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                </span>
                </p>
            </div>
        </div>
        
        <div class="small-12 medium-7 large-8 cell">
            <div class = "about-contact-photo">
            </div>
        </div>
    </div>
</div>





<?php get_footer();