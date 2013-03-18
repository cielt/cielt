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
				<div id="collection-heading" class="border-bottom column full-span"><h3 class="upper"><?php the_title(); ?></h3></div>

					<div class="box-content clearfix">
						<div class="wrapper-feedlist">
							<div class="column">
								<p class="greek-verse emphatic">&omicron;&iota; &mu;&epsilon;&nu; &iota;&pi;&pi;&eta;&omega;&nu; &sigma;&tau;&rho;&omicron;&tau;&omicron;&nu; &omicron;&iota; &delta;&epsilon; &pi;&epsilon;&sigma;&delta;&omega;&nu;<br/>
									&omicron;&iota; &delta;&epsilon; &nu;&alpha;&omega;&nu; &phi;&alpha;&iota;&sigma;&rsquo; &epsilon;&pi;&iota; &gamma;&alpha;&nu; &mu;&epsilon;&lambda;&alpha;&iota;&nu;&alpha;&nu;<br/>
									&epsilon;&mu;&mu;&epsilon;&nu;&alpha;&iota; &kappa;&alpha;&lambda;&lambda;&iota;&sigma;&tau;&omicron;&nu; &epsilon;&gamma;&omega; &delta;&epsilon; &kappa;&eta;&nu;&rsquo; &omicron;&tau;-<br/>&tau;&omega; &tau;&iota;&#962; &epsilon;&rho;&alpha;&tau;&alpha;&iota; &#8226;</p>
								</div><!-- /column -->

								<!-- EN -->	
								<div class="column">
									<p class="emphatic">A host of horsemen, some say, is the prettiest sight<br/> 
										upon the black earth; some say an army<br/> 
										of foot soldiers; some, a fleet of ships, but I say<br/>
										it&rsquo;s whatever one loves.</p>
									</div><!-- /column -->
					
								<div class="column full-span">
									<div class="caption clearfix">
										<address class="quote-author">&mdash; &Sigma;&alpha;&pi;&phi;&omega; (Sappho), <em>Fragment 16</em></address>
									</div>
								</div>
								</div><!-- /wrapper-feedlist -->
							</div><!-- /box-content -->

							<div class="column full-span"><div class="spacer-v hairline"><span class="graphic tackle"></span></div></div>
							<!-- bio, etc. -->	
							<div class="box-content clearfix">		
								<div class="wrapper-feedlist">	
									<div class="column x-skinny"><h4>Contact</h4>
										<address><a href="mailto:hello@lesinteresting.com">hello@lesinteresting.com</a></address>
										<div class="frame-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clt.jpg" alt="" title="" /></div>
									</div>

									<div class="column x-skinny">
										<h4>Milestones</h4>
										<p><em>coming soon.</em></p>
										<ol class="personal-history">
											<li>
												<div class="box-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drawing_hamburgerswing.png" /></div>
												<h6><span class="year">2002</span> accumulates numerous drawn-on chopstick wrappers from dining out with extended family (<em>above:</em> hamburger on a swing)</h6>
											</li>

											<li>
												<div class="box-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drawing_lyre.png" /></div>
												<h6><span class="year">2000</span> spends spring term in Athens, Greece</h6>
											</li>
											<li>
												<div class="box-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drawing_rwaorzilla.png" /></div>
												<h6><span class="year">2007</span> moves to NYC on Bastille Day</h6>
											</li>

										</ol>
									</div>

									<div class="column">
										<h4>Bio</h4>
										<?php the_content(); ?>


									</div><!-- /column -->
								</div><!-- /wrapper-feedlist -->
							</div>
						<?php endwhile; ?>
					
				</div>
			</div><!-- /#wrapper-page-content -->	
		</div><!-- /wrapper-main -->
		<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>