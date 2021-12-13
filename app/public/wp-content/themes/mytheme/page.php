<!-- About us  -->
<?php
get_header();
?>
<!-- <h1><?php the_title() ?></h1> -->
<?php get_template_part('/includes/section','content'); ?>
<?php
$about_title = get_field('about_title');
$about_description = get_field('about_description');
$about_getImage = get_field('about_image');
$about_image = $about_getImage['sizes']['large'];
?>

<p><?php echo nl2br($about_description); ?></p>
<img class="img-fluid hero-img" src="<?php echo $about_image; ?>">
<?php var_dump(get_field('about_background')); ?>

<?php
get_footer();