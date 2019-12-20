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




<div class="grid-container blog-background">
    <div class="grid-x grid-padding-x">
        <?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                echo "<div class='small-12 large-6 cell'>";
                ?>
                
                <div class = 'blog-card'> 
                <a href = "<?php the_permalink(); ?>">


                <?php
                echo "<div class = 'card-thumbnail'>";
                the_post_thumbnail(); 
                echo "</div>";
                
                echo "<div class='card-cat'>";

                the_tags('', ', ', '<br />');

                echo "</div>";

                echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';

                the_excerpt( '<p class = "blog-excerpt">', '</p>' );


                echo "<div class = 'card-details'>";

                echo "<span class='card-name'>";
                the_author(); 
                echo "</span>";
                echo " | ";

                echo "<span class='card-date'>";
                echo get_the_date();
                echo "</span>";

                
                echo "</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            endwhile; 
        else: 
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
        endif; 
        ?>
    </div>
</div>










</div>







<?php get_footer();
