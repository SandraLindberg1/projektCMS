<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title();
        the_excerpt();
        

    endwhile; else: ?>
    <p>Sorry no posts.</p>
<?php
endif;


get_footer();
?>