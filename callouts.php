<!doctype html>
<html><!-- InstanceBegin template="/Templates/Sub 2L 1R.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
<!-- InstanceParam name="bodyclass" type="text" value="bg_sub learn" -->
<!-- InstanceParam name="Sub Nav" type="boolean" value="false" -->
<!-- InstanceParam name="Headline" type="boolean" value="false" -->
<!-- InstanceParam name="Bottom Callouts" type="boolean" value="true" -->
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
<body class="bg_sub learn">
<!-- NAV BAR BEGINS -->
<?php require_once('inc/mainnav.php'); ?>
<!-- NAV BAR ENDS -->
<div id="header">
<div class="container">
<div id="logo"><a href="index.php"><img src="img/THCMP.png" alt="Tufts Health Plan Medicare Preferred"></a></div>
<h1><!-- InstanceBeginEditable name="Page Header" -->Callouts<!-- InstanceEndEditable --></h1>
</div>
</div>

</div>
<div class="container">
<div class="right1col"><!-- InstanceBeginEditable name="Shadow Callouts" -->
  <?php require_once('inc/box_requestakit.php'); ?>
  <?php require_once('inc/box_enroll.php'); ?>
    <?php require_once('inc/box_learn.php'); ?>

<!-- InstanceEndEditable -->
  <div class="clearfix"></div>
  <!-- InstanceBeginEditable name="Secondary Callouts" -->

  <!-- InstanceEndEditable --></div>
<div class="left2col pull-left"><!-- InstanceBeginEditable name="Content" -->
<!-- InstanceEndEditable -->
<div class="bottom_components"><!-- InstanceBeginEditable name="Bottom Callouts" -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="200"><?php require_once('inc/box_medsup.php'); ?>
<?php require_once('inc/box_65bday.php'); ?></td>
  </tr>
  <tr>
    <td height="190"><?php require_once('inc/box_newtomedicare.php'); ?>
  <?php require_once('inc/box_allplandocs.php'); ?></td>
  </tr>
  <tr>
    <td height="150"><?php require_once('inc/box_plancoverage.php'); ?>
</td>
  </tr>
  </table>

  
<!-- InstanceEndEditable --></div>
</div>

</div>
<!-- FOOTER BEGINS -->
<?php require_once('inc/footer.php'); ?>
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

    </body>
<!-- InstanceEnd --></html>
