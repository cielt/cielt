<?php
/**
* Search results page
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
		<?php if ( have_posts() ): ?>

			<span class="link-ribbon">search results</span>
			<div id="collection-heading" class="border-bottom column full-span">
				<h3><?php echo get_search_query(); ?></h3>
			</div>


			<!-- writing results -->
			<div class="column full-span">
				<div class="wrapper-feedlist">

				<ol class="feedlist headline-list clearfix">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'listing', get_post_type() ); ?>
					<?php endwhile; ?>
				</ol>
			</div><!-- /wrapper-feedlist -->
		</div>
		
		<div class="column full-span">
			<div class="wrapper-current-controls clearfix">	
			<!-- older / newer entries -->	
			<?php next_posts_link('&laquo; older entries') ?>
			<?php previous_posts_link('more recent entries &raquo;') ?>
		</div><!-- /wrapper-current-controls --></div>			

		<?php else: ?>
			<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
		<?php endif; ?>
	</div><!-- /box-inner -->
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>