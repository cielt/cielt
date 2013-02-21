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

		<h2><?php the_title(); ?></h2>
		<p><em><?php echo(get_post_meta($post->ID, 'project_tagline', true)); ?></em></p>
		<div class="wrapper-feedlist">
		
			<!-- projects headline list / sidebar -->
			<div class="column leftcol skinny">
				<div class="wrapper-project-info">
					<table class="project-details clearfix">
						<tr>
							<td class="label">subject</td>
							<td class="value"><?php echo(get_post_meta($post->ID, 'subject', true)); ?></td>
						</tr>
						<tr>
							<td class="label">began</td>
							<td class="value"><?php
								$start_date = date('j F, Y', strtotime(get_post_meta($post->ID, 'drawing_start_date', true))); 
								echo($start_date); ?>
							</td>
							
						
						</tr>
						<tr>	
							<td class="label">tags</td>
							<td class="value"><?php the_tags("", "•"); ?></td>
						</tr>
						<!-- URL, if applicable -->
					<?php $colors = get_post_meta($post->ID, 'color_tags', true);
						if($colors){ 
							echo('<tr><td class="label">colors</td>
							<td class="value">');
							$i = 0;
							foreach ($colors as $color){
								if ($i == 0){
									$sep = '';
								} else {
									$sep = ", ";
								}
								echo($sep . $color );
								$i++;
							}
								
							echo('</td></tr>');
						}
					?>	
					</table>

					<!-- summary -->
					<?php echo(get_post_meta($post->ID, 'drawing_notes', true)); ?>
					
				</div>
			</div>	
			<!-- project detail -->
			<div class="column rightcol wide">
				<div class="box-content">
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