<?php 

//include database connection details
include('db.php');

//redirect to real link if URL is set
if (!empty($_GET['url'])) {
	$redirect = mysql_fetch_assoc(mysql_query("SELECT url_link FROM urls WHERE url_short = '".addslashes($_GET['url'])."'"));
	$redirect =  ($redirect[url_link]);
	header('HTTP/1.1 301 Moved Permanently');  
	header("Location: ".$redirect);  
}
//

//insert new url
if (isset($_POST['url'])) {

//get random string for URL and add http:// if not already there
$short = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5);

mysql_query("INSERT INTO urls (url_link, url_short, url_ip, url_date) VALUES

	(
	'".addslashes($_POST['url'])."',
	'".$short."',
	'".$_SERVER['REMOTE_ADDR']."',
	'".time()."'
	)

");



}
//

?>


<!DOCTYPE html>
<!-- saved from url=(0018)https://bitly.com/ -->
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="js flexbox webgl no-touch geolocation hashchange history websockets rgba hsla multiplebgs backgroundsize borderimage textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage applicationcache svg svgclippaths mediaqueries no-regions supports wf-brandongrotesque-n4-active wf-brandongrotesque-n5-active wf-brandongrotesque-n7-active wf-proximanova-n3-active wf-proximanova-n4-active wf-proximanova-n6-active wf-active"><!--<![endif]--><!-- ************************************************** --><!-- BEGIN: HEAD                                        --><!-- ************************************************** --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
		
		<!-- ************************************************** -->
		<!-- BEGIN: META TAGS                                   -->
		<!-- ************************************************** -->
		
		<!-- BEGIN: STANDARD META TAGS -->
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="referrer" content="always">
		
		<!-- END: STANDARD META TAGS -->
		
		 
		
		<!-- ************************************************** -->
		<!-- END: META TAGS                                     -->
		<!-- ************************************************** -->
		
		<!-- ************************************************** -->
		<!-- BEGIN: MOBILE TAGS                                 -->
		<!-- ************************************************** -->
		
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		
		<!-- ************************************************** -->
		<!-- END: MOBILE TAGS                                   -->
		<!-- ************************************************** -->
	    
		<!-- ************************************************** -->
		<!-- BEGIN: ICONS                                       -->
		<!-- ************************************************** -->
		
		<!-- BEGIN: FAV ICON -->
		
		 
		<!--[if IE]>
			
			<link rel="shortcut icon" href="https://bitly.com/pages/wp-content/themes/bitly/library/images/components/icons/favicon.ico">
			
		<![endif]-->
		
		<!-- END: FAV ICON -->
		
		<!-- BEGIN: APPLE iOS TOUCH ICONS -->
	    
	     
		<!-- END: APPLE iOS TOUCH ICONS -->
	    
		<!-- BEGIN: APPLE iOS7 TOUCH ICONS -->
	    
	    	
		<!-- END: APPLE iOS7 TOUCH ICONS -->
		
		<!-- BEGIN: IE10 TILES -->
		
		 
		<!-- END: IE10 TILES -->
	    
		<!-- ************************************************** -->
		<!-- END: ICONS                                         -->
		<!-- ************************************************** -->
	    
		<!-- ************************************************** -->
		<!-- BEGIN: WORDPRESS HEAD                              -->
		<!-- ************************************************** -->

		
<!-- This site is optimized with the Yoast WordPress SEO plugin v1.7.1 - https://yoast.com/wordpress/plugins/seo/ -->
<title>Fitly - The Power of the Link</title>
<meta name="description" content="Bitly Brand Tools: Own, understand and activate your best audience through the power of the link.">
<link rel="canonical" href="./Bitly - The Power of the Link_files/Bitly - The Power of the Link.html">
 
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="Bitly - The Power of the Link">
<meta property="og:description" content="Bitly Brand Tools: Own, understand and activate your best audience through the power of the link.">
<meta property="og:site_name" content="Bitly">
 
 
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Bitly Brand Tools: Own, understand and activate your best audience through the power of the link.">
<meta name="twitter:title" content="Bitly - The Power of the Link">
<meta name="twitter:site" content="@Fitly">
<meta name="twitter:domain" content="Bitly">
<meta name="twitter:creator" content="@Fitly">
 
 <!-- / Yoast WordPress SEO plugin. -->

<link rel="stylesheet" id="bones-stylesheet-blessed1-css" href="./Bitly - The Power of the Link_files/styles-blessed1.css" type="text/css" media="all">
<link rel="stylesheet" id="bones-stylesheet-css" href="./Bitly - The Power of the Link_files/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="bones-stylesheet-home-css" href="./Bitly - The Power of the Link_files/home.css" type="text/css" media="all">
 
