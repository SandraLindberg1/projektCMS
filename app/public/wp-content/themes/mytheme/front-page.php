<!-- home page -->
<?php get_header();
?>


<!-- <h1><?php the_title() ?></h1> -->
<?php get_template_part('/includes/section','content'); ?>

<?php
$title = get_field('title');
$description = get_field('description');
$getImage = get_field('background');
$image = $getImage['sizes']['large'];
?>

<h1><?php echo nl2br($description); ?></h1>
<img class="img-fluid hero-img" src="<?php echo $image; ?>">
<!-- <?php var_dump(get_field('background')); ?>

<?php
get_footer();
