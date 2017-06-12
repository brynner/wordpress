<section id="blog">
	<h2><strong>Blog</strong></h2>

	<div class="row">
		<?php
		$args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'title' );
		$postslist = get_posts( $args );
		foreach ($postslist as $post) : setup_postdata($post); ?>
			<div class="col-sm-12 col-md-4">
				<div class="post">
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>" />
					<h3><?php the_title(); ?></h3>
					<p><?php echo get_excerpt(); ?></p>
					<a href="<?php echo get_permalink($post->ID); ?>" class="btn btn-primary">leia mais</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

</section>