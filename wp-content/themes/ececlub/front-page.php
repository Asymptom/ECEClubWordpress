<?php get_header(); ?>
	
<div class="container">
	<div id="slides">
		<?php

			$query = new WP_Query('category_name=featured');
			if($query->have_posts()){ 
				while($query->have_posts()){
					$query->the_post();		
			?>
			<div class="slide_title">
				<!-- <h1><?php the_title(); ?></h1> -->
				<?php the_post_thumbnail(); ?>
			</div>
			<?php } ?>
		<?php } ?>
	</div>
</div>

<div class="below-header"> 

		<h1> hEr VOLUTION <span>IS TO RAISE AWARENESS AND VALUE PLACED ON STEM EDUCATION FOR GIRLS AND YOUNG WOMEN IN CANADA.</span></h1>
</div>


<section class="main-container">

		<div class="left-info-container">
			<?php

			$query = new WP_Query(array(
				'category_name' => 'engineering',
				'posts_per_page' => 1
			));
			if($query->have_posts()){ 
				while($query->have_posts()){
					$query->the_post();		
			?>
			<div class="post-container">

				<h1>
					<div id="engineering-tag"><img src="<?php echo get_template_directory_uri(); ?>/images/yellow-tag.png"></div>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</h1>
				<p id="subtitle"> By <a href="#"><?php the_author(); ?></a> on <a><?php the_date(); ?></a> under <a href="#">Engineering</a></p>
				<?php the_excerpt(); ?>
				<div class="read-more"><a href="<?php the_permalink() ?>">Read More...</a></div>
			</div>
			<?php } ?>
		<?php } ?>


		<?php

			$query = new WP_Query(array(
				'category_name' => 'science',
				'posts_per_page' => 1
			));
			if($query->have_posts()){ 
				while($query->have_posts()){
					$query->the_post();		
			?>
			<div class="post-container">

				<h1>
					<div id="science-tag"><img src="<?php echo get_template_directory_uri(); ?>/images/green-tag.png"></div>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</h1>
				<p id="subtitle"> By <a href="#"><?php the_author(); ?></a> on <a><?php the_date(); ?></a> under <a href="#">Science</a></p>
				<?php the_excerpt(); ?>
				<div class="read-more"><a href="<?php the_permalink() ?>">Read More...</a></div>
			</div>
			<?php } ?>
		<?php } ?>

		<?php

			$query = new WP_Query(array(
				'category_name' => 'technology',
				'posts_per_page' => 1
			));
			if($query->have_posts()){ 
				while($query->have_posts()){
					$query->the_post();		
			?>
			<div class="post-container">

				<h1>
					<div id="technology-tag"><img src="<?php echo get_template_directory_uri(); ?>/images/blue-tag.png"></div>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</h1>
				<p id="subtitle"> By <a href="#"><?php the_author(); ?></a> on <a><?php the_date(); ?></a> under <a href="#">Technology</a></p>
				<?php the_excerpt(); ?>
				<div class="read-more"><a href="<?php the_permalink() ?>">Read More...</a></div>
			</div>
			<?php } ?>
		<?php } ?>

		<?php

			$query = new WP_Query(array(
				'category_name' => 'math',
				'posts_per_page' => 1
			));
			if($query->have_posts()){ 
				while($query->have_posts()){
					$query->the_post();		
			?>
			<div class="post-container">

				<h1>
					<div id="math-tag"><img src="<?php echo get_template_directory_uri(); ?>/images/red-tag.png"></div>
					<a href="articlesEng.html"><?php the_title(); ?></a>
				</h1>
				<p id="subtitle"> By <a href="#"><?php the_author(); ?></a> on <a><?php the_date(); ?></a> under <a href="#">Math</a></p>
				<?php the_excerpt(); ?>
				<div class="read-more"><a href="<?php the_permalink() ?>">Read More...</a></div>
			</div>
			<?php } ?>
		<?php } ?>





</div>

		

		<div class="right-container">
			<div class="categories">
				<div class="head-category"><h1>Category</h1></div>

					<ul>
						<li class="each-category"><a href="articlesEng.html">&#187; Engineering</a></li>
						<li class="each-category"><a href="articlesSic.html">&#187; Science</a></li>
						<li class="each-category"><a href="articlesTech.html">&#187; Technology</a></li>
						<li class="each-category"><a href="articlesMath.html">&#187; Math</a></li>
						<li class="each-category"><a href="articlesEng.html">&#187; STEM Spark</a></li>
						<li class="each-category"><a href="articlesEng.html">&#187; Success</a></li>
						<li class="each-category"><a href="articlesEng.html">&#187; Volunteers</a></li>
					</ul>
			</div>
			<div class="twitter">will use a plugin</div>
		</div>


	</section>

<?php get_footer(); ?>