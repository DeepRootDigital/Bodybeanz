<?php include 'new-hp.php'; ?>
<div class="slider">
	<div class="container">
		<div class="slides">
			<div class="slide-1">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slide-1.png">
			</div>
			<div class="slide-2">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slide-2.png">
			</div>
		</div>
	</div>
</div>
<div class="content">
	<div class="container">
		<a href="http://bodybeanz.com/our-formulas/"><img class="banner" src="<?php echo get_template_directory_uri(); ?>/images/banner.png"></a>
		<div class="box-wrap">
			<div class="box">
				<a href="http://bodybeanz.com/learn-more/"><img src="<?php echo get_template_directory_uri(); ?>/images/promo-back.png"></a>
			</div>
			<div class="box">
				<h2>People <span>Like</span> Us</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/images/quote-hr.png">
				<div class="testimonial-area">
					<div class="testimonial-wrap">
						<div class="testimonial-quote">
							<p>"I was looking quite extensively for multiple daily supplements that were of honest quality, vegan, affordable and that I could take in only a few pills a day. I received a gift that came with a Body Beanz coupon and found exactly what I needed. In one cute, little packet every morning, I get my omegas, antioxidants, probiotics, and help in metabolizing fats and sugars, in just six easy-to-swallow, don't-leave-an-awful-taste-in-your-mouth pills. THANK YOU Body Beanz for being perfect, convenient, energizing - and affordable!"
								<br/><b>Angela Rossi - Billerica, MA.</b>
							</p>
						</div>
						<div class="testimonial-quote">
							<p>I tried Body Beanz expecting them to be just like all other vitamins. I was pleasantly surprised to find they're NOT. I feel so much better and I believe they have helped in my weight loss goals as well. I highly recommend these to anyone looking for an all natural vitamin. The customer service is fantastic and very personalized which is a nice change of pace.
								<br/><b>Michelle Rezulak - Forreston, IL.</b>
							</p>
						</div>
						<div class="testimonial-quote">
							<p>I just wanted to take a moment to thank you for making such a wonderful product. I've only been using BodyBeanz for about a week, but I can already feel a difference. I feel awake throughout the day without the caffeine jitters and crash. I feel great about the product being all natural and the daily pouches are so much more convenient than using several bottles, especially when I travel for work. I'm proud to have family members looking into adding the product to their lives. 
								Thank you again. 
								<br/><b>Stephanie Elko - Burleson, TX.</b>
							</p>
						</div>
					</div>
				</div>
					<!--
						Placeholder for future update
					<div class="quote-nav">
						<span class="">Read more</span>
						<span>2</span>
						<span>3</span>
						<span>4</span>
					</div> 
				-->
			</div>
			<div class="box">
				<a href="http://bodybeanz.com/about-us/"><img class="portrait" src="<?php echo get_template_directory_uri(); ?>/images/scott.png"></a>
				<p><b>I WAS AT A WELLNESS CONFERENCE IN EARLY 2012...</b></p>
				<p>Speaker after speaker got up on stage in front of a few thousand attendees in Orange County, CA and wowed me with fascinating facts, figures, and stories...<br/> [<a href="http://bodybeanz.com/about-us/"> read full story </a>]</p>
			</div>
		</div>
		<div class="center-wrap">
			<div class="video">
				<iframe src="//player.vimeo.com/video/69434445" width="800" height="595" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<div class="longbox">
				<h3><span>Free</span> Helpful Printable Grocery Guide</h3>
				<hr/>
				<div class="button-clear">
					<img class="book" src="<?php echo get_template_directory_uri(); ?>/images/book.png">
					<p>"<span>10 chemical food ingredients</span> you must
						<span class="o">avoid</span> at the grocery store... and why!"</p>
					</div>
					<button><a class="tooltip" title="Coming Soon">Yes, Give me the Cheat Sheet</a></button>
				</div>
				<div class="longbox">
					<div class="half">
						<h4>Popular <span>Stuff to read</span></h4>
						<hr/>
						<ul>
							<li><span>If you only knew what was in your vitamins.</span></li>
							<li><span>Yes superfood vitamins are better, here's why.</span></li>
						</ul>
						<img src="<?php echo get_template_directory_uri(); ?>/images/clickme.png">
					</div>
					<img class="v-divider" src="<?php echo get_template_directory_uri(); ?>/images/vertical.png">
					<div class="half">
						<h4><span>Blog</span> goodness</h4>
						<hr/>
						<ul><?php query_posts('posts_per_page=3'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>