<link rel="shortlink" href="https://bitly.com/pages/">
<meta property="bitly:url" content="http://bit.ly/1rkUTYA">
<meta property="og:url" content="http://bit.ly/1rkUTYA">
		
		 
		
		<!-- ************************************************** -->
		<!-- END: WORDPRESS HEAD                                -->
		<!-- ************************************************** -->
		
		<!-- ************************************************** -->
		<!-- BEGIN: WEB FONTS                                   -->
		<!-- ************************************************** -->
		
	 
		<style type="text/css">.tk-proxima-nova{font-family:"proxima-nova",sans-serif;}.tk-brandon-grotesque{font-family:"brandon-grotesque",sans-serif;}</style><link rel="stylesheet" href="https://use.typekit.net/c/a153df/1w;brandon-grotesque,2,Y2l:P:n4,Y2n:P:n5,Y2q:P:n7;proxima-nova,2,b5t:P:n3,b5w:P:n4,b5y:P:n6/d?3bb2a6e53c9684ffdc9a99f6195b2a6209107d27f153411aa02e79ead27b9554b9b3bba0f104474992de934e2a0aa58f375f0d51a5e848f2f0ba5a6f9715fd9aba48d668bcfc84eeb9cbbf866ff8f010da22d73a2dbe017c57fd3501346abc5e2ffc979fca93c40ab093ceaa4eaff0d0be65e55778689d703f85a3dee7e7b8914dd15185d84b1609540a0cf9a305d78e7a678d0e68bb15b2c4c0bfb213b1d4cd79f2df3a3549a445d2b5785760be33e677379b672dbd4ce4a1d5203b7df46d50b1d5e964e34e211b3d447f1994d35c85847d356fce5f7f1e728ad0030ad017384799d6d9b0ccaa9cea4ae49ca906ca178053a255dbef92959dcf52cdafdf2bbb77a05be65b3f1698e78225ed2cdbaec5a27f4966a410b1044097bb08acefb5241e435dcbfd218ba6043ed6d244b8b8"><script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<!-- ************************************************** -->
		<!-- END: WEB FONTS                                     -->
		<!-- ************************************************** -->

 <link rel="stylesheet" type="text/css" href="./Bitly - The Power of the Link_files/buttons-secure.css"><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f8;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3a5795;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #2f477a;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f8;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style></head>
	
	<!-- ************************************************** -->
	<!-- END: HEAD                                          -->
	<!-- ************************************************** -->
	
	<!-- ************************************************** -->
	<!-- BEGIN: BODY                                        -->
	<!-- ************************************************** -->

	<body class="home page page-id-5 page-template-default" data-twttr-rendered="true" cz-shortcut-listen="true"><iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="./Bitly - The Power of the Link_files/hub.5e35c44edb867aec88b804135e0a46c4.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;"></iframe>
		
		<!-- ************************************************** -->
<!-- BEGIN: BODY HEAD                                   -->
<!-- ************************************************** -->

<!-- BEGIN: GA -->

 

<!-- END: GA -->

<!-- BEGIN: GOOGLE TAG MANAGER -->
 

 

<!-- END: GOOGLE TAG MANAGER -->


<!-- BEGIN: MUNCHKIN API -->

 
 
<!-- END: MUNCHKIN API -->

<!-- BEGIN: FACEBOOK SDK -->

<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./Bitly - The Power of the Link_files/KvoNGODIqPG.html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>

 

<!-- END: FACEBOOK SDK -->

<!-- BEGIN: TWITTER SHARE -->

 

<!-- END: TWITTER SHARE -->

<!-- BEGIN: GOOGLE PLUS SHARE -->

 

<!-- END: GOOGLE PLUS SHARE -->

<!-- BEGIN: LINKEDIN SHARE -->

 

<!-- END: LINKEDIN SHARE -->

 
<!-- ************************************************** -->
<!-- END: BODY HEAD                                     -->
<!-- ************************************************** -->
<!-- ************************************************** -->
<!-- BEGIN: STAGE                                       -->
<!-- ************************************************** -->

<div id="stage" class="home root-home type-page home">
	
	<!-- ************************************************** -->
<!-- BEGIN: HEADER                                      -->
<!-- ************************************************** -->


<header id="header" data-template="stage-header" class=" header-transparent">
	
	<div id="header-inner">
		
		<div class="container container-pod container-pod-short">
			
			<a href"http://www.creativevalley.co/fitly"><img src="logo.png" alt="asd" id="header-logo"> </a>  
		 
			<nav id="navigation" role="navigation">
				
				<ul id="menu-header-menu" class="nav top-nav clearfix"><li id="menu-item-295" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-295"><a href="#">Product Tour</a></li>
<li id="menu-item-296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-296"><a href="#">Resources</a></li>
<li id="menu-item-1147" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1147"><a href="#">Partners</a></li>
<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#">Sign In</a></li>
<li id="menu-item-357" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-357"><a href="#">Sign Up</a></li>
</ul>				
			</nav>
			
			<div id="header-actions">
				
									
					
<form method="POST" action="shorten.php" id="form-header-link-shortener" class="link-shortener flush-bottom">
	
	<div class="input-group flush-bottom" id="form-header-link-shortener-url-input-group">
		
		<input type="text" name="url" placeholder="Paste a link to shorten it" id="url" autocomplete="off" autocorrect="off" autocapitalize="off" class="flush-bottom " required>
		
		 

		<div class="add-on-group add-on-append">
			
			<button class="button button-primary" type="submit" id="link-shortener-url-button">
				
				Shorten
				
			</button>
			
		</div>
			
	</div>
	
</form>					
									
			</div>
			
			<a id="header-mobile-menu-button" href="https://bitly.com/pages#">
				
				<i class="icon icon-small icon-color icon-menu-open"></i>
				<i class="icon icon-small icon-color icon-menu-close"></i>
				
			</a>
			
			<ul id="header-mobile-auth-links">
				
				<li>
					
					<a href="#">
						
						Sign In
						
					</a>
					
				</li>
				
				<li>
					
					<a href="#">
						
						Sign Up
						
					</a>
					
				</li>
				
			</ul>

		</div>

	</div>
	
</header>

<!-- ************************************************** -->
<!-- END: HEADER                                        -->
<!-- ************************************************** -->
	
	<!-- ************************************************** -->
	<!-- BEGIN: PAGE                                        -->
	<!-- ************************************************** -->
	
	<div id="page">
		
		<!-- ************************************************** -->
<!-- BEGIN: PAGE HEADER                                 -->
<!-- ************************************************** -->


