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
<div id="wrapper-page-content" class="max960-centered">

	<div id="wrapper-resume" class="box-inner clearfix">
		<!-- ribbon marker -->	
		<div id="ico-resume" class="ribbon-ico"><span class="ico">lab<span></div>
			<!-- header -->
		<div class="header-document wrapper-feedlist no-border no-padding clearfix">
			<div class="column leftcol skinny">
				<h2>Chia-Yin Leslie Tu</h2>
				<h5 class="tagline">web designer &#8226; overanalyzer</h5>
			</div>
			
			<div class="column rightcol wide clearfix">
				<a id="link-home" href="<?php echo site_url(); ?>">back to home</span></a>
				<address class="phone"><label>phone : </label>718.753.9032 (m)</address>
				<address class="email"><label>e-mail : </label><a href="mailto:chiayin.l.tu@gmail.com">chiayin.l.tu@gmail.com</a></address>
				<address class="url"><label>folio : </label><a href="http://lesinteresting.com">http://lesinteresting.com</a></address>
				
			</div>

		</div>
		<div class="wrapper-feedlist no-border">
			<div class="spacer-v hairline"><span class="graphic tackle"></span></div>
		<!-- edu / skills -->
			<div class="column leftcol skinny">
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
				<div class="vspacer"></div>
				</div>
				<p><em>References are available upon request.</em></p>
				
				
			</div>	
			<!-- experience -->
			<div id="rightcol" class="column rightcol wide">
				<div class="history-section">
				<h3 class="header-section upper">Experience</h3>
				<ol id="experience" class="timeline">
				<!-- CF -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2012 September</span>
							<span class="end">present</span>
						</div>
						<div class="thing-done">
							<h5>Various Clients <span class="location">New York, NY</span></h5>
							<h4>Freelance Designer / Developer</h4>
							<ul class="deets-list">
								<li>Working with clients through all stages of designing, developing and deploying websites &mdash; from requirements gathering to concept diagrams / wireframes / mock-ups to building and launching production releases.</li>
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
								<li>Translated static mock-ups into flexible, semantic front-end code;</li>
								<li>conducted testing across major browsers throughout development process and post-launch;</li>
								<li>supported design and communications teams in creating graceful website concepts from site mapping through interface design and user flow, advising on UX, SEO considerations and cross-browser best practices.</li>
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
							<h4>Designer</h4>
							<ul class="deets-list">
								<li>Created all design (wireframes, mock-ups, graphics) assets for tripfilms.com, based on company brand guidelines;</li>
								<li>prototyped final designs in front-end markup (HTML/CSS), and coded Flash UI modules (ActionScript 3.0);</li> 
								<li>conducted QA / testing on tripfilms.com and B2B projects;</li>
								<li>created mock-ups, banners, and other promotional assets for Tripfilms, as well as client concerns.</li>
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
				
				</ol>
			</div>
			</div>	
		</div><!-- /.wrapper-feedlist -->
	</div>
	
</div><!-- /#wrapper-page-content -->
<?php endwhile; ?>	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/html-footer') ); ?>
