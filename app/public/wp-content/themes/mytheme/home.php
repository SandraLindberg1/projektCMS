<!-- blog page -->

<?php get_header();
?>
<!-- <h1><?php the_title() ?></h1> -->
<?php get_template_part('/includes/section','content'); ?>
<?php
$blog_title = get_field('blog_title');
$blog_description = get_field('blog_description');
?>

<p><?php echo nl2br($blog_description); ?></p>
<?php
get_footer();