<div id="page-header" class="stage-pod  page-header-light" role="banner" data-template="page-header">

	
	<div id="page-header-inner">
		
		<div class="container container-pod">

			<div class="row  ">

				<div class="col-mini-12 col-small-12 col-medium-12 col-large-12">
					
										
					<!-- BEGIN: PAGE HEADER ICON -->
					
					<div class="page-header-icon">
						
					</div>
					
					<!-- END: PAGE HEADER ICON -->
					
					<!-- BEGIN: PAGE HEADER TITLE -->

					<h1 class="page-header-title flush-top invisible ">
						
						The power of the link
					</h1>

					<!-- END: PAGE HEADER TITLE -->

					
						<!-- BEGIN: PAGE HEADER HEADLINE -->

						<h2 class="page-header-headline flush-top ">

							Unleash the power of the link
						</h2>

						<!-- END: PAGE HEADER HEADLINE -->

						
					
						<!-- BEGIN: PAGE HEADER DESCRIPTION -->

						<div class="row">

							<div class="col-small-12">

								<p class="page-header-description flush-top flush-bottom">

									Drive app installs and re-engagement with deep linking by Fitly.										
										<a href="#">
											
											Learn More <i class="icon icon-mini icon-arrow-right icon-color"></i>
											
										</a>
										
										
								</p>

							</div>

						</div>

						<!-- END: PAGE HEADER DESCRIPTION -->

											
										
				</div>
				
								
			</div>

			<!-- ************************************************** -->
<!-- BEGIN: HOME HEADER                                 -->
<!-- ************************************************** -->


<div id="page-home-header" class="stage-pod">

    <div id="" style="cursor: pointer;">

        <img class="image-responsive" src="./Bitly - The Power of the Link_files/homepage_image-1200x466.png">
            
    </div>

</div>

<!-- ************************************************** -->
<!-- END: HOME HEADER                                   -->
<!-- ************************************************** -->
			
		</div>
		
	</div>
	
	
</div>

<!-- ************************************************** -->
<!-- END: PAGE HEADER                                   -->
<!-- ************************************************** -->

		
		<!-- ************************************************** -->
		<!-- BEGIN: PAGE CONTENT                                -->
		<!-- ************************************************** -->
		
		<div id="page-content">
<!-- ************************************************** -->
<!-- BEGIN: HOME BRAND TOOLS                            -->
<!-- ************************************************** -->

<div id="page-home-brand-tools" class="stage-pod">

	<div class="container container-pod container-pod-tall">
		
						
				<div class="promotional-well">
					
											
						<div class="row vertically-balanced" data-vertically-balanced-screen-size-min="768">
							
							<div class="col-mini-5 col-small-4 col-medium-4 col-large-3">
								
								<div class="vertically-balanced-column vertically-balanced-column-center-vertical" style="height: 142px; position: relative;"><div class="vertically-balanced-column-inner" style="margin-top: -65.5px; top: 50%; position: absolute; width: 100%;">
									
									<div class="promotional-well-image">
										
																					
											<a href="#">
											
																					
										<img src="./Bitly - The Power of the Link_files/promotional-well-image-sample.png">
										
																					
											</a>
											
																					
									</div>
									
								</div></div>
								
							</div>
							
							<div class="col-mini-7 col-small-8 col-medium-8 col-large-9 col-spill">
								
								<div class="vertically-balanced-column vertically-balanced-column-center-vertical" style="height: 142px; position: relative;"><div class="vertically-balanced-column-inner" style="margin-top: -71px; top: 50%; position: absolute; width: 100%;">
								
											
					<div class="promotional-well-detail">
						
													
							<h3 class="promotional-well-detail-headline ">
								
																	
									<a href="#">
									
									The Secrets to a Successful Social Campaign									
									</a>
									
																	
							</h3>
							
														
							<p class="promotional-well-detail-overview">
								
								How can you bring your social strategy to the next level to drive campaign success? Join Melissa Wallace, VP of Marketing at Fitly, for a Q&amp;A with JP Lespinasse, Senior Director of Social Marketing at BET, about how he maximized social to drive branding, engagement and tune-in goals for the BET Hip Hop Awards 2014									
									<a href="#">
									
									Watch Now									
									<i class="icon icon-mini icon-arrow-right icon-color"></i>
									
									</a>
									
																	
							</p>
							
													
					</div>
					
													
								</div></div>
								
							</div>
							
						</div>
						
											
				</div>
				
						
		<h2 class="centered">
			
			Fitly Brand Tools
			
		</h2>
		
		<div class="row">	
			
			<div class="col-small-10 col-small-offset-1 col-medium-8 col-medium-offset-2 col-large-6 col-large-offset-3">
				
				<p class="lead centered tall">
					
					Drive efficiency and performance of your strategy and tactics across all marketing technologies.
					
				</p>
				
				<div class="button-toolbar button-toolbar-centered flush-bottom">
					
					<a href="#" class="button button-icon-last">
						
						Learn More<i class="icon icon-mini icon-arrow-right icon-color"></i>
						
					</a>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="row">	
			
			<div class="col-12 col-large-10 col-large-offset-1">
				
				<h6 class="h6-divider short">
					
					<span>
						
						Fitly Brand Tools
						
					</span>
					
				</h6>
				
				<div class="row page-home-brand-tools-products">
					
					<div class="col-small-4 page-home-brand-tools-product">
						
						<i class="icon icon-jumbo icon-color icon-links">
						</i>
						
						<h3 class="short">
							
							<a href="#">
								
								Links
								
							</a>
							
						</h3>
						
						<p class="flush-bottom">
							
							Control your brand and capture your data.
							
						</p>
						
					</div>
					
					<div class="col-small-4 page-home-brand-tools-product col-spill">
						
						<i class="icon icon-jumbo icon-color icon-audience">
						</i>
						
						<h3 class="short">
							
							<a href="#">
								
								Audience
								
							</a>
							
						</h3>
						
						<p class="flush-bottom">
							
							Own, analyze and understand your actively engaged audiences.
							
						</p>
						
					</div>
					
					<div class="col-small-4 page-home-brand-tools-product col-spill">
						
						<i class="icon icon-jumbo icon-color icon-activate">
						</i>
						
						<h3 class="short">
							
							<a href="#">
								
								Activate
								
							</a>
							
						</h3>
						
						<p class="flush-bottom">
							
							Target your best audience and connect to the marketing cloud.
							
						</p>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>

