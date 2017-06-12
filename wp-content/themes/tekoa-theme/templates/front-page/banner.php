<?php 
$post_id = 139;
$post = get_post($post_id);
?>

<section id="banner">
	<div class="shape"></div>
	<div class="content">
		<?php
		$content = $post->post_content;
		echo $content;
		?>
	</div>
</section>