<?php
/**
* The header for my theme
*
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>


<div class="topnav" id="myTopnav">
    <div class = "logo">
        <a href="http://charisinaction.org/">
            <img src = "http://charisinaction.org/wp-content/uploads/2019/09/logo.png" alt = "logo">
        </a>
    </div>

    <div class = "pushypushy">
        <a class = "navpush" href="http://charisinaction.org/about">About Us</a>
        <a href="http://charisinaction.org/about">Take A Trip</a>
        <a href="http://charisinaction.org/partners">Partners</a>
        <a href="http://charisinaction.org/gallery">Gallery</a>
        <a href="http://charisinaction.org/blog">Blog</a>
        <a href="http://charisinaction.org/contact">Contact</a>
        <a href="https://www.paypal.com/us/webapps/mpp/donations">Donate</a>
        <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</div>




<!--<div class="topnav" id="myTopnav">
    <div class = "logo">
        <a href="http://charisinaction.org/">
            <img src = "http://charisinaction.org/wp-content/uploads/2019/09/logo.png" alt = "logo">
        </a>
    </div>

    <div class = "pushypushy">
        <a class = "navpush" href="http://charisinaction.org/about">About Us</a>
        <div class="dropdown">
            <button class="dropbtn">Get Involved
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Special Projects</a>
                <a href="#">Serve With Us</a>
                <a href="#">Take a Trip</a>
                <a href="#">Give Now</a>
            </div>
        </div>
        <a href="http://charisinaction.org/partners">Partners</a>
        <a href="http://charisinaction.org/gallery">Gallery</a>
        <a href="http://charisinaction.org/blog">Blog</a>
        <a href="http://charisinaction.org/contact">Contact</a>
        <a href="https://www.paypal.com/us/webapps/mpp/donations">Donate</a>
        <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</div>-->















<body <?php body_class(); ?>>