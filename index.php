<!doctype html>
<html>
<head>
<meta charset="UTF-8">
        <title>Tufts Health Plan Medicare Preferred</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="fonts/museo.css" rel="stylesheet" type="text/css">
        <link href="css/anythingslider.css" rel="stylesheet" type="text/css">
        
        <!-- GOOGLE ANALYTICS CODE -->
        <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-46490567-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 </script>
 <!-- END: GOOGLE ANALYTICS CODE -->
    <!-- BEGIN: Marin Software Tracking Script (Landing Page) -->
<script type='text/javascript'>
var _mTrack = _mTrack || [];
_mTrack.push(['trackPage']);
 
(function() {
var mClientId = '63866vd25437';
var mProto = (('https:' == document.location.protocol) ? 'https://' : 'http://');
var mHost = 'tracker.marinsm.com';
 
var mt = document.createElement('script'); mt.type = 'text/javascript'; mt.async = true; mt.src = mProto + mHost + '/tracker/async/' + mClientId + '.js';
var fscr = document.getElementsByTagName('script')[0]; fscr.parentNode.insertBefore(mt, fscr);
})();
</script>
<noscript>
<img width="1" height="1" src="https://tracker.marinsm.com/tp?act=1&cid=63866vd25437&script=no" />
</noscript>
<!-- END: Copyright Marin Software -->
    </head>
    <body class="bg_home">
<!-- NAV BAR BEGINS -->
<?php require_once('inc/mainnav.php'); ?>
<!-- NAV BAR ENDS -->
<div class="rotator">
<div id="logo"><img src="img/THCMP.png" alt="Tufts Health Plan Medicare Preferred"></div>

<ul id="slider">
<li><a href="compare.php"><img src="rotator/1.jpg" width="1100" height="321" /></a></li>
<li><a href="compare.php"><img src="rotator/2.jpg" width="1100" height="321" /></a></li>
<li><a href="compare.php"><img src="rotator/3.jpg" width="1100" height="321" /></a></li>
<li><a href="wellness.php"><img src="rotator/4.jpg" width="1100" height="321" /></a></li>

</ul>
</div>
<div class="container homeboxes">
<?php require_once('inc/box_learn.php'); ?>
<?php require_once('inc/box_requestakit.php'); ?>
<?php require_once('inc/box_enroll.php'); ?>
</div>
</div>
<div class="bg_blue">
<div class="container">
<div class="pull-right">
<div class="right1col">
<div class="home_buttons">
<p><a href="pdf/THPMP_Provider_BRO_2014.pdf" class="btn btn-turq" target="_blank">Learn About Medicare</a></p>
<p><a href="pdf/Tufts_JoiningAfter65.pdf" target="_blank" class="btn btn-turq external">Joining Medicare After Age 65</a></p>
</div>
<div class="rounded questions">
<h2>Questions?</h2>
<h4>Call us at</h4>
<h3>1-877-442-3146<br>
<span>(TTY 1-888-899-8977)</span>
</h3>
<p align="center"><span>Monday - Friday, <br>
  8:00 a.m. - 8:00 p.m. <br>
  (7 days a week from October 1 - February 14). After hours and on holidays, please leave a message and we&rsquo;ll get back to you the next business day.</span></p>
</div>
</div>
</div>
<div class="left2col">
<h2><a href="compare.php">Comparing Medigap plans?</a></h2>
<h3>Tufts Medicare Preferred Supplement plans stand up to <br>
  all the rest. Take a look:</h3>
<ul>
  <li>Comprehensive coverage to fill Medicare&rsquo;s gaps</li>
  <li>Covers hospital stays, doctor visits, outpatient services and more </li>
  <li>Includes valuable wellness extras</li>
  <li>Keep your doctors — or see any doctors that accept Medicare with NO referrals </li>
  <li>Nationwide coverage everywhere Medicare is accepted </li>
  <li>Choice of plans with competitive monthly rates —<br>
$104.76 for Core and $194 for our One plan, a NEW lower premium!</li>
  <li>Virtually no paperwork or claims to file</li>
  <li>Worldwide emergency care</li>
  <li>$150 annual wellness allowance to use for your gym membership, <br>
    nutritional counseling or fitness classes </li>
  </ul>
<h3>Plus great NEW benefits for 2015.</h3>
<p><a href="wellness.php" class="btn btn-turq">Click to learn more</a></p>
</div>

</div>
</div>
<!-- FOOTER BEGINS -->
<?php require_once('inc/footer2015.php'); ?>
<!-- FOOTER ENDS -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <!-- Anything Slider --> 
	<script src="js/jquery.anythingslider.js"></script>

	<!-- AnythingSlider initialization -->
	<script>
		// DOM Ready
		$(function(){
			$('#slider').anythingSlider();
		});
	</script>
<!-- Text Sizer -->
        <script>
 $(document).ready(function() {
 if($.cookie('TEXT_SIZE')) {
  $('body').addClass($.cookie('TEXT_SIZE')); 
 }
 $('.resizer a').click(function() {
  var textSize = $(this).parent().attr('class');
  $('body').removeClass('small medium large').addClass(textSize);
  $.cookie('TEXT_SIZE',textSize, { path: '/', expires: 10000 });
  return false;
 });
});   
</script>
<script type="text/javascript" src="js/highlightNav.js"></script>

	<!-- Older IE stylesheet, to reposition navigation arrows, added AFTER the theme stylesheet -->
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="css/anythingslider-ie.css" type="text/css" media="screen" />
	<![endif]-->
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script><!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 987421455;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/987421455/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script>(function() {

  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '226843240855893']);
})();

window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=226843240855893&amp;ev=PixelInitialized" /></noscript>

    </body>
</html>
