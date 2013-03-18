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
<div id="wrapper-main" class="min-layout">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!-- MAIN CONTENT -->	
<div id="wrapper-page-content" class="max990-centered">

	<div id="wrapper-resume" class="box-inner clearfix">
		<!-- ribbon marker -->	
		<div id="ico-resume" class="ribbon-ico"><span class="ico">lab<span></div>
			<!-- header -->
		<div class="header-document clearfix">
			<div class="column skinny">
				<h1><a href="<?php echo site_url(); ?>">Chia-Yin Leslie Tu</a></h1>
				<h5 class="tagline">web developer &#8226; designer</h5>
			</div>
			
			<div class="column wide clearfix">
				
				<table class="">
					<tr>
						<td><a id="link-home" href="<?php echo site_url(); ?>">back to home</span></a></td>
						<td>
							<table>
								<tr class="address phone"><td><label>phone : </label></td><td>718.753.9032 (m)</td></tr>
								<tr class="address email"><td><label>e-mail : </label></td><td><a href="mailto:chiayin.l.tu@gmail.com">chiayin.l.tu@gmail.com</a></td></tr>
								<tr class="address url"><td><label>folio : </label></td><td><a href="http://lesinteresting.com">http://lesinteresting.com</a></td></tr>
							</table>
						</td>
					</tr>
				</table>
			</div>

		</div>
		<div class="column full-span">
				<div class="spacer-v hairline"><span class="graphic tackle"></span></div>
			</div>
		<div class="wrapper-feedlist no-border">
			
		<!-- edu / skills -->
			<div class="column skinny">
				<div id="wrapper-education" class="history-section">
					<h3 class="header-section upper">Education</h3>
				<ol id="education" class="timeline">
				<!-- MS -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2003</span>
							<span class="end">2005</span>
						</div>
						<div class="thing-done">
							<h5>Pennsylvania State University<br/><span class="location">University Park, PA</span></h5>
							<h4>M.S., Information Sciences &amp; Technology</h4>
						</div>
					</li>
				<!-- BA -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">1997</span>
							<span class="end">2001</span>
						</div>
						<div class="thing-done">
							<h5>Wellesley College <span class="location">Wellesley, MA</span></h5>
							<h4>B.A., Ancient Greek</h4>
							<p class="also"><em>magna cum laude</em>, honors in the major</p>
						</div>
					</li>
				</ol>
				</div>
				<div id="wrapper-skills" class="history-section">
					<h3 class="header-section upper">Skills &amp; Interests</h3>
					<h5>scripting, frameworks</h5>	
					<ul class="bullet-list">
						<li><strong>fluency :</strong> HTML / CSS;</li> 
						<li><strong>working knowledge :</strong> JavaScript (plain, JQuery), HTML5, CSS3, PHP; MODx, WordPress.</li>  
					</ul>
					<h5>CMF / CMS development</h5>	
					<ul class="bullet-list">
						<li>MODx, WordPress</li> 
					</ul>
					<h5>software</h5>	
					<ul class="bullet-list">
						<li><strong>fluency :</strong> Adobe Dreamweaver, Flash, Illustrator, InDesign, Photoshop; Microsoft Word, Excel; PowerPoint.</li> 
					</ul>
				
				<h5>languages</h5>
				<ul class="bullet-list">
					<li><strong>Basic speech, comprehension :</strong> French, Mandarin Chinese;</li> 
					<li><strong>Familiarity :</strong> Ancient Greek, Latin.</li>  
				</ul>	
				
				<h5>hobbies</h5>
				<p>drawing, reading, writing, hiking, swimming in lakes.</p>
				
				
				<h5>community projects <em class="un-bold">(coming soon)</em></h5>
				<ul class="bullet-list">
					<li><h6>Sandy Storyline</h6></li> 
					<li><h6>Ridgewood memory archive</h6></li>  
				</ul>	

				<div class="vspacer">
				</div>
				</div>
				<p>References are available upon request.</p>
				
			
			</div>	
			<!-- experience -->
			<div id="rightcol" class="column wide">
				<div class="history-section">
				<h3 class="header-section upper">Experience</h3>
				<ol id="experience" class="timeline">
				<!-- self -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2012 September</span>
							<span class="end">present</span>
						</div>
						<div class="thing-done">
							<h5>Various Clients <span class="location">New York, NY</span></h5>
							<h4>Freelance Designer / Developer</h4>
							<ul class="deets-list">
								<li>Create site maps, UX / UI wireframes, visual design mock-ups;</li>
								<li>develop UI, build CMS theming & integration;</li>
								<li>deploy, test &amp; optimize post-launch.</li>
							</ul>
						</div>
					</li>
				
				<!-- CF -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2009 November</span>
							<span class="end">2012 August</span>
						</div>
						<div class="thing-done">
							<h5>William J. Clinton Foundation <span class="location">New York, NY</span></h5>
							<h4>Front-End Developer</h4>
							<ul class="deets-list">
								<li>Translated mock-ups into flexible, semantic front-end code;</li>
								<li>worked with team to configure MODx content management framework;</li>
								<li>conducted testing across major browsers throughout development process and post launch;</li>
								<li>supported team in creating graceful website concepts – advising on UX, SEO and client-side performance best practices.</li>
							</ul>
						</div>
					</li>
					
				<!-- TF -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2007 May</span>
							<span class="end">2009 April</span>
						</div>
						<div class="thing-done">
							<h5>Tripfilms <span class="location">New York, NY</span></h5>
							<h4>Web Designer</h4>
							<ul class="deets-list">
								<li>Created UI / UX and visual designs for tripfilms.com & B2B concerns;</li>
								<li>created banners, widgets & in-video assets for Tripfilms & clients;</li> 
								<li>prototyped visual designs in HTML / CSS and Flash (ActionScript 3.0);</li>
								<li>conducted QA / testing on tripfilms.com and B2B projects.</li>
							</ul>
					</div>
					</li>
			<!-- self -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2006 June</span>
							<span class="end">2007 May</span>
						</div>
						<div class="thing-done">
							<h5>Various Clients <span class="location">Princeton, NJ</span></h5>
							<h4>Freelance Web Designer</h4>
							<ul class="deets-list">
								<li>Created site maps, visual design mock-ups;</li>
								<li>coded site pages in HTML / CSS;</li>
								<li>deployed, tested &amp; trained webmasters to maintain;</li>
								please see <a href="<?php echo site_url(); ?>/work">http://lesinteresting.com/work</a> for samples.
							</ul>
						</div>
					</li>
						
			
			<!-- PSU -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2003 September</span>
							<span class="end">2005 August</span>
						</div>
						<div class="thing-done">
							<h5>Pennsylvania State University <span class="location">University Park, PA</span></h5>
							<h4>Graduate Research &amp; Teaching Assistant</h4>
							<ul class="deets-list">
								<li>Assisted faculty with research work, including literature reviews, qualitative data analysis and writing;</li>
								<li>provided support to professors in classroom instruction, website design/maintenance and grading.</li> 
							</ul>
						</div>
					</li>
					
			<!-- Blackwell -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2001 October</span>
							<span class="end">2003 July</span>
						</div>
						<div class="thing-done">
							<h5>Harvard Medical School / Center for Blood Research <span class="location">Boston, MA</span></h5>
							<h4>Research Assistant</h4>
							<ul class="deets-list">
								<li>Conducted molecular biology experiments probing fundamental research inquiries (embryonic development; stress response / aging; germline development) in <em>C. Elegans</em> laboratory;</li>
								<li>managed administrative tasks, including environmental safety monitoring, laboratory organization, procurement;</li> 
								<li>created and maintained Blackwell Lab Web site.</li>
							</ul>

						</div>
					</li>
					<!-- PRO BONO -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2008 January</span>
							<span class="end">present</span>
						</div>
						<div class="thing-done">
							<h5>Various Organizations<span class="location">New York, NY</span></h5>
							<h4>Community Volunteer</h4>
							<p>Provide <em>pro bono</em> design, web and computing support to community organizations in the New York City area, including: <strong>Friends of the Ridgewood Library</strong> (Ridgewood, Queens &mdash; web projects with community youth, web and print design support); <strong>Bed Stuy Campaign Against Hunger</strong> (Bedford-Stuyvesant, Brooklyn &mdash; website, analytics support); <strong>Doc to Dock</strong> (Boerum Hill, Brooklyn &mdash; graphics &amp; CMS assistance); <strong>Sex Workers Project</strong> at the Urban Justice Center (Financial District, Manhattan &mdash; print design).</p>
						
							</ul>
						</div>
					</li>			
										
				
				</ol>
			</div>
			</div>	
		</div><!-- /.wrapper-feedlist -->
	</div>
	
</div><!-- /#wrapper-page-content -->
<?php endwhile; ?>	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/html-footer') ); ?>
