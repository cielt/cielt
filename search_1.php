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
<div id="wrapper-main">

<!-- features -->
<div class="band-callouts">
	<div id="wrapper-callouts" class="max960-centered clearfix">
		<div class="band-ticker">
			<ul class="checkthis-too">
				<li><a href="">something related</a></li>
			</ul>              
		</div>	
	</div>

</div>
<!-- MAIN CONTENT -->	
<div id="wrapper-page-content" class="max960-centered">
	<div class="box-inner clearfix">
		<?php if ( have_posts() ): ?>

			<span class="link-ribbon">search results</span>
			<h2><?php echo get_search_query(); ?></h2>


			<!-- writing results -->
			<div class="wrapper-feedlist">

				<ol class="feedlist headline-list clearfix">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'listing', get_post_type() ); ?>
					<?php endwhile; ?>
				</ol>
			</div><!-- /wrapper-feedlist -->

		<?php else: ?>
			<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
		<?php endif; ?>
	</div><!-- /box-inner -->
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>