<!-- ************************************************** -->
<!-- END: HOME BRAND TOOLS                              -->
<!-- ************************************************** -->

<!-- ************************************************** -->
<!-- BEGIN: HOME LINK SHORTENER                         -->
<!-- ************************************************** -->

<div id="page-home-link-shortener" class="stage-pod stage-pod-dark">

	<div class="container container-pod">
		
		<!-- ************************************************** -->
		<!-- BEGIN: HOME LINK SHORTENER COUNTER                 -->
		<!-- ************************************************** -->
		
		<div id="page-home-link-shortener-counter">
		<div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">2</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">2</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">2</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">2</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">1</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">1</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">1</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">1</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number-separator">,</div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">7</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">7</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">7</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">7</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">7</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">7</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">7</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">7</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">5</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">5</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">5</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">5</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number-separator">,</div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">0</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">0</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">0</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">0</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">6</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">6</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">6</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">6</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">6</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">6</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">6</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">6</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number-separator">,</div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">4</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">4</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">4</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">4</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">4</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">4</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">4</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">4</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div><div class="page-home-link-shortener-counter-number"><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">3</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-to"><span class="page-home-link-shortener-counter-number-card-value">3</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-top page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">3</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span><span class="page-home-link-shortener-counter-number-card page-home-link-shortener-counter-number-card-bottom page-home-link-shortener-counter-number-card-from"><span class="page-home-link-shortener-counter-number-card-value">3</span><span class="page-home-link-shortener-counter-number-card-shadow"></span></span></div></div>
		
		<!-- ************************************************** -->
		<!-- END: HOME LINK SHORTENER COUNTER                   -->
		<!-- ************************************************** -->
		
		<div class="row">	
			
			<div class="col-small-10 col-small-offset-1 col-medium-10 col-medium-offset-1 col-large-8 col-large-offset-2">
				
				<h2 class="centered flush-top">
					
					Links Shortened Worldwide
					
				</h2>
				
				<div class="row">	
					
					<div class="col-mini-8 col-mini-offset-2 col-small-6 col-small-offset-3 col-medium-6 col-medium-offset-3 col-large-6 col-large-offset-3">

						
<form method="POST" action="shorten.php" id="form-header-link-shortener" class="link-shortener flush-bottom">
	
	<div class="input-group flush-bottom" id="form-header-link-shortener-url-input-group">
		
		<input type="text" name="url" placeholder="Paste a link to shorten it" id="url" autocomplete="off" autocorrect="off" autocapitalize="off" class="flush-bottom " required>
		
		 

		<div class="add-on-group add-on-append">
			
			<button class="button button-primary" type="submit" id="link-shortener-url-button">
				
				Shorten
				
			</button>
			
		</div>
			
	</div>
	
</form>						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<!-- ************************************************** -->
<!-- END: HOME LINK SHORTENER                           -->
<!-- ************************************************** -->

<!-- ************************************************** -->
<!-- BEGIN: HOME TRUST                                  -->
<!-- ************************************************** -->

