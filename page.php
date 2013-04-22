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

<?php while ( have_posts() ) : the_post(); ?>

<!-- MAIN CONTENT -->	
<div id="wrapper-page-content" class="max990-centered">
		<div class="box-inner clearfix">
			<!-- FEED -->
			<div id="collection-heading" class="border-bottom column full-span clearfix">
				<h3 class="upper"><?php the_title(); ?></h3>
			</div>
			<div class="column full-span">
				<div class="wrapper-feedlist">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>

</div><!-- /box-inner -->
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>