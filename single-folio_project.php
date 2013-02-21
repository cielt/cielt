<?php
/**
* The Template for displaying all single posts
*
* Please see /external/starkers-utilities.php for info on get_template_parts()
*
* @package 	WordPress
* @subpackage 	Cielt
* @since 		Cielt 0.1
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/showcase.js"></script>

	<div id="wrapper-main">

<!-- MAIN CONTENT -->	
<div id="wrapper-page-content" class="max960-centered">
	
	<div class="box-inner clearfix">
	
	<!-- category page -->
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
			
		<?php 
		$category = get_the_category($post->ID);
		if($category[0]){
			echo '<a class="link-ribbon" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
		} ?>
<!-- prev - here - next -->
		<div class="top-nav-ribbon clearfix">
			<div class="controls ctrls-left"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span>') ); ?></div>
			<div class="current">★</div>
			<div class="controls ctrls-right"><?php next_post_link( '%link', __( '<span class="meta-nav">&rarr;</span>') ); ?></div>
		</div>
	
	
		<h2><?php the_title(); ?></h2>
		<p><em><?php echo(get_post_meta($post->ID, 'project_tagline', true)); ?></em></p>
		<div class="wrapper-feedlist">
		
			<!-- projects headline list / sidebar -->
			<div class="column leftcol skinny">
				<div id="sticky" class="wrapper-project-info">
					<table class="project-details clearfix">
						<tr>
							<td class="label">for</td>
							<td class="value"><?php echo(get_post_meta($post->ID, 'engagement', true)); ?></td>
						</tr>
						<tr>
							<td class="label">date</td>
							<td class="value"><?php
								$project_date = date('F Y', strtotime(get_post_meta($post->ID, 'project_date', true))); 
								echo($project_date); ?>
							</td>

						</tr>
						<tr>	
							<td class="label">tags</td>
							<td class="value"><?php the_tags("", "•"); ?></td>
						</tr>
						<!-- URL, if applicable -->
					<?php $web_url = get_post_meta($post->ID, 'project_url', true);
						$url_text = "";
						
						if($web_url){ 
							if(strlen($web_url)>40){
								$url_text = substr($web_url, 0, 30) . "...";
							} else {
								$url_text = $web_url;
							}
							echo('<tr><td class="label">URL</td>
							<td class="value"><a href="'. $web_url .'" target="_blank">' . $url_text . '</a></td></tr>');
						}
					?>	
					</table>
		
					<!-- summary -->
					<?php echo(get_post_meta($post->ID, 'project_summary', true)); ?>

						<?php 
						$credits = get_post_meta($post->ID, 'credits', true);
						if($credits){ 
							echo('<div class="also-notes border-top"><h5>Additional Notes</h5>'.$credits.'</div>');	
							
						}?>
	
				</div>
			</div>	
			<!-- project detail -->
			<div id="rightcol" class="column rightcol wide">
				<div class="box-content <?php $category = get_the_category(); echo str_replace(" ", "-", $category[0]->cat_name); ?>">
					
					<?php the_content(); ?>
				</div>	
			</div>	
					
		</div><!-- /wrapper-feedlist -->	
		
		<div class="wrapper-current-controls clearfix">
			<div class="controls ctrls-left"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr; %title</span>') ); ?></div>
			<div class="ur-here"><span class="before"></span><?php the_title(); ?><span class="after"></span></div>
			<div class="controls ctrls-right"><?php next_post_link( '%link', __( '<span class="meta-nav">%title &rarr;</span>') ); ?></div>
		</div>
		
		<?php endwhile; ?>

	</div><!-- /box-inner -->
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>