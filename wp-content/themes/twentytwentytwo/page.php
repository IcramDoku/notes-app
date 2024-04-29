<!-- loop through WordPress pages w/ pre-build functions -->
<h1> Titles of post pages: </h1> 
<?php

    while(have_posts()) {
        the_post(); 
        // still in while loop but in html mode now
        ?>
        <h1> This is a page. </h1>
        <h2> <?php the_title(); ?> </h2>
        <?php the_content(); ?>
        <?php 
    }

?>