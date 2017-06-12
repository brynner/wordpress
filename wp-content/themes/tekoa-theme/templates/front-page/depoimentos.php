<?php 
$post_id = 90;
$post = get_post($post_id);
?>

<section id="depoimentos">

	<h2><?php homeTitle(get_the_title($post_id)); ?></h2>

	<?php echo do_shortcode('[sp_testimonials_slider]'); ?>

</section>