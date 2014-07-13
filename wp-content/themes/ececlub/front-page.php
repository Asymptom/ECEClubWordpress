<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<section class="col-8 col-md-8">
			<div class="post">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>

	<?php endwhile; ?>
</div>

<?php get_footer(); ?>