<div id="page-home-trust" class="stage-pod">

	<div class="container container-pod container-pod-tall">
		
		<!-- ************************************************** -->
		<!-- BEGIN: HOME TRUST WELL                             -->
		<!-- ************************************************** -->
		
		<div class="page-home-trust-well">
			
			<div class="row">	
				
				<div class="col-small-8 col-small-offset-2 col-medium-12 col-medium-offset-0 col-large-8 col-large-offset-2">
					
					<h2 class="centered">
						
						<span>
							
							Trusted by the smartest brands
							
						</span>
						
					</h2>
					
					<p class="lead centered flush-bottom">
						
						Fitly is the trusted resource for brands looking to own, understand and activate their audiences.
						
					</p>
					
				</div>
				
			</div>
			
			<!-- ************************************************** -->
			<!-- BEGIN: HOME TRUST LOGOS                            -->
			<!-- ************************************************** -->
			
			<div class="page-home-trust-logos">
				
				<div class="page-home-trust-logo page-home-trust-logo-american-eagle">
					
					<span>
						
						American Eagle
						
					</span>
					
				</div>
				
				<div class="page-home-trust-logo page-home-trust-logo-nike">
					
					<span>
						
						Nike
						
					</span>
					
				</div>
				
				<div class="page-home-trust-logo page-home-trust-logo-keurig">
					
					<span>
						
						Keurig
						
					</span>
					
				</div>
				
				<div class="page-home-trust-logo page-home-trust-logo-progressive">
					
					<span>
						
						Progressive
						
					</span>
					
				</div>
				
				<div class="page-home-trust-logo page-home-trust-logo-buzzfeed">
					
					<span>
						
						BuzzFeed
						
					</span>
					
				</div>
				
				<div class="page-home-trust-logo page-home-trust-logo-ebay">
					
					<span>
						
						eBay
						
					</span>
					
				</div>
				
				<div class="page-home-trust-logo page-home-trust-logo-ge">
					
					<span>
						
						GE
						
					</span>
					
				</div>
				
				<div class="page-home-trust-logo page-home-trust-logo-ticketfly">
					
					<span>
						
						TicketFly
						
					</span>
					
				</div>
				
				<div class="page-home-trust-logo page-home-trust-logo-ben-and-jerrys">
					
					<span>
						
						Ben &amp; Jerry's
						
					</span>
					
				</div>
				
				<div class="page-home-trust-logo page-home-trust-logo-chegg">
					
					<span>
							
						Juicy Couture
							
					</span>
					
				</div>
				
			</div>
			
			<!-- ************************************************** -->
			<!-- END: HOME TRUST LOGOS                              -->
			<!-- ************************************************** -->
			
		</div>
		
		<!-- ************************************************** -->
		<!-- END: HOME TRUST WELL                               -->
		<!-- ************************************************** -->
		
		<!-- ************************************************** -->
		<!-- BEGIN: HOME TRUST QUOTES                           -->
		<!-- ************************************************** -->
		
		<div class="page-home-trust-quotes vertically-balanced" id="page-home-trust-quotes">
			
			<div class="page-home-trust-quotes-spacer">
				
				<div class="vertically-balanced-column" style="height: 291px;"><div class="vertically-balanced-column-inner">
				</div></div>
				
			</div>
			<!-- ************************************************** -->
			<!-- BEGIN: HOME TRUST QUOTE                            -->
			<!-- ************************************************** -->
			
			<div class="page-home-trust-quote inactive  after-2">
				
				<div class="vertically-balanced-column vertically-balanced-column-center-vertical" style="height: 291px; position: relative;"><div class="vertically-balanced-column-inner" style="margin-top: -116.5px; top: 50%; position: absolute; width: 100%;">
					
					<div class="row">
						
						<div class="col-12 col-small-8 col-small-offset-2 col-medium-8 col-medium-offset-2 col-large-6 col-large-offset-3">
							
							<p class="page-home-trust-quote-body lead">

								"Fitly provides me with the insights I need for all my social channels to build robust monthly reports and optimize my social marketing."

							</p>
							
							<span class="page-home-trust-quote-image">
								
								<img src="./Bitly - The Power of the Link_files/page-home-trust-quote-spotify.png">
								
							</span>
							
							<h5 class="page-home-trust-quote-author">
								
								Joshua Karpf
								
							</h5>
							
							<span class="page-home-trust-quote-source">
								
								Global Director, Social Marketing, Spotify
								
							</span>
							
						</div>
						
					</div>
					
				</div></div>
				
			</div>
				
			<!-- ************************************************** -->
			<!-- END: HOME TRUST QUOTE                              -->
			<!-- ************************************************** -->
			

			<!-- ************************************************** -->
			<!-- BEGIN: HOME TRUST QUOTE                            -->
			<!-- ************************************************** -->
			
			<div class="page-home-trust-quote inactive before-1">
				
				<div class="vertically-balanced-column vertically-balanced-column-center-vertical" style="height: 291px; position: relative;"><div class="vertically-balanced-column-inner" style="margin-top: -131px; top: 50%; position: absolute; width: 100%;">
					
					<div class="row">
						
						<div class="col-12 col-small-8 col-small-offset-2 col-medium-8 col-medium-offset-2 col-large-6 col-large-offset-3">
							
							<p class="page-home-trust-quote-body lead">

								"Fitly provides services we couldn't find anywhere else - from customized branded links to stats that let us know in real time what's working and what's not. Without question, it's one of our most valuable social media tools."

							</p>
							
							<span class="page-home-trust-quote-image">
								
								<img src="./Bitly - The Power of the Link_files/page-home-trust-quote-urban-institute.png">
								
							</span>
							
							<h5 class="page-home-trust-quote-author">
								
								Nicole Levins
								
							</h5>
							
							<span class="page-home-trust-quote-source">
								
								Content and Social Media Strategist, Urban Institute
								
							</span>
							
						</div>
						
					</div>
					
				</div></div>
				
			</div>
				
			<!-- ************************************************** -->
			<!-- END: HOME TRUST QUOTE                              -->
			<!-- ************************************************** -->	

			<!-- ************************************************** -->
			<!-- BEGIN: HOME TRUST QUOTE                            -->
			<!-- ************************************************** -->
			
			<div class="page-home-trust-quote    active">
				
				<div class="vertically-balanced-column vertically-balanced-column-center-vertical" style="height: 291px; position: relative;"><div class="vertically-balanced-column-inner" style="margin-top: -145.5px; top: 50%; position: absolute; width: 100%;">
					
					<div class="row">
						
						<div class="col-12 col-small-8 col-small-offset-2 col-medium-8 col-medium-offset-2 col-large-6 col-large-offset-3">
							
							<p class="page-home-trust-quote-body lead">
								
								"Fitly helps us centralize article-level analytics for all the content on our site, which gives us a clearer picture of where it's performing well and why. The ability to integrate our Bitly API key with third-party platforms such as Buffer, TweetDeck, our CMS and more is a valuable tool."

							</p>
							
							<span class="page-home-trust-quote-image">
								
								<img src="./Bitly - The Power of the Link_files/page-home-trust-quote-ny-daily-news.png">
								
							</span>
							
							<h5 class="page-home-trust-quote-author">
								
								Brad Gerick
								
							</h5>
							
							<span class="page-home-trust-quote-source">
								
								Director of Social Media, New York Daily News
								
							</span>
							
						</div>
						
					</div>
					
				</div></div>
				
			</div>
				
			<!-- ************************************************** -->
			<!-- END: HOME TRUST QUOTE                              -->
			<!-- ************************************************** -->
				
			<!-- ************************************************** -->
			<!-- BEGIN: HOME TRUST QUOTE                            -->
			<!-- ************************************************** -->
			
			<div class="page-home-trust-quote inactive   after-1">
				
				<div class="vertically-balanced-column vertically-balanced-column-center-vertical" style="height: 291px; position: relative;"><div class="vertically-balanced-column-inner" style="margin-top: -131px; top: 50%; position: absolute; width: 100%;">
					
					<div class="row">
						
						<div class="col-12 col-small-8 col-small-offset-2 col-medium-8 col-medium-offset-2 col-large-6 col-large-offset-3">
							
							<p class="page-home-trust-quote-body lead">
								
								"Branding is extremely important to us. Having our own Branded Short Domain through Fitly Brand Tools helps us keep our brand at the forefront of all our social sharing efforts."
								
							</p>
							
							<span class="page-home-trust-quote-image">
								
								<img src="./Bitly - The Power of the Link_files/page-home-trust-quote-bite-ehsanipour-image.png">
								
							</span>
							
							<h5 class="page-home-trust-quote-author">
								
								Bita Ehsanipour
								
							</h5>
							
							<span class="page-home-trust-quote-source">
								
								Social Media Manager, Men's Wearhouse
								
							</span>
							
						</div>
						
					</div>
					
				</div></div>
				
			</div>
				
			<!-- ************************************************** -->
			<!-- END: HOME TRUST QUOTE                              -->
			<!-- ************************************************** -->
			
		</div>
		
		<!-- ************************************************** -->
		<!-- END: HOME TRUST QUOTES                             -->
		<!-- ************************************************** -->
		
	</div>
	
