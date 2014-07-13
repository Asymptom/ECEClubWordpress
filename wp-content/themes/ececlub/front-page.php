<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<section class="col-8 col-md-8">
			<div class="post">
				<div id="colorstrip"></div>
				<div class="post-content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				</div>
				<div class="container timestamp">
					Submitted by <?php the_author ?> on <?php the_date('l, F j, Y'); ?>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
</div>

<?php get_footer(); ?>