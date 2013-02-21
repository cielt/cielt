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
<div id="wrapper-main">

	<div id="wrapper-page-content" class="max960-centered">
		<div class="box-inner clearfix">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h3 class="upper"><?php the_title(); ?></h3>
			<div class="wrapper-feedlist">
				<div class="box-content clearfix">
					<div class="clearfix"><!-- GR -->	
						<div class="column leftcol">
							<p class="greek-verse emphatic">&Omicron;&iota; &mu;&epsilon;&nu; &iota;&pi;&pi;&omega;&nu; &sigma;&tau;&rho;&omicron;&tau;&omicron;&nu; &omicron;&iota; &delta;&epsilon; &pi;&epsilon;&delta;&omega;&nu;<br/>
								&omicron;&iota; &delta;&epsilon; &nu;&alpha;&omega;&nu; &phi;&alpha;&iota;&sigma;&rsquo; &epsilon;&pi;&iota; &gamma;&alpha;&nu; &mu;&epsilon;&lambda;&alpha;&iota;&nu;&alpha;&nu;<br/>
								&epsilon;&mu;&mu;&epsilon;&nu;&alpha;&iota; &kappa;&alpha;&lambda;&lambda;&iota;&sigma;&tau;&omicron;&nu; &epsilon;&gamma;&omega; 
								&delta;&epsilon; &kappa;&eta;&nu;&rsquo; &omicron;&tau;-<br/>&tau;&omega; &tau;&iota;&#962; &epsilon;&rho;&alpha;&tau;&alpha;&iota;</p>
							</div><!-- /column.left -->

							<!-- EN -->	
							<div class="column rightcol">
								<p class="emphatic">An army of horsemen, or of foot soldiers<br/>
									or a fleet of ships, some say, on the black earth<br/>
									is the most beautiful sight.  But I say it is<br/>
									what one loves.</p>
								</div><!-- /column.rightcol --></div>
								<div class="caption clearfix"><address class="quote-author">&mdash; &Sigma;&alpha;&pi;&phi;&omega; (Sappho), <em>Fragment 16</em></address></div>
							</div><!-- /box-content -->

							<div class="spacer-v hairline"><span class="graphic tackle"></span></div>
							<!-- bio, etc. -->	
							<div class="box-content clearfix">	


								<div class="clearfix"><!-- GR -->	
									
										<div class="column leftcol clearfix">
												<div class="subcol left"><h4>Contact</h4>
											<address><a href="mailto:hello@lesinteresting.com">hello@lesinteresting.com</a></address>
												<div class="frame-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clt.jpg" alt="" title="" /></div>
											</div>
										
											<div class="subcol right">
												<h4>Milestones</h4>
												<p><em>coming soon.</em></p>
												<ol class="personal-history">
													<li>
														<div class="box-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drawing_hamburgerswing.png" /></div>
														<h6><span class="year">2002</span> draws hamburger on a swing with cousins (on chopstick wrapper) while dining at a Chinese restaurant</h6>
													</li>
													
													<li>
														<div class="box-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drawing_lyre.png" /></div>
														<h6><span class="year">2000</span> spends spring term in Athens, Greece; celebrates birthday by dancing on tables at TGI Friday&rsquo;s</h6>
													</li>
													<li>
														<div class="box-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drawing_rwaorzilla.png" /></div>
														<h6><span class="year">2007</span> moves to NYC on Bastille Day</h6>
													</li>
													
												</ol>
											</div>
										</div>
										<div class="column rightcol">
										<h4>Bio</h4>
										<p><em>les interesting</em> is the personal site of leslie tu, a web designer living in Ridgewood, Queens.  I was born in California and grew up in a football-crazed college town nicknamed &ldquo;Happy Valley&rdquo; &mdash; State College, Pennsylvania.  I studied ancient Greek during my undergrad years and would go on to pursue work in the life sciences, &ldquo;information sciences&rdquo;, and, most recently, web design and development.  Language has remained a formative obsession, and my interest in it has helped me in every kind of work.
										</p>
										<p>
											My life pursuits have taken me to Boston, Berkeley, Athens, Greece, and Taipei, Taiwan.  In 2007 I made a dreamed-of move to New York, and have been here ever since.</p>  
											<p>I like to know what people find &ldquo;interesting and exciting&rdquo; and hope that this comprises what they spend all day doing.  For my part, it includes design and technology, and I love that both have untold powers to change the world.  As many can&rsquo;t help doing, I spend inordinate amounts of time online, but try to focus on the concrete goals which the web work enables and enhances.  I also enjoy reading, writing, drawing, and swimming in lakes.</p>   

											<p>Thank you for visiting my site.</p>


						
										</div><!-- /leftcol -->
									</div><!-- /clearfix -->
								</div>
								<?php endwhile; ?>
							</div><!-- /wrapper-feedlist -->
						</div>
					</div><!-- /#wrapper-page-content -->	
				</div><!-- /wrapper-main -->
				<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>