</div>

<!-- ************************************************** -->
<!-- END: HOME TRUST                                    -->
<!-- ************************************************** -->


	<!-- ************************************************** -->
	<!-- BEGIN: HOME TWITTER                                -->
	<!-- ************************************************** -->

	<div id="page-home-twitter" class="stage-pod stage-pod-light">
		
		<div class="container container-pod">
			
			<h5 class="centered tall has-icon has-icon-medium">
				
				<a href="#" target="_blank">
					
					<i class="icon icon-medium icon-color icon-twitter"></i>@Fitly Love on Twitter
					
				</a>
				
			</h5>
			
		</div>
		
		<!-- ************************************************** -->
		<!-- BEGIN: HOME TWITTER STREAM                         -->
		<!-- ************************************************** -->

		<div id="page-home-twitter-stream-wrapper">
			
			<div class="container">
				
				<ul class="page-home-twitter-stream" id="page-home-twitter-stream">

												
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive       before-7">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p><a target="_blank" href="#">@Fitly</a> Shortening my links and monitoring the power of their performance :) <a target="_blank" href="https://twitter.com/hashtag/PowerOfTheLink?src=hash">#PowerOfTheLink</a> Brilliant!</p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/zqvlTVfR_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en.html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Kelly Long												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@Inspiration4T												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive      before-6">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>Ever since I've been using <a target="_blank" href="#">@Fitly</a> has made social media so much easier! Thanks! <a target="_blank" href="https://twitter.com/hashtag/PowerOfTheLink?src=hash">#PowerOfTheLink</a></p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/twitterCGlogo_normal.gif">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(1).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Capability Group												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@Capabilityblogs												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive     before-5">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p><a target="_blank" href="#">@Fitly</a> As someone who uses Bitly everyday, I love the redesign. Kudos and congrats on a job well done.</p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/2009_bio_photo_-242_normal.jpg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-2" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(2).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Michael E. Rubin												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@merubin												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive    before-4">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>I really appreciated <a target="_blank" href="#">@Fitly</a> 'Christmas's card'. Check it out, people: <a target="_blank" href="http://t.co/2d6BFDRtLp">http://t.co/2d6BFDRtLp</a></p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/MPURppIz_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-3" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(3).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												ana c!ara otoni												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@anaclaraotoni												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive   before-3">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>Nice to see <a target="_blank" href="#">@Fitly</a> doing its bit for charity with the hope.ly links</p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/oMryl3Um_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-4" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(4).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												JamesDAllen												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@James_D_Allen_												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive  before-2">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>the year recap in pop culture, the <a target="_blank" href="https://twitter.com/Bitly">@Fitly</a>  way <a target="_blank" href="http://t.co/fbSespjUAk">http://t.co/fbSespjUAk</a></p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/PHN31F6C_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-5" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(5).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Laurence Lafforgue												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@LaurenceLafforg												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive before-1">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>Thanks <a target="_blank" href="#">@Fitly</a> for making a great free <a target="_blank" href="https://twitter.com/hashtag/urlshortner?src=hash">#urlshortner</a> with data stats <a target="_blank" href="https://twitter.com/hashtag/ThingsThatMakeMyHeartSmile?src=hash">#ThingsThatMakeMyHeartSmile</a></p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/ExR0xE3s_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-6" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(6).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Maria Harrington												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@Mmmariaharr												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet        active">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>Discovering the joys (and benefits) of <a target="_blank" href="#">@Fitly</a>.</p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/CI45pt4-_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-7" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(7).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Cynthia Mendoza												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@writercynthiam												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive        after-1">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>As if I didn't love <a target="_blank" href="https://twitter.com/hashtag/bitly?src=hash">#bitly</a> enough! Create a Hope.ly Bitlink to + a donation ribbon to the shared page &amp; support <a target="_blank" href="https://twitter.com/RedCross">@RedCross</a>: hope.ly <a target="_blank" href="https://twitter.com/hashtag/hopely?src=hash">#hopely</a></p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/me_normal">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-8" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(10).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Jaclyn Karabinas												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@JKarabinas												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive        after-2">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>I really appreciated <a target="_blank" href="#">@Fitly</a> 'Christmas's card'. Check it out, people: <a target="_blank" href="#">http://t.co/2d6BFDRtLp</a></p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/MPURppIz_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-9" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(11).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												ana c!ara otoni												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@anaclaraotoni												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive        after-3">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>Thanks <a target="_blank" href="#">@Fitly</a> for making a great free <a target="_blank" href="https://twitter.com/hashtag/urlshortner?src=hash">#urlshortner</a> with data stats <a target="_blank" href="https://twitter.com/hashtag/ThingsThatMakeMyHeartSmile?src=hash">#ThingsThatMakeMyHeartSmile</a></p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/ExR0xE3s_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-10" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(8).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Maria Harrington												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@Mmmariaharr												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive        after-4">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p><a target="_blank" href="#">@Fitly</a> is by far the Best Internet Product I've come across. Hats off.</p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/scW0isMp_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-11" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(9).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Akshay Rajpurohit												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@TheRajpurohit												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive        after-5">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>I love <a target="_blank" href="#">@Fitly</a>; it's so clutch!!</p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/UMNs4vnx_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-12" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(12).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												TJ Jefferson												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@TJayPR												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive        after-6">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p>Pretty sure I'm not as outwardly thankful for <a target="_blank" href="#">@Fitly</a> as I should be. So... THANK YOU!!!</p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/UmS7YlJ3_normal.jpeg">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-13" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(13).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Luci												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@lucismorsels												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
														
							<!-- ************************************************** -->
							<!-- BEGIN: HOME TWITTER STREAM TWEET                   -->
							<!-- ************************************************** -->
							
							<li class="page-home-twitter-stream-tweet inactive        after-7">

								<span class="page-home-twitter-stream-tweet-bubble">
									
									<div class="page-home-twitter-stream-tweet-bubble-text">
										
										<div class="twitter-tweet"><p><a target="_blank" href="https://twitter.com/hughker">@hughker</a> Hi Winston, of course we love <a target="_blank" href="#">@Fitly</a>! The links in your screenshot go to their social profiles.</p></div>										
									</div>
									
									<div class="page-home-twitter-stream-tweet-bubble-details">
										
										<div class="page-home-twitter-stream-tweet-bubble-details-actions">
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-reply"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-retweet"></i>
												
											</a>
											
											<a href="#" target="_blank" class="page-home-twitter-stream-tweet-bubble-details-action">
												
												<i class="icon icon-mini icon-star"></i>
												
											</a>
																				
										</div> 
										
									</div> 
									
									<span class="page-home-twitter-stream-tweet-bubble-tail">
									</span>
									
								</span>
								
								<span class="page-home-twitter-stream-tweet-attribution">
									
									<span class="page-home-twitter-stream-tweet-attribution-avatar">
										
										<a href="#" target="_blank">
											
											<img src="./Bitly - The Power of the Link_files/GEPB7aLh_normal.png">
											
										</a>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-actions">
										
										<iframe id="twitter-widget-14" scrolling="no" frameborder="0" allowtransparency="true" src="./Bitly - The Power of the Link_files/follow_button.f6414cc724dad41fd3c4f40fe19888fd.en(14).html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
										
									</span>
									
									<span class="page-home-twitter-stream-tweet-attribution-author">
										
										<h6 class="page-home-twitter-stream-tweet-attribution-author-name flush-bottom">
											
											<a href="#" target="_blank">
												
												Firefox												
											</a>
											
										</h6>
										
										<p class="page-home-twitter-stream-tweet-attribution-author-username flush-bottom">
											
											<a href="#" target="_blank">
												
												@firefox												
											</a>
											
										</p>
										
									</span>
									
								</span>
								
							</li>
							
							<!-- ************************************************** -->
							<!-- END: HOME TWITTER STREAM TWEET                     -->
							<!-- ************************************************** -->
						
												
				</ul>
				
			</div>
		
			<a href="#" class="page-home-twitter-stream-navigation page-home-twitter-stream-navigation-previous" id="page-home-twitter-stream-navigation-previous">
				
				<i class="icon icon-large icon-color icon-caret-left">
				</i>
				
				<span>
					
					Previous
					
				</span>
				
			</a>
			
			<a href="#" class="page-home-twitter-stream-navigation page-home-twitter-stream-navigation-next" id="page-home-twitter-stream-navigation-next">
				
				<i class="icon icon-large icon-color icon-caret-right">
				</i>
				
				<span>
					
					Next
					
				</span>
				
			</a>
			
		</div>

		<!-- ************************************************** -->
		<!-- END: HOME TWITTER STREAM                           -->
		<!-- ************************************************** -->
		
	</div>

	
