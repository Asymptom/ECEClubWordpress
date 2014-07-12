<?php get_header(); ?>

<section class="contactus-container">
		<ul class="contact-box">
				<h1>Contact Us</h1>
				<form action="MAILTO:i-wendy@peopleandcode.com" method="post" enctype="text/plain" class="bootstrap-frm">
					<label>
						<span>Your Name :</span>
						<input id="name" type="text" name="name" placeholder="Your Full Name" />
					</label>

					<label>
						<span>Your Email :</span>
						<input id="email" type="email" name="email" placeholder="Valid Email Address" />
					</label>

					<label>
						<span>Message :</span>
						<textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
					</label> 
					<label>
						<span>Subject :</span><select name="selection">
						<option value="Job Inquiry">Join the Team</option>
						<option value="General Question">General Question</option>
					</select>
				</label>    
				<label>
					<span>&nbsp;</span> 


					<input type="button" class="button" value="Send" /> 
				</label>    
			</form>
		</ul>
	</section>


	<section class="contactus-sidebar">
		<div class="contactus-sidebar-header"><h1>Want to become a supporter?</h1></div>
		<div class="contactus-sidebar-content"><p class="contactus-sidebar-text">We are always looking for supports from you.The below guide showed you how to become our supporter blah blah blah, download the <a href="<?php echo home_url();?>">supporter guide</a>(pdf)</p></div>
		<div class="contactus-sidebar-header"><h1>Want to become a partner?</h1></div>
		<div class="contactus-sidebar-content"><p class="contactus-sidebar-text">We are looking forward to become partner with you! The below guide showed you how to become our partner blah blah blah, download the <a href="<?php echo home_url();?>">partner guide</a>(pdf)</p></div>
		<div class="contactus-sidebar-header"><h1>Any questions?</h1></div>
		<div class="contactus-sidebar-content"><p class="contactus-sidebar-text">Have any questions. Click here. <a href="<?php echo home_url();?>">frequent Q&A</a></p></div>

	</section>

<?php get_footer(); ?>