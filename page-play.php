<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
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
		<!-- FEED -->
		<div id="collection-heading" class="border-bottom column full-span">
			<h3 class="upper"><?php the_title(); ?></h3>
		</div>
		<div class="column full-span">
			<div class="wrapper-feedlist">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args= array(
				'post_type' => array('drawing'),
				'paged' => $paged
				);
				
				$play_query = new WP_Query($args);
				
				if( have_posts() ) : ?>
			
			<!-- thumbnail list -->
			<div id="mosaic" class="clearfix">
				<?php while ( $play_query->have_posts() ) : $play_query->the_post(); ?>
				<?php get_template_part( 'brick', get_post_type() ); ?>
				<?php endwhile; ?>
			</div>	
			<?php endif; ?>
			</div>
		</div>
	</div>
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>