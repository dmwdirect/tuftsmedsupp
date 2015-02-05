<!doctype html>
<html><!-- InstanceBegin template="/Templates/Sub 2L 1R_2015.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title></title>
<!-- InstanceEndEditable -->
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link href="fonts/museo.css" rel="stylesheet" type="text/css">
<link href="css/anythingslider.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- InstanceParam name="bodyclass" type="text" value="bg_sub enr" -->
<!-- InstanceParam name="Sub Nav" type="boolean" value="false" -->
<!-- InstanceParam name="Headline" type="boolean" value="true" -->
<!-- InstanceParam name="Bottom Callouts" type="boolean" value="false" -->
<!-- InstanceParam name="Resources" type="boolean" value="false" -->
<!-- InstanceParam name="Articles" type="boolean" value="false" -->

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
</head>
<body class="bg_sub enr">
<!-- NAV BAR BEGINS -->
<?php require_once('inc/mainnav.php'); ?>
<!-- NAV BAR ENDS -->
<div id="header">
<div class="container">
<div id="logo"><a href="index.php"><img src="img/THCMP.png" alt="Tufts Health Plan Medicare Preferred"></a></div>
<h1><!-- InstanceBeginEditable name="Page Header" -->Enroll<!-- InstanceEndEditable --></h1>
</div>
</div>

</div>
<div class="container">
<div class="right1col"><!-- InstanceBeginEditable name="Shadow Callouts" -->
  <?php require_once('inc/box_requestakit.php'); ?>
  <?php require_once('inc/box_learn.php'); ?>
<!-- InstanceEndEditable -->
  <div class="clearfix"></div>
  <!-- InstanceBeginEditable name="Secondary Callouts" -->
  <?php require_once('inc/box_allplandocs.php'); ?>
  <!-- InstanceEndEditable --></div>
<div class="left2col pull-left">
  <h2><!-- InstanceBeginEditable name="Headline" -->Ready to Enroll?<!-- InstanceEndEditable --></h2>
<!-- InstanceBeginEditable name="Content" -->
<h3>Choose your preferred method of enrolling from <br>
  these easy and convenient options.</h3>
<div class="enrolloptions">
<ul>
<li><img src="img/icon_computer.jpg" alt="online">
  <h3>Online</h3>
<p>Enrolling in a plan offered by Tufts Health Plan Medicare Preferred online is secure, quick and seamless through our Online Enrollment Center. You will be done in just a few minutes.</p>
<p><a href="https://www.dialamerica.com/tufts/Default.aspx" class="btn btn-turqlarge btn-large">Enroll Now</a></p>
<p class="external_message">By clicking on this link, you will be leaving the Tufts Health Plan Medicare Preferred Website.</p>
</li>
<hr>
<li><img src="img/icon_mail.jpg" alt="mail">
  <h3>By Mail</h3>
<p>If you prefer, you can mail or fax us (1-617-972-9475)  a completed application at your convenience. <a href="pdf/2015-MS-Individual-Enrollment.pdf" target="_blank">Download enrollment forms here</a>.</p>
<p><b>Request for it to be mailed to you:</b><br>
  <a href="request-a-kit.php">Request a sales kit online</a> or call us and we can mail an enrollment form directly to your home.</p>
<p><b>Mail Completed Forms to:</b><br>
Tufts Health Plan Medicare Preferred<br>
705 Mt. Auburn Street<br>
Watertown, MA 02472-1508</p>
<p><b>Fax Completed Forms to:</b><br>
1-617-972-9475</p>
</li>
<hr>
<li><img src="img/icon_phone.jpg" alt="mail" width="113" height="104">
  <h3>By Phone</h3>
  <div id="stcpDiv">
    <p>Our representatives are happy to take your application over the phone. Just call seven days a week, 8:00 a.m. - 8:00 p.m.</p>
    <p><b>Call 1-877-442-3146  (TTY: 1-888-899-8977)</b><br>Monday - Friday, 8:00 a.m. - 8:00 p.m. (7 days a week from October 1 - February 14). After hours and on holidays, please leave a message and we’ll get back to you the next business day.</p>
  </div>
  <p>&nbsp;</p>
</li></ul>
</div>
<!-- InstanceEndEditable --></div>

</div>
<!-- FOOTER BEGINS -->
<?php require_once('inc/footer2015.php'); ?>
<!-- FOOTER ENDS -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
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

<!-- InstanceBeginEditable name="Bottom Scripts" --><!-- InstanceEndEditable -->
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
        </script>
        <!-- Google Code for Remarketing Tag -->
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
<!-- InstanceEnd --></html>
