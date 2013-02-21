<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="boxy col2">	
	<?php if (get_post_meta($post->ID, 'drawing_thumbnail', true)) : ?>

		<span class="overlay"></span>
		<span class="label"><?php the_title(); ?></span>
		<?php $drawing_thumb = get_post_meta($post->ID, 'drawing_thumbnail', true);
		$attributes = array ( 'alt' => $post->post_title, 'title' => $post->post_title );
		print wp_get_attachment_image( $drawing_thumb, array ( 176, 144 ), FALSE, $attributes );
		?>

	<?php endif; ?>
</a>