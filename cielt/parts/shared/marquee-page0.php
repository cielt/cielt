<div id="box-marquee">
	<div class="max960-centered">
		<div class="deco-bounding">
			<span class="deco-corner tl"></span>
			<span class="deco-corner tr"></span>
			<span class="deco-corner bl"></span>
			<span class="deco-corner br"></span>

		<div class="splashy clearfix">
			<div id="welcome-message">
				<h1 class="holla"><?php the_title(); ?></h1>
				<!-- page intro text -->
				<?php
					$page_intro = get_post_meta($post->ID, 'intro_text', true);
					echo $page_intro;
				?>
				
			</div>

			<div id="directory">
				<!-- list categories here -->
				<p><em>i think about these things all day:</em></p>
				<ul class="list-topics ico-list">
					<li><a href="" class="science">nature &amp; science</a></li>
					<li><a href="" class="technology">technology</a></li>
					<li><a href="" class="music">music</a></li>
					<li><a href="" class="energy">renewable energy</a></li>
					<li><a href="" class="books">books</a></li>
					<li><a href="" class="art">art &amp; design</a></li>
				</ul>
			</div>
		</div><!-- /splashy -->
		</div>
	</div><!-- /max960 -->
</div><!-- /#box-marquee -->