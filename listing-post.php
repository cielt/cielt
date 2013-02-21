<li>
<?php if ((is_tag( ) || is_category())  || is_search()){  
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
		<time datetime="<?php the_time( 'M-d-Y' ); ?>" pubdate class="cal-time">
			<span class="cal-month"><?php echo(get_the_time('M')); ?></span>
			<span class="cal-day"><?php echo(get_the_time('d')); ?></span>
			<span class="cal-year"><?php echo(get_the_time('Y')); ?></span>
		</time>
		
		<div class="post-details clearfix">
			<div class="headline">
			<h4><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>	
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(); ?>
				</a>
			<?php endif; ?>
			</div>
		
			<div class="preview-text"><?php the_excerpt(); ?></div>
		</div>
	</article>
</li>