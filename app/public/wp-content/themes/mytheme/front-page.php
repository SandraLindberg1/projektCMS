<!-- home page -->
<?php get_header();
?>


    <h1><?php the_title() ?></h1>
<?php get_template_part('/includes/section','content'); ?>

<?php
$title = get_field('title');
$description = get_field('description');
$getImage = get_field('backgrund');
$image = $getImage['size']['large'];
?>

<!-- var_dump(get_field('background')); -->




<img class="img-fluid hero-img" src="<?php echo $image; ?>">

<?php
get_footer();
