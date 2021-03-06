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
<!-- main content area -->

<div id="wrapper-page-content" class="max990-centered">
	<div class="box-inner clearfix">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php /*(comments_template( '', true );*/ ?>
<?php endwhile; ?>
	</div>
</div><!-- /#wrapper-page-content -->	

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>