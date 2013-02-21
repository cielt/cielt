
<div class="callout row-block">
	<h3>Drawing of the Week</h3>
	<div class="callout-content frame-image">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<?php $drawing_thumb = get_post_meta($post->ID, 'drawing_thumbnail', true);
	$attributes = array ( 'alt' => $post->post_title, 'title' => $post->post_title );
	print wp_get_attachment_image( $drawing_thumb, array ( 336, 252 ), FALSE, $attributes );
	?>
	</a>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="caption"><span class="overlay"></span><span href="" class="label"><?php the_title(); ?></span></a>
	</div>	
</div>