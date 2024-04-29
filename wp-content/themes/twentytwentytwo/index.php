<?php get_header(); ?>

<?php
    //variables
    echo 'Hello, Wrold! ';
    $author = 'Icram';
    //functions
    function myFirstFunction() {
        echo 3 + 3;
    }
    //call funciton- can call it many itmes too
    myFirstFunction();

    function greet($name, $favoritePet){
        echo "<p> My name is $name. I love my $favoritePet.</p>";
    }
    //call with parameters/arguments
    greet("Icram Doku", "cat")
?>

<p> <?php echo $author; ?> here. Welcome to my first WordPress website! </p>


<!-- name of my website can be found with these existing functions -->
<h1> <?php blogInfo('name'); ?> <h1> 

<h4><?php blogInfo("description"); ?><h4> 


<!-- learn arrays, while loops -->
<?php
    $names = array('Joe', 'Jay', 'Bob');
?>

<p> Hello, the first name in the array list is <?php echo $names[1] ?>. </p>

<?php 
    $count = 1;
    while($count <= 10) {
        echo "<li>$count</lin>";
        $count++;
    }

    $x = 0;
    while($x < count($names)) {
        echo "<li>The names are $names[$x] </li>";
        $x++;
    }
?>


<!-- loop through WordPress posts w/ pre-build functions
moved the bellow loop into single.php since once we click the hyperlink it sends us to that page -->
<h1> Titles of post pages: </h1>
<?php

    while(have_posts()) {
        the_post(); 
        // still in while loop but in html mode now
        ?>
        <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </h2>
        <?php the_content(); ?>
        <hr> 
        <?php 
    }
    get_footer();
?>