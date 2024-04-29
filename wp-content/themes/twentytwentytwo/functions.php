<!-- private file to deal with css -->

<?php 

    function my_website_files() {
        wp_enqueue_style('my_website_mail_styles', get_stylesheet_uri());
    }

    //call with name of function passed in as second argument
    add_action ("wp_enqueue_scripts","my_website_files");

?>