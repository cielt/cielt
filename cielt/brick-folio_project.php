<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="boxy col1">	
	<?php if (get_post_meta($post->ID, 'project_thumbnail', true)) : ?>

		<span class="overlay"></span>
		<span class="label"><?php the_title(); ?></span>
		<?php $project_thumb = get_post_meta($post->ID, 'project_thumbnail', true);
		$attributes = array ( 'alt' => $post->post_title, 'title' => $post->post_title );
		print wp_get_attachment_image( $project_thumb, array ( 176, 144 ), FALSE, $attributes );
		?>
		<div class="strip-category">
		<?php 
			$category = get_the_category($post->ID);
			if($category[0]){
				echo '<span class="ico-category">'.$category[0]->cat_name.'</span>';
		} ?>
		</div>
	<?php endif; ?>
</a>