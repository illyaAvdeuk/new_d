<?php
if(is_paged){
    add_filter( 'wpseo_canonical', '__return_false' );
}
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
        <?php 
        $cat_arr = array(49,69,37,31,30,29,15,14,13,12,10,9,8);
        $no_prod = array(7, 5);
        if( is_single() && !is_page() ){
            $id = get_the_ID();
            $post_categories = wp_get_post_categories($id);
            $cat_name =  get_cat_name( $post_categories[0] );
            if(!in_array($post_categories[0],$no_prod  )){
                echo '<title>' . get_the_title($id) . ' ' . $cat_name . ' | DoorService</title>';
echo '<meta name="description" content="Крепкие и надежные ' . strtolower($cat_name) . ', модель ' . get_the_title($id) . '. Тел☎(044)2288211" />';
            }
        } else {
?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
 <?php  } ?>
        <link rel="shortcut icon" href="/wp-content/uploads/favicon.png" type="image/png"/>
			<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script type="text/javascript" src="/wp-content/themes/twentythirteen/js/jquery_min.js"></script>
	
	<script async type="text/javascript" src="/wp-content/themes/twentythirteen/js/spoiler.js"></script>
	<script async type="text/javascript" src="/wp-content/themes/twentythirteen/js/functions.js"></script>
	<script async src="/wp-content/themes/twentythirteen/js/zoomsl-3.0.min.js"></script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PBXLZ56');</script>
<!-- End Google Tag Manager -->
	<script type="text/javascript">
		$(document).ready(function(){

						$('#menu-item-115>a').click(function(event){
							return false
			 			});

			$(".main_pr_img").imagezoomsl({

		         zoomrange: [3, 6],
		         magnifiersize: [300,280]
		      });

			});
	</script>


	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head();
        if(is_paged()){
            $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            echo '<link rel="canonical" href="' . substr($actual_link, 0, -7)  . '" />';
        }
        
        ?>

	<link rel="stylesheet" href="/wp-content/themes/twentythirteen/js/popup/style.css" type="text/css" media="screen" />

	<script async type="text/javascript" src="/wp-content/themes/twentythirteen/js/popup/js/popup.js"></script>

		<script type="text/javascript">
		$(document).ready(function(){
			PopUp($('#obj, #obj2'), $('#trigg, #trigg2'));

			});
	</script>
	<script async type="text/javascript" src="/wp-content/themes/twentythirteen/js/carusel/carousel.js"></script>  <!-- подключаем наш скрипт -->
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentythirteen/js/carusel/css/styles-carousel.css"> <!-- подключаем стилевой файл -->
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/twentythirteen/css/myresponsive.css">


<script async src="/js/modal/jquery.arcticmodal-0.3.min.js"></script>
<link rel="stylesheet" href="/js/modal/jquery.arcticmodal-0.3.css">
<link rel="stylesheet" href="/js/modal/themes/simple.css">
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

.phone a{color:#272321;}
	</style>
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
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			<!-- <div class="header_slogan">Изготовление входных дверей в Киеве</div> -->
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

<?php if ($_SERVER["REQUEST_URI"] == "/test") { ?>
<?php echo do_shortcode("[wprbt slider_id='1']"); ?>

<? } ?>

		</header><!-- #masthead -->
    </div>
		<div id="main" class="site-main">

		<div class="breadcramps" style="width:100%;    padding: 5px; padding-left: 15px;">
		<style>#breadcrumbs > span > span > a{color:#004200;}</style>
		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p style="margin: 0px;" id="breadcrumbs">','</p>');
		} ?>
		</div>