<?php 

//include database connection details
include('db.php');

//redirect to real link if URL is set
 
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
<!-- saved from url=(0026)https://bitly.com/shorten/ -->
<html class="wf-brandongrotesque-n4-active wf-brandongrotesque-n5-active wf-brandongrotesque-n7-active wf-proximanova-n3-active wf-proximanova-n4-active wf-proximanova-n6-active wf-active"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shorten - Fitly</title>

<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta name="referrer" content="always">
<meta name="keywords" content="bitly, awesome, save, share, shorten">
<meta name="description" content="Bitly. The power of the link.">
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="icon" type="image/png" href="https://dl6fh5ptkejqa.cloudfront.net/0482a3c938673192a591f2845b9eb275.png">
 

<link href="./Shorten - Bitly_files/a4162c7edbe040d265de49e0ac943dc7.css" rel="stylesheet" type="text/css">

 
<style type="text/css">.tk-proxima-nova{font-family:"proxima-nova",sans-serif;}.tk-brandon-grotesque{font-family:"brandon-grotesque",sans-serif;}</style><link rel="stylesheet" href="https://use.typekit.net/c/a153df/1w;brandon-grotesque,2,Y2l:P:n4,Y2n:P:n5,Y2q:P:n7;proxima-nova,2,b5t:P:n3,b5w:P:n4,b5y:P:n6/d?3bb2a6e53c9684ffdc9a99f6195b2a6209107d27f153411aa02e79ead27b9554b9b3bba0f104474992de934e2a0aa58f375f0d51a5e848f2f0ba5a6f9715fd9aba48d668bcfc84eeb9cbbf866ff8f010da22d73a2dbe017c57fd3501346abc5e2ffc979fca93c40ab093ceaa4eaff0d0be65e55778689d703f85a3dee7e7b8914dd15185d84b1609540a0cf9a305d78e7a678d0e68bb15b2c4c0bfb213b1d4cd79f2df3a3549a445d2b5785760be33e677379b672dbd4ce4a1d5203b7df46d50b1d5e964e34e211b3d447f1994d35c85847d356fce5f7f1e728ad0030ad017384799d6d9b0ccaa9cea4ae49ca906ca178053a255dbef92959dcf52cdafdf2bbb77a05be65b3f1698e78225ed2cdbaec5a27f4966a410b1044097bb08acefb5241e435dcbfd218ba6043ed6d244b8b8">
</head>
<body class="one-or-more-links has-link" cz-shortcut-listen="true">
<div class="stage">


<header id="header" data-template="stage-header" class="">
<div id="header-inner">
<div class="container container-pod container-pod-short">

<nav  class="navigation" role="navigation"> 
<ul>
<li><a href="http://www.creativevalley.co/url"> <img src="logo.png" alt="asd" width="100px" height="50px""></a></li>
<li><a href="#">Product Tour</a></li>
<li><a href="#">Resources</a></li>
<li><a href="#">Partners</a></li>
<li><a href="#">Sign In</a></li>
<li><a href="#">Sign Up</a></li>
</ul>
</nav>
<a id="header-mobile-menu-button" href="https://bitly.com/shorten/#">
<i class="icon icon-small icon-color icon-menu-open"></i>
<i class="icon icon-small icon-color icon-menu-close"></i>
</a>
</div>
</div>
</header>


<div id="container" class="clearfix">


<div class="container container-pod">
<h1 class="page-title t-center">Fitly Link Shortener</h1>
<div id="form_container" class="t-center mid-container foot-room shorten_active">
<form method="POST" action="" name="shortenUrl" id="unAuthShortenForm">
<fieldset class="cf">
<input id="txturl" taborder="1" name="url" oninput="OnInput (event)" type="text" class="shorten-input" placeholder="Paste a link to shorten it" value="<?php echo $server_name; ?>url/<?php echo $short; ?>" autocomplete="off" autocorrect="off" autocapitalize="off" autofocus>
<input id="shorten_btn" type="submit" class="button button-primary button-large shorten-button" value="Copy">
 
 </form>
 
 </div>
