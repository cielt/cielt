<div id="secondary-header">
<!-- START feeds -->

<!-- features -->
<div class="band-callouts">
	<div id="wrapper-callouts" class="max960-centered clearfix">
		<div class="callout row-block">
			<h3>About This</h3>
			<div class="callout-content">
					
			</div>
		</div>
	<!-- GET latest drawing -->
		<?php $args = array(
						'post_type' => 'drawing', 
						'cat' => 'drawing-of-the-week',
						'meta_key' => 'drawing_start_date',
						'orderby' => 'meta_value', 
						'order' => 'DESC',
						'showposts' => 1 
				);
				$drawing_query = new WP_Query( $args );
					while ($drawing_query->have_posts()) : $drawing_query->the_post(); $do_not_duplicate[] = $post->ID ?>
						<?php get_template_part( 'callout', get_post_type() ); ?>
				<?php endwhile; ?>
		
		<div class="callout row-block">
			<h3>This is Happening</h3>
			<div class="callout-content">
				
			</div>	
		</div>
	</div>

</div>
</div>