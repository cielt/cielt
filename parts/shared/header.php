
<header id="page-header">
	<div class="overlay"></div>
	<div id="fishy" class="clearfix">
		<h1><a id="ring-fishy" class="row-box tagline" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="description clearfix">
			<span class="part1">born</span>
			<span class="part2"><?php bloginfo( 'description' ); ?></span>
		</div>
	</div>
	<!-- localhost :  index -->
	<div id="wrapper-header-utils" class="max990-centered clearfix">	
	<!-- global nav -->
		<div id="wrapper-global-nav" class="clearfix">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		<div id="wrapper-search">
			<?php get_search_form(); ?>
		</div>
		
	</div>
<!-- stripy -->
<div class="" id="anchor-strip-top"></div>
</header>

<!-- marquee thing -->
<?php 
	if ( is_home() ) {
    // homepage
		get_template_part( 'parts/shared/marquee', 'home' );
	} else {
    // other pages
		get_template_part( 'parts/shared/marquee', 'page' );
	}
?>

<!-- BEGIN MAIN -->
<div id="wrapper-main">
<!-- callouts / ticker-->
<?php 
	if ( is_home() ) {
    // homepage
		get_template_part( 'parts/shared/callouts', 'home' );
	} else {
    // other pages
		get_template_part( 'parts/shared/callouts', 'work' );
	}
?>