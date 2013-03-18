<?php
/**
* The Template for displaying single writing posts
*
* Please see /external/starkers-utilities.php for info on get_template_parts()
*
* @package 	WordPress
* @subpackage 	Cielt
* @since 		Cielt 0.1
*/
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<!-- MAIN CONTENT -->	
<div id="wrapper-page-content" class="max990-centered">
	
	<div class="box-inner clearfix">
	
	<!-- category page -->
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	

		<div id="item-heading" class="border-bottom column full-span">	
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="wrapper-feedlist clearfix">
		
			<!-- projects headline list / sidebar -->
			<div class="column x-skinny">
				<div class="wrapper-project-info">
					<table class="project-details clearfix">
						<tr>
							<td class="label">posted</td>
							<td class="value"><?php the_time('j F, Y'); ?> <?php the_time('G:i'); ?></td>
						</tr>
						<tr>
							<td class="label">tags</td>
							<td class="value"><?php the_tags("", "•"); ?></td>
						</tr>
						
					</table>
				
					
					
					<!-- summary -->
					<?php echo(get_post_meta($post->ID, 'project_summary', true)); ?>
					
					
				</div>
			</div>	
			<!-- project detail -->
			<div class="column x-wide">
				<div class="box-content">
					<?php the_content(); ?>
				</div>	
			</div>	
					
		</div><!-- /wrapper-feedlist -->	
		
		<div class="column full-span"><div class="wrapper-current-controls clearfix">
			<div class="controls ctrls-left"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr; %title</span>') ); ?></div>
			<div class="ur-here"><span class="before"></span><?php the_title(); ?><span class="after"></span></div>
			<div class="controls ctrls-right"><?php next_post_link( '%link', __( '<span class="meta-nav">%title &rarr;</span>') ); ?></div>
		</div></div>
		
		<?php endwhile; ?>
	</div><!-- /box-inner -->
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>