<div id="shortened_info" class="mid-container">
<p id="first_one" class="separator t-center">
<span>Done! You've created your Fitlink</span>
</p>
<ul id="most_recent_link" class="anon_history footroom"><li id="qoBoK" class="shortened_link" data-global_hash="qoBoK" data-short_link="<?php echo $server_name; ?>url/<?php echo $short; ?>" style="display: list-item; opacity: 1; overflow: hidden;"><img class="favicon" src="./Shorten - Bitly_files/qoBoK.png"><div class="unauth_capsule clearfix"><a class="short-url" href="<?php echo $server_name; ?>url/<?php echo $short; ?>"target="_blank"><?php echo $server_name; ?>url/<?php echo $short; ?></a><a class="copy button primary" data-clipboard-text="<?php echo $server_name; ?>url/<?php echo $short; ?>">Copy</a></div><div class="unauth-title-url"><a class="info_page" href="https://bitly.com/qoBoK+"><i class="default fa fa-bar-chart-o"></i> 51</a></div></li></ul>
</div>
<div class="mid-container">
<p id="up_to_10" class="separator t-center">
<span>RECENTLY SHORTENED LINKS</span>
</p>
<ul id="anon_history" class="anon_history"><li id="1cvryb5" class="shortened_link" data-global_hash="1cvryb5" data-short_link="http://bitly.com/1cvryb5"><img class="favicon" src="./Shorten - Bitly_files/1cvryb5.png"><div class="unauth_capsule clearfix"><a class="short-url" href="http://bitly.com/1cvryb5"><span class="protocol">http://</span>bitly.com/1cvryb5</a><a class="copy button primary" data-clipboard-text="http://bitly.com/1cvryb5">Copy</a></div><div class="unauth-title-url"><a class="article-title smaller" href="https://www.youtube.com/watch?v=h2nVWN1jpRw#start=0:00;end=8:12;cycles=-1;autoreplay=true">MAXAMED CIRO IYO ASMA LOVE ( NASAB ) OFFICIAL VIDEO 2015 HD</a><a class="info_page" href="https://bitly.com/1cvryb5+"><i class="default fa fa-bar-chart-o"></i> 44</a></div></li></ul>
</div>
</div>

<div id="bottom">

<form action="" method="get">
<input type="hidden" name="_xsrf" value="db59edabc4bd454c987337ff162169be">
</form>

</div>
</div>


<div id="page-shorten-bitlinks-signup" class="stage-pod stage-pod-light">
<div class="container container-pod container-pod-tall">
<h3 class="flush-top">Shorten For Free</h3>
<p class="lead tall">
Shorten, share and track your Fitlinks as they travel across the web.
</p>
<div class="button-toolbar flush-bottom">
<a href="#" class="button button-primary button-icon-last">
Sign up for Free <i class="white-arrow arrow"></i>
</a>
</div>
</div>
</div>
<div class="container container-pod container-pod-tall">
<div class="mid-container t-center">
<h2 class="flush-top">Fitly Brand Tools</h2>
<p class="lead tall">
Own, understand and activate your best audience through the power of the link. Drive efficiency and performance of your strategy and tactics across all marketing technologies.
</p>
<div class="button-toolbar button-toolbar-centered flush-bottom">
<a href="#" class="button white-button button-icon-last">Learn More <i class="orange-arrow arrow"></i></a>
</div>
</div>
<p class="separator t-center big-margin">
<span>Bitly Brand Tools</span>
</p>
<div class="page-shorten-brand-tools-products">
<div class="page-shorten-brand-tools-product">
<i class="icon icon-jumbo icon-color icon-product-link-builder">
</i>
<h3 class="short">Links</h3>
<p class="flush-bottom">
Shorten your links, control your brand and capture your data. Optimize your marketing tactics to drive engagement.
</p>
</div>
<div class="page-shorten-brand-tools-product col-spill">
<i class="icon icon-jumbo icon-color icon-product-audience-builder"></i>
<h3 class="short">Audience</h3>
<p class="flush-bottom">
Own, analyze and understand your actively engaged audiences across all platforms and devices.
</p>
</div>
<div class="page-shorten-brand-tools-product col-spill">
<i class="icon icon-jumbo icon-color icon-product-audience-activator"></i>
<h3 class="short">Activate</h3>
<p class="flush-bottom">
Target your best audience and connect to the marketing cloud. Engage with your audience beyond standard retargeting.
</p>
</div>
</div>
</div>
<footer id="footer" role="contentinfo" data-template="stage-footer">
<section class="stage-pod stage-pod-dark footer-signup t-center">
<div class="container container-pod">
<div class="button-toolbar button-toolbar-centered tall footer-signup-button-toolbar">
<a href="#" class="bitly-form button button-primary button-large" data-form-subtitle="" data-form-title="Get Started" data-formid="1227" data-pid="234" data-modal="#modal-form" data-nonce="5b8282a361" thankyou-in-modal="true">
Get Started Today
</a>
</div>
<p class="centered lead inverse flush-bottom">
Have a question about Fitly Brand Tools? Give us a call.
</p>
<p class="centered flush-top flush-bottom h3 footer-signup-phone">
<a href="tel:18778383689">
877-838-3689
</a>
</p>
</div>
</section>
<section class="stage-pod">
<div class="container container-pod t-center">
<div class="footer-links">
<ul id="menu-footer-menu" class="nav footer-nav clearfix">
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">Developers</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Blog</a></li>
</ul>
</div>
<div class="footer-attribution">
 <img src="logo.png" alt="asd" width="100px" height="50px"">
