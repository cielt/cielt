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
<div id="wrapper-main">
<!-- marquee thing -->
<div id="box-marquee">
	<div class="max960-centered">
		<span class="deco-corner tl"></span>
		<span class="deco-corner tr"></span>
		<span class="deco-corner bl"></span>
		<span class="deco-corner br"></span>

		<div class="splashy clearfix">
			<div id="welcome-message">
				<h1 class="holla">Hello There.</h1>
				<p>This is the personal website of cielt. Based in New York, I love design, literature, and music, follow environmental issues, science and technology and love making things.  <em>Thanks for visiting!</em></p>
			</div>


			<div id="directory">
				<!-- list categories here -->
				<p><em>i think about these things all day:</em></p>
				<ul class="list-topics ico-list">
					<li><a href="" class="science">nature &amp; science</a></li>
					<li><a href="" class="technology">technology</a></li>
					<li><a href="" class="music">music</a></li>
					<li><a href="" class="energy">renewable energy</a></li>
					<li><a href="" class="sports">sports</a></li>
					<li><a href="" class="books">books</a></li>
					<li><a href="" class="art">art &amp; design</a></li>
				</ul>
			</div>
		</div><!-- /splashy -->
	</div>
</div><!-- /#box-marquee -->

<!-- features -->
<div class="band-callouts">
	<div id="wrapper-callouts" class="max960-centered clearfix">
		<div class="callout">
			<h3>About This</h3>
			<div class="callout-content">
				<p>CLT is a web designer and developer living and working in <a href="">New York City</a>.</p>	
			</div>
		</div>
		<div class="callout">
			<h3>Drawing of the Day</h3>
			<div class="callout-content frame-image">
				<a href="" class="thumbnail"><img src="<?php bloginfo( 'template_url' ); ?>/images/thumbnails/thumb_mauswriting.png" /></a>
				<a class="caption"><span class="overlay"></span><span href="" class="label">Waiting at the Airport</span></a>
			</div>	
		</div>
		<div class="callout last">
			<h3>Fact of the Day</h3>
			<div class="callout-content">
				<p><strong>436 species</strong> of owl, vole, mouse and bear live in the Ural mountains.</p> <a href="" class="link-more">Learn more &#187;</a>
			</div>	
		</div>
	</div>
</div>

<!-- main content area -->

<div id="wrapper-page-content" class="max960-centered">
	<div class="box-inner clearfix">

<!-- WORK -->	
	<div class="column leftcol">
	<!-- FEED -->
	<?php if ( have_posts() ): ?>
		<h2>Work</h2>
		<p>My most recent work.</p>

		<ol class="feedlist thumbnail-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<article>
						<h4><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
						<?php the_content(); ?>
					</article>
				</li>
				<?php endwhile; ?>
			</ol>

			<?php else: ?>
				<h2>No posts to display</h2>
				<?php endif; ?>
		</div><!-- /column.left -->
		
<!-- WRITING -->	
	<div class="column rightcol">
	<!-- FEED -->
	<?php if ( have_posts() ): ?>
		<h2>Work</h2>
		<p>My writing on various topics.</p>

		<ol class="feedlist headline-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<article>
						<h4><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
						<?php the_content(); ?>
					</article>
				</li>
				<?php endwhile; ?>
			</ol>

			<?php else: ?>
				<h2>No posts to display</h2>
				<?php endif; ?>
		</div><!-- /column.right -->
				

			</div><!-- /box-inner -->
		</div><!-- /#wrapper-page-content -->
	</div><!-- /#wrapper-main -->

	<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>