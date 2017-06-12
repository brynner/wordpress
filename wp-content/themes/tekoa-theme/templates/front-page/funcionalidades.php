<?php 
$post_id = 58;
$post = get_post($post_id);
?>

<section id="funcionalidades">

	<h2><?php homeTitle(get_the_title($post_id)); ?></h2>

	<?php
	$content = $post->post_content;
	echo $content;
	?>

</section>