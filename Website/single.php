<?php get_header(); ?>
<?php $sockoptions = get_option('system_theme_options'); ?>
<div class="container">
	<div class="blog-items">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="blog-post">
			<div class="featured-image">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}  ?>
			</div>
			<h2><?php the_title(); ?></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/images/blog-ribbon.png">
			<?php the_content(); ?>
			<?php comments_template(); ?>
		</div>
	<?php endwhile; endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>