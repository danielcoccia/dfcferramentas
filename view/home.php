<?php include_once "inc_cabecalho.php" ?>

<?php
include_once '../service/ServiceProdutos.php';
$service = new ServiceProdutos();
$produtoLista = $service->getProdutosAleatorio($_REQUEST);
//print_r($produtoLista);
?>

<!-- Topo ================================================== -->
<?php include_once "inc_top.php" ?>

		<!-- slider 
			================================================== -->
		<div id="slider" class="revolution-slider">
			<!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->
			

			<div class="fullwidthbanner-container">
				<div class="fullwidthbanner">
					<ul>
						<!-- THE FIRST SLIDE -->
						<li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300">
							<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
							<img src="../images/banner_inicial/s1.png">
							<!-- THE CAPTIONS IN THIS SLDIE 
							 THE CAPTIONS IN THIS SLDIE 

							<div class="caption large_text lft"
								 data-x="184"
								 data-y="122"
								 data-speed="600"
								 data-start="1200"
								 data-easing="easeOutExpo" data-end="7000" data-endspeed="300" data-endeasing="easeInSine" ><span><img src="../images/banner_inicial/text-alimenticio.png" ></span></div>
							
							
							<div class="caption big_white lfb stt"
								 data-x="456"
								 data-y="172"
								 data-speed="500"
								 data-start="1500"
								 data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine" >Well Organised Layers</div>

							<div class="caption lfl"
								 data-x="200"
								 data-y="200"
								 data-speed="600"
								 data-start="1800"
								 data-easing="easeOutExpo" data-end="7200" data-endspeed="300" data-endeasing="easeInSine" ><img src="../images/revolution/icon7.png" alt="Image 1"></div>

							<div class="caption modern_small_text_dark lfb"
								 data-x="382"
								 data-y="340"
								 data-speed="600"
								 data-start="2000"
								 data-easing="easeOutExpo" data-end="7350" data-endspeed="300" data-endeasing="easeInSine" >update <br> notification</div>

							<div class="caption lft"
								 data-x="400"
								 data-y="200"
								 data-speed="600"
								 data-start="2300"
								 data-easing="easeOutExpo" data-end="7400" data-endspeed="300" data-endeasing="easeInSine" ><img src="../images/revolution/icon8.png" alt="Image 2"></div>

							<div class="caption modern_small_text_dark lfb"
								 data-x="492"
								 data-y="340"
								 data-speed="600"
								 data-start="2500"
								 data-easing="easeOutExpo" data-end="7450" data-endspeed="300" data-endeasing="easeInSine" >typography <br> settings</div>

							<div class="caption lft"
								 data-x="600"
								 data-y="200"
								 data-speed="600"
								 data-start="2800"
								 data-easing="easeOutExpo" data-end="7500" data-endspeed="300" data-endeasing="easeInSine" ><img src="images/revolution/icon9.png" alt="Image 3"></div>

							<div class="caption modern_small_text_dark lfb"
								 data-x="610"
								 data-y="340"
								 data-speed="600"
								 data-start="3000"
								 data-easing="easeOutExpo" data-end="7550" data-endspeed="300" data-endeasing="easeInSine" >unlimited <br>portfolios</div>

							<div class="caption lfr"
								 data-x="800"
								 data-y="200"
								 data-speed="600"
								 data-start="3300"
								 data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine" ><img src="images/revolution/icon9.png" alt="Image 4"></div>

							<div class="caption modern_small_text_dark lfb"
								 data-x="705"
								 data-y="340"
								 data-speed="600"
								 data-start="3500"
								 data-easing="easeOutExpo" data-end="7650" data-endspeed="300" data-endeasing="easeInSine" >extended <br>documentation</div>
								 -->
						</li>
						<!-- THE second SLIDE -->
						<li data-transition="cube" data-slotamount="10" data-masterspeed="300">
							<!-- THE MAIN IMAGE IN THE second SLIDE -->
							<img src="../images/banner_inicial/s2.png" >

							<!-- THE CAPTIONS IN THIS SLDIE 
							<div class="caption lfb"
								 data-x="803"
								 data-y="54"
								 data-speed="600"
								 data-start="1200"
								 data-easing="easeOutExpo" data-end="7000" data-endspeed="300" data-endeasing="easeInSine" ><img src="../images/revolution/icon5.png" alt="Image 1"></div>

							<div class="caption modern_medium_light lfl stt"
								 data-x="15"
								 data-y="120"
								 data-speed="500"
								 data-start="1600"
								 data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine" ><i class="fa fa-list"></i>Shortcode Generator</div>

							<div class="caption modern_medium_light lft stt"
								 data-x="300"
								 data-y="120"
								 data-speed="600"
								 data-start="1900"
								 data-easing="easeOutExpo" data-end="7300" data-endspeed="300" data-endeasing="easeInSine" ><i class="fa fa-building-o"></i>Optimized Code</div>

							<div class="caption modern_medium_light lfl stt"
								 data-x="15"
								 data-y="265"
								 data-speed="600"
								 data-start="2100"
								 data-easing="easeOutExpo" data-end="7400" data-endspeed="300" data-endeasing="easeInSine" ><i class="fa fa-flag-o"></i>Font Awesome</div>

							<div class="caption modern_medium_light lfb stt"
								 data-x="300"
								 data-y="265"
								 data-speed="600"
								 data-start="2300"
								 data-easing="easeOutExpo" data-end="7500" data-endspeed="300" data-endeasing="easeInSine" ><i class="fa fa-laptop"></i> Retina Ready</div>
								-->
						</li>

						<!-- THE third SLIDE -->
						<li data-transition="flyin" data-slotamount="10" data-masterspeed="300">
							<!-- THE MAIN IMAGE IN THE third SLIDE -->
							<img src="../images/banner_inicial/s3.png" >

							<!-- THE CAPTIONS IN THIS SLDIE 
							<div class="caption large_text lft"
								 data-x="300"
								 data-y="78"
								 data-speed="600"
								 data-start="1200"
								 data-easing="easeOutExpo" data-end="7000" data-endspeed="300" data-endeasing="easeInSine" >Built on <span>Bootstrap grid</span>, Amazing Design</div>

							<div class="caption big_white lfr stt"
								 data-x="490"
								 data-y="123"
								 data-speed="500"
								 data-start="1500"
								 data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine" >Easy Customizable</div>

							<div class="caption lfb"
								 data-x="220"
								 data-y="212"
								 data-speed="600"
								 data-start="1800"
								 data-easing="easeOutExpo" data-end="7200" data-endspeed="300" data-endeasing="easeInSine" ><img src="../images/revolution/icon6.png" alt="Image 1"></div>
								-->
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div style="height: 3px; width: 100% ;  background-color:red; -webkit-box-shadow: 0px 6px 16px -3px rgba(0,0,0,0.74);
-moz-box-shadow: 0px 6px 16px -3px rgba(0,0,0,0.74);
box-shadow: 0px 6px 16px -3px rgba(0,0,0,0.74);">
		<!-- End slider -->

		<!-- content 
	<!-- Aleatorio inicio ================================================= -->
		<div id="content">
			<div class="testimonials">				
				<div class="title-section">
					<!--
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Produto 1</h1>
						<p>Descricao</p>						
					</div>
					-->
				</div>
				<div class="container">
					<ul class="bxslider triggerAnimation animated" data-animate="fadeIn">
			<?php
				while ($lista = $produtoLista->fetch_array() ) {
				$html = '<li>
							<a href="produtosDetalhe.php?prod_id='.$lista['id'].'">
							<img alt="" src="../images/produtos/'.$lista['foto'].'" width="200px">
							<div class="message-content">
								<p>'.$lista['nome'].'</p>
								<h6>'.$lista['descricao'].'</span></h6>
							</div>
							</a>
						</li>';

				echo $html;
			}		
			?>						

					</ul>
				</div>
			</div>
			
			<!-- Aleatorio fim ================================================= -->

		</div>
		


		<!-- footer 
			================================================== -->
<?php include_once "inc_rodape.php" ?>
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