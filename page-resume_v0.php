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
		<div class="header-document">
			<h2>Chia-Yin Leslie Tu</h2>
			<address class="post">
				<span class="street">1854 Madison Street, #1L</span>
				<span class="city-etc">Ridgewood, NY 11385</span>
			</address>
			<address class="phone">718.753.9032 (m)</address>
			<address class="email"><a href="mailto:chiayin.l.tu@gmail.com">chiayin.l.tu@gmail.com</a></address>
			<address class="url"><a href="http://lesinteresting.com">http://lesinteresting.com</a></address>
		</div>
		<div class="spacer-v hairline"><span class="graphic tackle"></span></div>
		<div class="wrapper-feedlist no-border">
						<div class="history-section">
				<h3 class="header-section upper">Education</h3>
				<ol id="education" class="timeline">
				<!-- MS -->	
					<li class="clearfix">
						<div class="date-range">
							<span class="start">2003</span>
							<span class="end">2005</span>
						</div>
						<div class="thing-done">
							<h5>Pennsylvania State University <span class="location">University Park, PA</span></h5>
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
							<h4>B.A., Ancient Greek, <span class="unbold"><em>magna cum laude</em> with honors in the major</span></h4>
						</div>
					</li>
				</ol>
			</div>
			<!-- EXPERIENCE -->
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
								<li>worked with back-end developers to integrate presentation markup and server-side scripting;</li>
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
							<h4>Designer &amp; Front-End Developer</h4>
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
			
		<!-- SKILLZ, INTERESTS -->	
			<div class="history-section">
				<h3 class="header-section upper">Skills &amp; Interests</h3>
				<h5><em>Web Design &amp; Development</em></h5>
				<ul class="bullet-list">
					<li><strong>Web Development :</strong> proficiency in HTML / CSS; working knowledge of JavaScript (plain and with JQuery framework), HTML5, CSS3, PHP;</li> 
					<li><strong>Design :</strong> understanding of responsive design, usability principles, user testing; proficiency in Adobe Creative Suite, including Dreamweaver, Flash (ActionScript 3.0), Illustrator, InDesign, Photoshop;</li> 
					<li><strong>Content Management Frameworks :</strong> working knowledge of MODx (Revolution), WordPress;</li> 
					<li><strong>Also :</strong> proficiency in Microsoft Word, Excel, PowerPoint.</li>
				</ul>
				
				<h5><em>Language</em></h5>
				<ul class="bullet-list">
					<li><strong>Basic speech, comprehension :</strong> Mandarin Chinese;</li> 
					<li><strong>Basic speech, literacy :</strong> French;</li>
					<li><strong>Literacy :</strong> Ancient Greek, Latin.</li>  
				</ul>	
				
				<h5><em>Et Cetera</em></h5>
				<p>Personal interests include : drawing, reading, writing, hiking, swimming in lakes.</p>
			</div>	
			
		</div>
	
		<div class="wrapper-current-controls clearfix">
		<div class="controls ctrls-left"><a href="index.php?page_id=2">&larr; back to work</a></div>
			<div class="ur-here"><span class="before"></span><?php the_title(); ?><span class="after"></span></div>
			<div class="controls ctrls-right"><a href="index.php?page_id=11">on to play &rarr;</a></div>
		</div>
		<?php endwhile; ?>
	</div>
	
</div><!-- /#wrapper-page-content -->	
</div><!-- /#wrapper-main -->
<?php get_template_parts( array( 'parts/shared/html-footer') ); ?>
<?php //get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>