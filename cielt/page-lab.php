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

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header-min') ); ?>
<script type="text/javascript">
var siteURL = '<?= site_url(); ?>';
</script>
<script type="text/javascript" src="<?= get_bloginfo("template_url"); ?>/js/lab.js"></script>
<div id="wrapper-main" class="min-layout">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!-- MAIN CONTENT -->	
<div id="wrapper-page-content" class="max960-centered">

	<div id="wrapper-lab" class="box-inner clearfix">
	<!-- ribbon marker -->	
		<div id="ico-lab" class="ribbon-ico"><span class="ico">lab<span></div>
		
		<h3 class="upper">Welcome to the Lab</h3>
		<p>This is where i collect drafts of things i&rsquo;m working on; please view frame source to see code.  Canvas and CSS3 experiments work best in <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome</a> or <a href="http://www.apple.com/safari/" target="_blank">Safari</a>.</p> 
		
		<!-- IDEAS -->	
		<div id="demo-ideas" class="section">
			<h3 class="ribbon-header">Experiments</h3>
			
			
			<!-- MENU -->
			<div id="wrapper-menu-ideas" class="wrapper-section">
				<ul id="menu-list-experiments" class="clearfix">
					<li><a id="colorbook" name="colorbook" href="colorapp.html" frameh="640">color book</a></li>
					<li><a id="lanthanides" name="lanthanides" href="lanthanides.html" frameh="480">lanthanides</a></li>
					<li><a id="canvas-bubbles" name="canvas-bubbles" href="canvas-bubbles.html" frameh="312">canvas : bubbles</a></li>
					<li><a id="canvas-rings-0" name="canvas-rings-0" href="canvas-rings-0.html" frameh="540">canvas : rings 0</a></li>
					<li><a id="canvas-rings-1" name="canvas-rings-1" href="canvas-rings-1.html" frameh="540">canvas : rings 1</a></li>
					<li><a id="canvas-rings-2" name="canvas-rings-2" href="canvas-rings-2.html" frameh="540">canvas : rings 2</a></li>
				</ul>
			</div>
			<div class="wrapper-section" id="wrapper-frame-ideas">
				<iframe id="frame-ideas" name="frame-ideas" 
				src="" width="912" height="100" frameborder="0" scrolling="auto"></iframe>
			</div>

		</div>
		
		
		
		
		<div class="wrapper-current-controls clearfix">
		<div class="controls ctrls-left">
		</div>
			<div class="ur-here"><span class="before"></span><?php the_title(); ?><span class="after"></span></div>
			<div class="controls ctrls-right"></div>
		</div>
		<?php endwhile; ?>
	</div>
	
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/html-footer') ); ?>
