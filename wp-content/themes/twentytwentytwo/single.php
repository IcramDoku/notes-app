<!-- loop through WordPress posts w/ pre-build functions -->
<?php get_header(); ?>
<h1> Titles of post pages: </h1> 
<?php

    while(have_posts()) {
        the_post(); 
        // still in while loop but in html mode now
        ?>
        <h1> This is a POST. </h1>
        <h2> <?php the_title(); ?> </h2>
        <?php the_content(); ?>
        <?php 
    }
    get_footer();
?>