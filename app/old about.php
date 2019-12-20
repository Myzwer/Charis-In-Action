<?php
/**
*
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

<div class = "about-header">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <div class = "center">
                    <h2>About Us</h2>
                    <hr>
                    <h3>We are Charis In Action. We live life on mission because that's the way Jesus did it.</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid-container fullWidth about_hero">
    <div class="grid-x grid-margin-x">
        <div class="large-8 cell about_bio">
            <p>
            Aliquam ac nisl vitae ligula faucibus pulvinar. Curabitur enim neque, dignissim viverra est quis, porttitor vestibulum dui. Pellentesque egestas sagittis felis at efficitur. Aliquam hendrerit luctus leo. Nunc arcu metus, facilisis vitae sem at, euismod laoreet quam. Aenean rutrum velit et lectus auctor tristique. Cras nec eleifend tortor. Maecenas tincidunt, nunc ac egestas cursus, enim nulla accumsan mauris, non fermentum felis ligula at massa. Proin leo erat, ullamcorper at nulla id, aliquet eleifend purus. Donec ac maximus sem. Nam pellentesque ex et libero condimentum mollis. Duis vitae tempor turpis.
            </p>
        </div>

        <div class="large-4 cell">
            <div class="grid-x grid-padding-x grid-margin-x grid-margin-y">
                <div class="small-12 cell about_card_2">
                <h4>Our Beliefs.</h4> 
                </div>
                <div class="small-12 cell about_card_3">
                <h4>Our Partners.</h4> 
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer();














.about-header {
  background-color: $bg-2;
  background: url(https://images.unsplash.com/photo-1468912229911-3089a757b813?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80) no-repeat bottom center;
  background-attachment: scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  min-height: 600px;
  position: relative;

  h2 {
    color: $primary;
    font-size: 3em;
    padding-top: .5em;
  }

  h3 {
    color: $primary;
  }
}

@media screen and (min-width: 68em) {
  .about-header {
  background-attachment: fixed;
  }
}

.about_hero {
  margin-top: 30px;
  margin-bottom: 30px;
  // max-width: 1160px;
  max-width: 39.9375em;
}

.about_bio {
  padding: 40px;
  background-color: $secondary;
  // height: 490px;
  margin-bottom: 20px;

  p {
    text-align: justify;
    color: $primary;

  }
}

.about_card_2 {
  background-color: $tertiary;
  background: url(https://images.unsplash.com/photo-1505562130589-9879683e72da?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80) no-repeat top center;
  background-attachment: scroll;
  color: $primary;
  text-align: center;
  padding: 30px;
  // min-height: 230px;

  h4 {
    background-color: black;
    display: inline-block;
    padding: 10px;
    font-size: 2em;
    margin-top: 50px;
  }
}


.about_card_3 {
  background: url(https://images.unsplash.com/photo-1449157291145-7efd050a4d0e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80) no-repeat top center;
  background-attachment: scroll;
  background-color: $dkblue;
  text-align: center;
  color: $primary;
  padding: 30px;
  width: 100%;

  // min-height: 230px;

  h4 {
    background-color: black;
    display: inline-block;
    padding: 10px;
    font-size: 2em;
    margin-top: 50px;
  }
}









