<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta name='yandex-verification' content='7e49ba2bf5c8967d' />	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="cmsmagazine" content="9bbeaa2b4acecd0c0877720b34468ce0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="shortcut icon" href="/wp-content/uploads/favicon.png" type="image/png"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	
   <script type="text/javascript" src="/wp-content/themes/twentythirteen/js/jquery_min.js"></script> 
   <script async type="text/javascript" src="/wp-content/themes/twentythirteen/js/functions.js"></script>
   <script  src="/wp-content/themes/twentythirteen/js/owl.carousel.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			PopUp($('#obj, #obj2'), $('#trigg, #trigg2'));
			$("#owl1").owlCarousel({
				  pagination : true,
				  paginationNumbers : true,
				  autoPlay: false,
				  singleItem : true
				});

			$('#menu-item-115>a').click(function(event){
				return false
 			});

			});
	</script>
   <script src="/slider/scripts/jquery.carousel-1.1.min.js"></script>
   
    <script async type="text/javascript" src="/slider/scripts/sample01.js"></script>
	
  
	
	
	

	<script type="text/javascript" src="/wp-content/themes/twentythirteen/js/popup/js/popup.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PBXLZ56');</script>
<!-- End Google Tag Manager -->

<style>
.site-header{
margin-bottom: -215px;
}
.site-main {
    margin: 0 auto;
    width: 100%;
}
.content-area {
    float: none;
    margin-left: 0;
    width: 100%;
}
.phone a{color:#272321;}
</style>
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBXLZ56"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="header_in">
				<div class="logo">
					<a href="/"></a>
				</div>
					<!-- <div class="header_slogan">Изготовление входных дверей в Киеве</div> -->
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
                <div class="phone">
                    <p>
                        <span><a href="tel:+380442288211">+38 (044) 2288 211<img src="/wp-content/uploads/phone1.png" alt="Телефон 1"></a><i></i></span><br>
                        <span><a href="tel:+380503388511">+38 (050) 3388 511<img src="/wp-content/uploads/mts.png" alt="Телефон MTS"></a><i></i></span><br>
                        <span><a href="tel:+380982288511">+38 (098) 2288 511<img src="/wp-content/uploads/kievstar.png" alt="Телефон Kyivstar"></a><i></i></span><br>
                        <span><a href="tel:+380636688511">+38 (063) 6688 511<img src="/wp-content/uploads/viberlogo.png" alt="Viber"></a><i></i></span><br>
                    </p>
                    <div class = 'soc-links'>
                        <a href = 'https://www.facebook.com/doorservicekiev' class='fb' rel="me nofollow" target="_blank"></a>
                        <!--
<a href = 'https://plus.google.com/u/2/b/114172483860002656308/114172483860002656308/about' class = 'gp'></a>
			-->
                        <a href = 'https://twitter.com/doorserviceua' class='tw' rel="me nofollow" target="_blank"></a>
                    </div>
                </div>
			</div>
				<div id="navbar" class="navbar">
					<nav id="site-navigation" class="navigation main-navigation" role="navigation">
						
						<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div><!-- #navbar -->
		
		</header><!-- #masthead -->
    </div><!-- #page -->
		<div id="main" class="site-main">
