<section id="footer-container">

	<ul class="footer-nav-container">
		<li><a href="https://www.facebook.com/HerVolutionCanadianWomeninSTEM" target="_blank" class="menuItem fa fa-facebook-square fa-2x"></a></li>
		<li><a href="/aboutus" target="_blank" class="menuItem fa fa-twitter-square fa-2x"></a></li>
		<li><a href="http://instagram.com/her_volution" target="_blank" class="menuItem fa fa-instagram fa-2x"></a></li>
		<li><a href="https://plus.google.com/+HErVOLUTIONSTEM/posts" target="_blank" class="menuItem fa fa-google-plus-square fa-2x"></a></li>
		<li><a href="http://www.pinterest.com/hervolution/" target="_blank" class="menuItem fa fa-pinterest-square fa-2x"></a></li>
		<li><a href="https://www.youtube.com/channel/UCyTVvixDvpY0WxsfQVrZqgg" target="_blank" class="menuItem fa fa-youtube-square fa-2x"></a></li>
		<li><a href="mailto:i-wendy@peopleandcode.com" target="_blank" class="menuItem fa fa-envelope fa-2x"></a></li>
		<li><a href="/glossary" class="glossary-footer">Glossary</a></li>
		<li><a href="/privacy" class="glossary-footer">Privacy Policy</a></li>
		<li><a href="/terms" class="glossary-footer">Terms &#38; Conditions</a></li>
		<li><a href="http://peopleandcode.com/" class="pnc-footer">Website Powered By <span>People and Code<span></a></li>
	</ul>

</section>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-1.9.1.min.js"><\/script>')</script>

	<!-- SlidesJS Required: Link to jquery.slides.js -->
	<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.slides.js"></script>
	<!-- End SlidesJS Required -->

	<!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/hamburger-icon.js"></script>

	<?php if(is_front_page()){ ?>
	<script>
	$(function() {
		$('#slides').slidesjs({
			width: 940,
			height: 528,
			play: {
				active: true,
				auto: true,
				interval: 4000,
				swap: true
			}
		});
	});
	</script>
	<!-- End SlidesJS Required -->
	<?php } ?>

	<?php wp_footer(); ?>

</body>
</html>