	<footer>
			<div class="up-footer">
				<div class="container">
					<div class="row">

						<div class="col-md-3 triggerAnimation animated" data-animate="fadeInLeft">
							<div class="widget footer-widgets text-widget">
								<img alt="" src="images/footer-logo.png">
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
							</div>
						</div>

						<div class="col-md-3 triggerAnimation animated" data-animate="fadeInUp">
							<div class="widget footer-widgets tag-widget">
								<h4>Recent Posts</h4>
								<ul class="posts-widget-list">
									<li>
										<p><a href="#">New Search Platform Update</a></p>
									</li>
									<li>
										<p><a href="#">Envato's Most Wanted - $5,000 for Ghost Themes</a></p>
									</li>
									<li>
										<p><a href="#">Update: WordPress Theme Submission Requirements</a></p>
									</li>
									<li>
										<p><a href="#">Envato Staff Vs Community Nike+ </a></p>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 triggerAnimation animated" data-animate="fadeInDown">
							<div class="widget footer-widgets tag-widget">
								<h4>Popular Tags</h4>
								<ul class="tag-widget-list">
									<li><a href="#">web design</a></li>
									<li><a href="#">coding</a></li>
									<li><a href="#">woo commerce</a></li>
									<li><a href="#">woo commerce</a></li>
									<li><a href="#">php</a></li>
									<li><a href="#">photography</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 triggerAnimation animated" data-animate="fadeInRight">
							<div class="widget footer-widgets flickr-widget">
								<h4>Flickr Gallery</h4>
								<ul class="flickr-list">
									<li><a href="#"><img alt="" src="upload/thumb1.jpg"></a></li>
									<li><a href="#"><img alt="" src="upload/thumb2.jpg"></a></li>
									<li><a href="#"><img alt="" src="upload/thumb3.jpg"></a></li>
									<li><a href="#"><img alt="" src="upload/thumb4.jpg"></a></li>
									<li><a href="#"><img alt="" src="upload/thumb5.jpg"></a></li>
									<li><a href="#"><img alt="" src="upload/thumb6.jpg"></a></li>
									<li><a href="#"><img alt="" src="upload/thumb7.jpg"></a></li>
									<li><a href="#"><img alt="" src="upload/thumb8.jpg"></a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer-line">
				<div class="container">
					<p>&#169; 2013 Convertible,  All Rights Reserved</p>
					<ul class="footer-social-icons">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
						<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>						
					</ul>
				</div>
			</div>

		</footer>
		<!-- End footer -->
	</div>
	<!-- End Container -->

	<!--
	##############################
	 - ACTIVATE THE BANNER HERE -
	##############################
	-->
	<script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;

			var api = tpj('.fullwidthbanner').revolution(
				{
					delay:8000,
					startwidth:1170,
					startheight:500,

					onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

					thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
					thumbHeight:50,
					thumbAmount:3,

					hideThumbs:0,
					navigationType:"none",				// bullet, thumb, none
					navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

					navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


					navigationHAlign:"center",				// Vertical Align top,center,bottom
					navigationVAlign:"bottom",					// Horizontal Align left,center,right
					navigationHOffset:30,
					navigationVOffset: 40,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:0,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:0,
					soloArrowRightVOffset:0,

					touchenabled:"on",						// Enable Swipe Function : on/off


					stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
					stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

					hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
					hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
					hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


					fullWidth:"on",

					shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

				});


				// TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
				// YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
					api.bind("revolution.slide.onloaded",function (e) {


						jQuery('.tparrows').each(function() {
							var arrows=jQuery(this);

							var timer = setInterval(function() {

								if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
								  arrows.fadeOut(300);
							},3000);
						})

						jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
							jQuery('.tp-simpleresponsive').addClass("mouseisover");
							jQuery('body').find('.tparrows').each(function() {
								jQuery(this).fadeIn(300);
							});
						}, function() {
							if (!jQuery(this).hasClass("tparrows"))
								jQuery('.tp-simpleresponsive').removeClass("mouseisover");
						})
					});
				// END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
			});
	</script>

</body>

<!-- Mirrored from www.megaplano.com.br/site7/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 17:28:27 GMT -->
</html>