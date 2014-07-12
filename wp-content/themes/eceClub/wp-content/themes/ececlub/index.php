<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="blog-container">
		<div class="blog-text-container">
			
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
			<?php comments_template( $file, $separate_comments ); ?>
	</section>

<?php endwhile; ?>
<?php get_footer(); ?>