<!-- ************************************************** -->
<!-- END: HOME TWITTER                                  -->
<!-- ************************************************** -->

		
		</div>
		
		<!-- ************************************************** -->
		<!-- END: PAGE CONTENT                                  -->
		<!-- ************************************************** -->
		
	</div>
	
	<!-- ************************************************** -->
	<!-- END: PAGE                                          -->
	<!-- ************************************************** -->
	
	<!-- ************************************************** -->
<!-- BEGIN: FOOTER                                      -->
<!-- ************************************************** -->

<footer id="footer" role="contentinfo" data-template="stage-footer">
	
	<!-- ************************************************** -->
	<!-- BEGIN: FOOTER (SIGNUP)                             -->
	<!-- ************************************************** -->
	
	<section class="stage-pod stage-pod-dark footer-signup">
		
		<div class="container container-pod">
			
			<div class="button-toolbar button-toolbar-centered tall footer-signup-button-toolbar">

						
			<a href="#" class=" button button-primary button-large" data-form-subtitle="Just trying to shorten a link? &lt;a href=&quot;https://bitly.com/a/sign_up&quot;&gt;Click here&lt;/a&gt;" data-form-title="Get Started" data-formid="1028" data-pid="234" data-modal="#modal-form" thankyou-in-modal="true">
						
				Get Started Today
			</a>
				
							
			</div>
			
			<p class="centered lead inverse flush-bottom">
				
				Have a question about Fitly Brand Tools? Give us a call. 
				
			</p>
			
			<h3 class="centered flush-top flush-bottom footer-signup-phone">
				
				<a href="tel:18778383689">
					
					877-838-3689
					
				</a>
				
			</h3>
			
		</div>
		
	</section>
	
	<!-- ************************************************** -->
	<!-- END: FOOTER (SIGNUP)                               -->
	<!-- ************************************************** -->
	
	<section class="stage-pod">
		
		<div class="container container-pod">
			
			<!-- ************************************************** -->
			<!-- BEGIN: FOOTER (LINKS)                              -->
			<!-- ************************************************** -->
			
			<div class="footer-links">
				
				<ul id="menu-footer-menu" class="nav footer-nav clearfix"><li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="#">About</a></li>
