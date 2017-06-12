<?php 
$post_id = 114;
$post = get_post($post_id);
?>

<section id="clientes">

	<h2><?php homeTitle(get_the_title($post_id)); ?></h2>

	<div class="content">
		<?php
		$content = $post->post_content;
		echo $content;
		?>
	</div>

</section>