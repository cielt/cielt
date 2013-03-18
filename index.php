<?php
/**
* The main template file
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file 
*
* Please see /external/starkers-utilities.php for info on get_template_parts()
*
* @package 	WordPress
* @subpackage 	Cielt
* @since 		cielt 0.1
*/
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ): ?>
<!-- main content area -->

<div id="wrapper-page-content" class="max990-centered">
	<div class="box-inner clearfix">
			<!-- WORK -->	
			<div id="work-col" class="column">
				<h3 class="upper"><a href="index.php?page_id=2">Work</a></h3>
				<!-- FEED -->
				<div class="wrapper-feedlist">
					<ol class="feedlist thumbnail-list clearfix">
					<?php 
					$args = array(
						'meta_key' => 'project_date',
						'orderby' => 'meta_value', 
						'order' => 'DESC',
						'post_type' => 'folio_project', 
						'posts_per_page' => 10 
					);
					$folio_query = new WP_Query( $args );
					while ($folio_query->have_posts()) : $folio_query->the_post();
						$do_not_duplicate[] = $post->ID ?>
						<?php get_template_part( 'tile', get_post_type() ); ?>
					<?php endwhile; ?>
					</ol>
				</div>
		<a href="index.php?page_id=2" class="link-bar easy-trans">portfolio</a>

	</div><!-- /column -->

<!-- WRITING -->	
<div id="writing-col" class="column">
	<?php rewind_posts(); ?>
	<!-- FEED -->
	<h3 class="upper"><a href="index.php?page_id=9">Writing</a></h3>
	<?php 
		$writing_args = array( 'post_type' => 'post', 'category_name' => 'writing', 'posts_per_page' => 10 );
		$writing_query = new WP_Query( $writing_args );
	?>
		<div class="wrapper-feedlist">	
			<ol class="feedlist headline-list clearfix">
			
				<?php while (have_posts()) : the_post(); ?>
			
					<?php get_template_part( 'listing', get_post_type() ); ?>
			
				<?php endwhile; ?>
			</ol>
		</div>	
	<a href="index.php?page_id=9" class="link-bar easy-trans">writing</a>
</div><!-- /column -->

<?php else: ?>
	<p>No posts to display</p>
<?php endif; ?>

</div><!-- /box-inner -->
</div><!-- /#wrapper-page-content -->
</div><!-- /#wrapper-main -->

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>