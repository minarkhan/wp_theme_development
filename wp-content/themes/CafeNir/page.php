<?php get_header( ); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        
        the_post_thumbnail();
        the_title();
        the_content();
        the_permalink();
        the_excerpt();
        the_category();
        the_ID();
        the_tags();
        the_author();
        the_date();
        the_time();
        echo "<br>";

    endwhile;
else :
    echo 'Sorry, no pages were found.', 'textdomain';
endif;



?>
<?php get_footer( ); ?>