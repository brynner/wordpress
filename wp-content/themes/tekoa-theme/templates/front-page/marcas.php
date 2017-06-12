<?php 
$post_id = 136;
$post = get_post($post_id);
?>

<section id="marcas">
	
	<?php
	$content = $post->post_content;
	echo $content;
	?>

</section>