<p class="small source-org copyright flush-bottom">
© 2015 Bitly™&nbsp;&nbsp;Handmade in NYC
</p>
</div>
<ul class="footer-social-links">
<li class="footer-social-link footer-social-link-facebook">
<a href="#" target="_blank"></a>
</li>
<li class="footer-social-link footer-social-link-twitter">
<a href="#" target="_blank"></a>
</li>
<li class="footer-social-link footer-social-link-google">
<a href="#" target="_blank"></a>
</li>
<li class="footer-social-link footer-social-link-linkedin">
<a href="#" target="_blank"></a>
</li>
</ul>
<ul class="footer-attribution-links flush-bottom">
<li class="footer-attribution-link">
<a href="#" target="_blank"><span>Terms Of Service</span></a>
</li>
<li class="footer-attribution-link">
<a href="#" target="_blank"><span>Privacy Policy</span></a>
</li>
</ul>
</div>
</section>
</footer>

</div>

<div id="stage-sidebar">
<div id="stage-sidebar-scrollable" class="container-scrollable ps-container">
<div class="container container-pod container-pod-short">
<ul id="menu-mobile-menu" class="nav top-nav clearfix">
<li><a href="#">Home</a></li>
<li><a href="#">Bitly Brand Tools</a>
<ul class="sub-menu">
<li><a href="#">Link Builder</a></li>
<li><a href="#">Audience Builder</a></li>
<li><a href="#">Audience Activator</a></li>
</ul>
</li>
<li><a href="#">Resources</a></li>
<li><a href="#">Company</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Press Room</a></li>
<li><a href="#">Partners</a></li>
</ul>
</div>
</div>
</div>
 
 <script type="text/javascript">
            // Firefox, Google Chrome, Opera, Safari, Internet Explorer from version 9
        function OnInput (event) {
            document.getElementById('shorten_btn').value = "Shorten";
        }
             
</script>

 
 

 <div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 121.28125px; height: 60px; z-index: 999999999;">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/s/beta/flash/ZeroClipboard-1.3.5.swf?noCache=1429095226349">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=bitly.com%2C%2F%2Fbitly.com%2Chttps%3A%2F%2Fbitly.com">         <embed src="/s/beta/flash/ZeroClipboard-1.3.5.swf?noCache=1429095226349" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=bitly.com%2C%2F%2Fbitly.com%2Chttps%3A%2F%2Fbitly.com" scale="exactfit">                </object></div>
 
<style>.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}</style></body></html>