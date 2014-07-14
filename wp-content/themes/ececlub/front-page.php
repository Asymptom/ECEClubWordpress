<?php get_header(); ?>
	<div id="big-image"> <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/homepage.png"></a>
                  </div>

	<div id="main-container">

		<div id="content-post">
			<?php while ( have_posts() ) : the_post(); ?>
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
		</div>

		<div id="sidebar">
			<aside class="col-4 col-md-4 " id="billboard">
                    <a href="<?php echo site_url();?>"><img class="shadowed hidden-sm hidden-xs" id="discussion-sticker" src="<?php echo get_template_directory_uri(); ?>/images/discussion_board_sticker.png" alt="to the discussion board"></a>
                    <h2>.Upcoming Events</h2>
                    <table class="table table-striped">
                            <tbody>
                                <tr>
                                        <td colspan="2">Monday, January 20</td>
                                </tr>
                                <tr>
                                        <td>6:00pm</td>
                                        <td><a href="#">ECE Course Selection Info Session</a></td>
                                </tr>
                                <tr>
                                <td colspan="2">Wednesday, January 22</td>
                                </tr>
                                <tr>
                                        <td>12:00pm</td>
                                        <td><a href="https://www.facebook.com/events/216769335177865/?ref_dashboard_filter=upcoming">ECE1T6 Class Photo</a></td>
                                </tr>
                                <tr>
                                <td colspan="2">Thursday, January 23</td>
                                </tr>
                                <tr>
                                        <td>5:00pm</td>
                                        <td><a href="#">Iron Ring Session</a></td>
                                </tr>
                                <tr>
                                <td colspan="2">Friday, February 14</td>
                                </tr>
                                <tr>
                                        <td>9:00am</td>
                                        <td><a href="http://ece.skule.ca/dinnerdance">ECE Dinner Dance</a></td>
                                </tr>
                                <tr>
                                <td colspan="2">Saturday, March 1</td>
                                </tr>
                                <tr>
                                        <td>11:00am</td>
                                        <td><a href="#">Iron Ring Ceremony</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                        <td colspan="2"><i>Showing Events until 03/01/2014</i></td>
                                </tr>
                            </tfoot>
                    </table>
		</aside>
		</div>


	</div>



	
</div>


<?php get_footer(); ?>