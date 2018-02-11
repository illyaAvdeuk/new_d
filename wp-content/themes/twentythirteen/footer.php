<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<link rel="Stylesheet" type="text/css" href="/slider/style/carousel.css">
<link rel="Stylesheet" type="text/css" href="/wp-content/themes/twentythirteen/css/owl.carousel.css">
<link rel="Stylesheet" type="text/css" href="/wp-content/themes/twentythirteen/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentythirteen/css/myresponsive.css">
<link rel="stylesheet" href="/wp-content/themes/twentythirteen/js/popup/style.css" type="text/css" media="screen" />
		</div><!-- #main -->
		<footer class="site-footer" role="contentinfo">
			<style>
				.gmap{
					width:100%; 
					height:865px;
				}
				.map-wrapper {position: relative;}
			    .map-wrapper .overlay {
					position: absolute;
					top: 0;
					bottom: 0;
					left: 0;
					right: 0;
					z-index: 10;
			    }
			</style>
			<div class="map">
				<div onclick="style.pointerEvents='none'" class="overlay"></div>
				<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<div class="map-wrapper" id="map-wrapper">
				    <div id="map-lock-overlay" class="overlay"></div>
				    <div class="gmap" 
				        data-lat="50.493339" 
				        data-lng="30.466705" 
				        data-latn="50.456056" 
				        data-lngn="30.637856" 
				        data-latc="50.474036" 
				        data-lngc="30.547268"
				        data-zoom="12" >
				    </div>
				</div>
				<script>
				$(document).ready(function() { 
					  $('.gmap').each(function(){
					      var container = this;
					      var latlng = new google.maps.LatLng(
					          parseFloat($(container).data('lat')),
					          parseFloat($(container).data('lng'))
					      );
					      var latlngn = new google.maps.LatLng(
					          parseFloat($(container).data('latn')),
					          parseFloat($(container).data('lngn'))
					      );
					      var latlngc = new google.maps.LatLng(
					          parseFloat($(container).data('latc')),
					          parseFloat($(container).data('lngc'))
					      );
					      var mapOptions = {
					          zoom: parseInt($(container).data('zoom')),
					          center: latlngc,
					          zoomControl: true,
					          mapTypeControl: false,
					          streetViewControl: false,
					          scrollwheel: true,
					          mapTypeId: google.maps.MapTypeId.ROADMAP
					      };
					      var map = new google.maps.Map(container, mapOptions);

					      var marker = new google.maps.Marker({
					          position: latlng,
					          map: map
					      });
					      var marker2 = new google.maps.Marker({
					          position: latlngn,
					          map: map
					      });
					  });
						$(document).mouseup(function(e) {
						  var map_wrapper = $('#map-wrapper');
						  if (!map_wrapper.is(e.target) && map_wrapper.has(e.target).length === 0) {
						    $('#map-lock-overlay').show();
						  } else {
						    $('#map-lock-overlay').hide();
						  }
						});
     				});
				</script>
		</div>
			<div class="footer_top_wrapper">
				<div class="footer_top">
					<div class="navbar_footer">
                                            <!--id="site-navigation" -->
                                            <nav  class="navigation main-navigation" role="navigation">
						
							<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
							
			<?php wp_nav_menu('menu=menu_footer'); ?>
						</nav><!-- #site-navigation -->
					</div><!-- #navbar -->
					
					<div class="block_footer">
						<p>Виды дверей</p>
						<p><a href="/metallicheskie-dveri">Металлические двери</a></p>
						<p><a href="/metallicheskie-uteplennye-dveri">Утепленные двери</a></p>
						<p><a href="/stalnye-dveri">Стальные двери</a></p>
						<p><a href="/dveri-s-kovkoj">Двери с ковкой</a></p>
						<p><a href="/dveri-dlya-kottedzha">Двери для коттеджа</a></p>
					</div>
					<div class="block_footer">
						<p>Отделка</p>
						<p><a href="/vinil-kozhzamenitel">Винил (Кожзаменитель)</a></p>
						<p><a href="/plenka-vinorit">Пленка ПВХ (Оракал)</a></p>
						<p><a href="/pokraska-poroshkovaya-grafitovaya">Покраска порошковая</a></p>
						<p><a href="/paneli-mdf">Панели МДФ</a></p>
						<p><a href="/naturalnoe-derevo">Натуральное дерево</a></p>
						<p><a href="/eksklyuzivnye">Эксклюзивные</a></p>
					</div>
					<div class="block_footer">
						<p>Комплектующие</p>
						<p><a href="/zamki">Замки</a></p>
						<p><a href="/dvernye-ruchki">Дверные ручки</a></p>
						<p><a href="/tsilindry">Цилиндры</a></p>
						<p><a href="/bronenakladki">Броненакладки</a></p>
						<p><a href="/otkosy-mdf">Откосы МДФ</a></p>
						<p><a href="/portaly-i-kapiteli">Порталы и капители</a></p>
					</div>
				</div>
			</div>
			
			<div class="footer_bottom">
				<div class="footer_top">
					<p class="f_bottom">	г. Киев<br>
                                    ул. Магнитогорская, 2<br>
						          <span>производственный цех</span></p>
                                        <p class="f_bottom">	г. Киев, ул. Сырецкая, 9<br>
                                                                оф. центр "Маяк", оф. 102<br>
											                 <span>офис-выставка<br></span>
											                 (посещение по предварительному звонку)
										</p>

					<div class="f_right" style="float: left;"><a href="mailto:doorservice@i.ua">doorservice@i.ua</a>
                        <div class = 'soc-links soc-f'>
                                        <a href = 'https://www.facebook.com/doorservicekiev' class = 'fb' target="_blank"></a>
                                        <!-- <a href = '#' class = 'gp'></a> -->
                                        <a href = 'https://twitter.com/doorserviceua' class = 'tw' target="_blank"></a>
						</div>
                    </div>
					<div class="f_middle" > 
						<span>+38 (044) 2288 211 <i><img src="/wp-content/uploads/phone1.png" alt=""></i></span><br>
						<span>+38 (050) 3388 511 <i><img src="/wp-content/uploads/mts.png" alt=""></i></span><br>
						<span>+38 (098) 2288 511 <i><img src="/wp-content/uploads/kievstar.png" alt=""></i></span><br>
						<span>+38 (063) 6688 511 <i><img src="/wp-content/uploads/viberlogo.png" alt=""></i></span>
                        
					</div>

					
				</div>
			</div>
		
		
			<?php get_sidebar( 'main' ); ?>

			
		</footer><!-- #colophon -->
	</div><!-- #page -->


<div id="feedback_bottom">
<style>
	.modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		display: none;
		pointer-events: none;
	}

	.modalDialog:target {
		display: block;
		pointer-events: auto;
	}

	.modalDialog > div {
		    width: 390px;
    position: relative;
    margin: 10% auto;
    padding: 0px;
    border-radius: 0px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
}
	}

	.close {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 21px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}
	</style>
<?php if ($_SERVER["REQUEST_URI"] == "/") { ?>
<a href="#feedback"  style="float: left; margin: 5px;width: auto;">Просчитать дверь</a>
<?php } else { ?>
<a href="#feedback" style="float: left; margin: 5px;width: auto;">Просчитать дверь</a>
<?php } ?>
<div style="display:none" class="fancybox-hidden">



</div>
</div> 



<div id="feedback" class="modalDialog">
	<div>
		<a href="#close" title="Закрыть" class="close">X</a>
		<?php echo do_shortcode("[contact-form-7 id='5' title='contact']"); ?>
	</div>
</div>
<?php wp_footer(); ?>



</body>
</html>