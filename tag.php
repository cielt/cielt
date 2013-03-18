<?php
/**
* The template used to display Tag Archive pages
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
		<?php 
	if (is_tag( )) {
		$tag = get_query_var('tag');

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args= array(
			'post_type' => array( 'post', 'folio_project', 'drawing' ),
			'tag' => $tag,
			'paged' => $paged,
			'posts_per_page' => 10
			);

			$tag_query = new WP_Query($args);
		}
		if( have_posts() ) : ?>	
		<span class="link-ribbon">tag archive</span>
		<div id="collection-heading" class="border-bottom column full-span">
			<h3><?php echo single_tag_title( '', false ); ?></h3>
		</div>


		<!-- writing results -->
		<div class="column full-span">
			<div class="wrapper-feedlist">
			<ol class="feedlist headline-list clearfix">
				<?php while ( $tag_query->have_posts() ) : $tag_query->the_post(); ?>
					<?php get_template_part( 'listing', get_post_type() ); ?>
				<?php endwhile;  wp_reset_postdata(); ?>
			</ol>
		</div><!-- /wrapper-feedlist -->
		</div>
		
		<div class="column full-span">
			<div class="wrapper-current-controls clearfix">	
			<!-- older / newer entries -->	
			<?php next_posts_link('&laquo; older entries', $tag_query->max_num_pages) ?>
			<?php previous_posts_link('more recent entries &raquo;') ?>
		</div><!-- /wrapper-current-controls --></div>

	<?php else: ?>
		<h2>No posts to display in <?php echo single_tag_title( '', false ); ?></h2>
	<?php endif; ?>
</div><!-- /box-inner -->
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>