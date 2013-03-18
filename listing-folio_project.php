<li <?php if (is_tag( ) || is_category()){  echo('class="type-marked"'); } ?> >
<?php if (is_tag( ) || is_category() || is_search()){  
	$posttype = get_post_type( $post->ID );
	$postcode = '';
	switch($posttype):
	case 'post':
        $postcode .= 'writing';
        break;

	case 'folio_project':
        $postcode .= 'project';
        break;

	case 'drawing':
        $postcode .= 'drawing';
        break;	
	
    default:
        $postcode .= 'something';
		break;
	
	endswitch;	
	
	echo('<span class="link-ribbon item">' . $postcode . '</span>') ; 
} ?> 
	<article class="clearfix"> 
		<time datetime="<?php the_time( 'M-d' ); ?>" pubdate class="cal-time">
			<span class="cal-month"><?php $project_date_month = date('M', strtotime(get_post_meta($post->ID, 'project_date', true))); echo($project_date_month); ?></span>
			<span class="cal-day"><?php $project_date_day = date('j', strtotime(get_post_meta($post->ID, 'project_date', true))); echo($project_date_day); ?></span>
			<span class="cal-year"><?php $project_date_year = date('Y', strtotime(get_post_meta($post->ID, 'project_date', true))); echo($project_date_year); ?></span>
		</time>

		<div class="post-details clearfix">
			<div class="thumbnail">	
			<?php if (get_post_meta($post->ID, 'project_thumbnail', true)) : ?>
				<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="thumb-link clearfix">
					<?php $project_thumb = get_post_meta($post->ID, 'project_thumbnail', true);
					$attributes = array ( 'alt' => $post->post_title, 'title' => $post->post_title );
					print wp_get_attachment_image( $project_thumb, array ( 176, 144 ), FALSE, $attributes );
					?>
				</a>
			<?php endif; ?>
		</div>

		<div class="info">
			<h4><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
			<p><?php echo(apply_filters( 'project_summary', wp_trim_words( get_post_meta($post->ID, 'project_summary', true), 25, '&hellip;' ) )); ?></p>
		</div>
		</div><!-- /post-details -->
	</article>
</li>