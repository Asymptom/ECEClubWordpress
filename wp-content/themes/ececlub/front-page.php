<?php get_header(); ?>
	<div id="big-image">
        <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/homepage.png"></a>
    </div>

	<div id="main-container">

		<div id="content-post">
			<?php
            if (is_home()){
                $cat_name = 'Upcoming Events';
                query_posts('cat=-' . get_cat_ID( $cat_name)); 
            }
            
            while ( have_posts() ) : the_post(); ?>
				<section class="col-8 col-md-8">
					<div class="post">
                        <div class="post-content">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>

                        <div id="subtitle"><p>Submitted by <?php the_author(); ?> on <?php the_date(); ?> </p></div>

					</div>
				</section>

			<?php endwhile; ?>
            <?php wp_reset_query(); ?>
		</div>

		<div id="sidebar">
            <aside class="col-4 col-md-4 " id="billboard">
                <a href="<?php echo site_url();?>"><img class="shadowed hidden-sm hidden-xs" id="discussion-sticker" src="<?php echo get_template_directory_uri(); ?>/images/discussion_board_sticker.png" alt="to the discussion board"></a>
                <?php get_sidebar(); ?> 
            </aside>
		</div>


	</div>



	
</div>


<?php get_footer(); ?>