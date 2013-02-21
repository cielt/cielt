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
			<span class="cal-month"><?php $start_month = date('M', strtotime(get_post_meta($post->ID, 'drawing_start_date', true))); echo($start_month); ?></span>
			<span class="cal-day"><?php $start_day = date('j', strtotime(get_post_meta($post->ID, 'drawing_start_date', true))); echo($start_day); ?></span>
			<span class="cal-year"><?php $start_year = date('Y', strtotime(get_post_meta($post->ID, 'drawing_start_date', true))); echo($start_year); ?></span>
		</time>
<div class="post-details clearfix">
		<div class="headline">
			<h4><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>	
			<?php if (get_post_meta($post->ID, 'drawing_thumbnail', true)) : ?>
				<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="thumb-link">
					<?php $drawing_thumb = get_post_meta($post->ID, 'drawing_thumbnail', true);
					$attributes = array ( 'alt' => $post->post_title, 'title' => $post->post_title );
					print wp_get_attachment_image( $drawing_thumb, array ( 176, 144 ), FALSE, $attributes );
					?>
				</a>
			<?php endif; ?>
		</div>

		<p><?php echo(apply_filters( 'project_summary', wp_trim_words( get_post_meta($post->ID, 'drawing_notes', true), 25, '&hellip;' ) )); ?></p>
		</div>
	</article>
</li>