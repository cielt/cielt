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
		<div id="collection-heading" class="border-bottom column full-span clearfix">
			<h3 class="upper"><?php the_title(); ?></h3>
			<p>Selected projects from my portfolio.</p>
		</div>
		<div class="wrapper-feedlist clearfix">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args= array(
					'meta_key' => 'project_date',
					'orderby' => 'meta_value', 
					'order' => 'DESC',
					'post_type' => 'folio_project',
					'posts_per_page' => -1, 
					//'category_name' => '', // Change these category SLUGS to suit your use.
					'paged' => $paged
				);
				//query_posts($args);
				$projects_query = new WP_Query($args);
				if( have_posts() ) : ?>
			<!-- projects headline list / sidebar -->
			<div class="column x-skinny">
				<ol class="feedlist title-roll">
					<?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
					<?php get_template_part( 'listing', get_post_type()."-headline" ); ?>
					<?php endwhile; 
						wp_reset_postdata(); ?>
				</ol>
			</div>
			
			<!-- thumbnail list -->
			<div class="column x-wide">
				<ol class="feedlist thumbnail-list clearfix">
					<?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
					<?php get_template_part( 'tile', get_post_type() ); ?>
					<?php endwhile; ?>
				</ol>
			<?php endif; ?>
			</div>
		</div><!-- /wrapper-feedlist -->
	</div><!-- /box-inner -->
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>