<li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261"><a href="#">Contact</a></li>
<li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="#">Support</a></li>
<li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="#">Developers</a></li>
<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="#">Careers</a></li>
<li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20"><a href="#">Blog</a></li>
</ul>				
			</div>
			
			<!-- ************************************************** -->
			<!-- END: FOOTER (LINKS)                                -->
			<!-- ************************************************** -->
			
			<!-- ************************************************** -->
			<!-- BEGIN: FOOTER (ATTRIBUTION)                        -->
			<!-- ************************************************** -->
			
			<div class="footer-attribution">
				 
				<a href="./Bitly - The Power of the Link_files/Bitly - The Power of the Link.html" class="footer-logo">
					
					<span>
						
						Bitly
						
					</span>
					
				</a>
				
				<p class="small source-org copyright">
					
					© 2015 Fitly™&nbsp;&nbsp;Handmade in NYC
					
				</p>
				
			</div>
			
			<!-- ************************************************** -->
			<!-- END: FOOTER (ATTRIBUTION)                          -->
			<!-- ************************************************** -->
			
			<!-- ************************************************** -->
			<!-- BEGIN: FOOTER (SOCIAL LINKS)                       -->
			<!-- ************************************************** -->
			
			<ul class="footer-social-links">
				
				<li class="footer-social-link footer-social-link-facebook">
					
					<a href="#" target="_blank">
						
						<span>
							
							Facebook
							
						</span>
						
					</a>
					
				</li>
				
				<li class="footer-social-link footer-social-link-twitter">
					
					<a href="#" target="_blank">
						
						<span>
							
							Twitter
							
						</span>
						
					</a>
					
				</li>
				
				<li class="footer-social-link footer-social-link-google">
					
					<a href="#" target="_blank">
						
						<span>
							
							Google+
							
						</span>
						
					</a>
					
				</li>
				
				<li class="footer-social-link footer-social-link-linkedin">
					
					<a href="#" target="_blank">
						
						<span>
							
							LinkedIn
							
						</span>
						
					</a>
					
				</li>
				
				<li class="footer-social-link footer-social-link-instagram">
					
					<a href="#" target="_blank">
						
						<span>
							
							Instagram
							
						</span>
						
					</a>
					
				</li>
				
			</ul>
			
			<!-- ************************************************** -->
			<!-- END: FOOTER (SOCIAL LINKS)                         -->
			<!-- ************************************************** -->
			
			<!-- ************************************************** -->
			<!-- BEGIN: FOOTER (SOCIAL LINKS)                       -->
			<!-- ************************************************** -->
			
			<ul class="footer-attribution-links flush-bottom">
				
				<li class="footer-attribution-link">
					
					<a href="#" target="_blank">
						
						<span>
							
							Terms Of Service
							
						</span>
						
					</a>
					
				</li>
				
				<li class="footer-attribution-link">
					
					<a href="#" target="_blank">
						
						<span>
							
							Privacy Policy
							
						</span>
						
					</a>
					
				</li>
				
			</ul>
			
		</div>
		
	</section>
	
</footer>

<!-- ************************************************** -->
<!-- END: FOOTER                                        -->
<!-- ************************************************** -->	
	<!-- ************************************************** -->
	<!-- BEGIN: MODALS                                      -->
	<!-- ************************************************** -->

	<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; margin-top: -64px;">
	
	<a class="modal-close" data-dismiss="modal">
		
		<span class="modal-close-title">
			
			Close
			
		</span>
		
		<span class="modal-close-icon">
			
			<i class="icon icon-mini icon-white icon-close"></i>
			
		</span>
		
	</a>
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<div class="modal-header stage-pod">
				
				<div class="container container-fluid container-pod container-pod-short">
					
					<h3 class="modal-title flush-top flush-bottom centered"></h3>
					
					<p class="modal-subtitle centered flush-bottom"></p>
					
				</div>
				
			</div>
			
			<div class="modal-body" style="height: 64px;">
				
				<div class="modal-body-scrollable container-scrollable ps-container">
					
					<div class="modal-body-content container container-fluid container-pod container-pod-short">

						<form class="bitly-form flush-bottom"></form>

						<div class="bitly-form thankyou"></div>

					</div>
					
				<div class="ps-scrollbar-x-rail" style="width: 100px; display: none; left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 100px; display: none; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
				
			</div>
			
		</div>
		
	</div>
	
</div> 

	<!-- ************************************************** -->
	<!-- END: MODALS                                        -->
	<!-- ************************************************** -->
	
</div>

<!-- ************************************************** -->
<!-- END: STAGE                                         -->
<!-- ************************************************** -->

<div id="stage-sidebar">
	
	<div id="stage-sidebar-scrollable" class="container-scrollable ps-container">
		
		<div>
			
			<div class="container container-pod container-pod-short">
				
				<ul id="menu-mobile-menu" class="nav top-nav clearfix"><li id="menu-item-1018" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1018"><a href="./Bitly - The Power of the Link_files/Bitly - The Power of the Link.html">Home</a></li>
<li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-349"><a href="#">Fitly Brand Tools</a>
<ul class="sub-menu">
	<li id="menu-item-347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-347"><a href="#">Links</a></li>
	<li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-346"><a href="#">Audience</a></li>
	<li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a href="#">Activate</a></li>
	<li id="menu-item-1148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1148"><a href="#">Pricing</a></li>
</ul>
</li>
<li id="menu-item-353" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-353"><a href="#">Resources</a></li>
<li id="menu-item-350" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-350"><a href="#">Company</a></li>
<li id="menu-item-352" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-352"><a href="#">Contact</a></li>
<li id="menu-item-355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-355"><a href="#">Careers</a></li>
<li id="menu-item-351" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-351"><a href="#">Press Room</a></li>
<li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="#">Partners</a></li>
</ul>				
			</div>
			
		</div>
		
	<div class="ps-scrollbar-x-rail" style="width: 1359px; display: none; left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 755px; display: none; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
	
</div>		<!-- ************************************************** -->
		<!-- BEGIN: WORDPRESS FOOT                              -->
		<!-- ************************************************** -->
		
 

		<!-- ************************************************** -->
		<!-- END: WORDPRESS FOOT                                -->
		<!-- ************************************************** -->

	
	
	<!-- ************************************************** -->
	<!-- END: BODY                                          -->
	<!-- ************************************************** -->

 </body></html>