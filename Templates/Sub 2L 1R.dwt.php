<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title></title>
<!-- TemplateEndEditable -->
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link href="../fonts/museo.css" rel="stylesheet" type="text/css">
<link href="../css/anythingslider.css" rel="stylesheet" type="text/css">
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<!-- TemplateParam name="bodyclass" type="text" value="bg_sub learn" -->
<!-- TemplateParam name="Sub Nav" type="boolean" value="true" -->
<!-- TemplateParam name="Headline" type="boolean" value="true" -->
<!-- TemplateParam name="Bottom Callouts" type="boolean" value="true" -->
<!-- TemplateParam name="Resources" type="boolean" value="false" -->
<!-- TemplateParam name="Articles" type="boolean" value="false" -->

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
<body class="@@(_document['bodyclass'])@@">
<!-- NAV BAR BEGINS -->
<?php require_once('../inc/mainnav.php'); ?>
<!-- NAV BAR ENDS -->
<div id="header">
<div class="container">
<div id="logo"><a href="../index.php"><img src="../img/THCMP.png" alt="Tufts Health Plan Medicare Preferred"></a></div>
<h1><!-- TemplateBeginEditable name="Page Header" -->Learn<!-- TemplateEndEditable --></h1>
</div>
</div>
<!-- TemplateBeginIf cond="_document['Sub Nav']" -->
<div id="subnav">
  <div class="container">
    <ul>
      <!-- TemplateBeginRepeat name="Sub Nav Item" -->
        <li><!-- TemplateBeginEditable name="Sub Nav Link" --><a href="../compare.php">Overview</a>&nbsp;&nbsp;&nbsp;|<!-- TemplateEndEditable --></li>
      <!-- TemplateEndRepeat -->
    </ul>
  </div>
</div>
<!-- TemplateEndIf -->
</div>
<div class="container">
<div class="right1col"><!-- TemplateBeginEditable name="Shadow Callouts" -->
  <?php require_once('../inc/box_requestakit.php'); ?>
  <?php require_once('../inc/box_enroll.php'); ?>
<!-- TemplateEndEditable -->
  <div class="clearfix"></div>
  <!-- TemplateBeginEditable name="Secondary Callouts" -->
  <?php require_once('../inc/box_allplandocs.php'); ?>
  <!-- TemplateEndEditable --></div>
<div class="left2col pull-left"><!-- TemplateBeginIf cond="_document['Headline']" -->
  <h2><!-- TemplateBeginEditable name="Headline" -->Headline<!-- TemplateEndEditable --></h2>
<!-- TemplateEndIf --><!-- TemplateBeginEditable name="Content" -->
<p>Main content</p>
<h3>Subhead</h3>
<!-- TemplateEndEditable --><!-- TemplateBeginIf cond="Articles" --><div class="litebluebox rounded articles">
<h3>Helpful Educational Articles</h3>
<p>We know staying healthy is important to you. That's why we strive to provide you with information, resources and educational seminars that will help you lead a healthy, active lifestyle.</p><ul>
<!-- TemplateBeginRepeat name="Article" --><li><div class="article_image"><!-- TemplateBeginEditable name="Article Image" --><!-- TemplateEndEditable --></div><h4><!-- TemplateBeginEditable name="Article Headline" -->Article Headline<!-- TemplateEndEditable --></h4>
<p><!-- TemplateBeginEditable name="Article Description" -->

<!-- TemplateEndEditable --> <!-- TemplateBeginEditable name="Article Link" --><a href="#">view article</a><!-- TemplateEndEditable --></p>
<!-- TemplateEndRepeat --></li></ul><p><a href="http://www.tuftsmedicarepreferred.org/member-resources-stay-healthy" target="_blank">View all articles</a></p>
<div class="external_message" align="center">By clicking on the links above, you will be leaving the Tufts Health Plan Medicare Preferred Website.</div>
</div><!-- TemplateEndIf --><!-- TemplateBeginIf cond="_document['Resources']" -->
<div class="bottom_components">
<div class="component litebluebox rounded websites">
<h3>websites for seniors</h3>
<ul>
<!-- TemplateBeginRepeat name="Link" --><li><!-- TemplateBeginEditable name="Website Name" -->Web Links<!-- TemplateEndEditable --><br>
  <!-- TemplateBeginEditable name="Web Link" -->Web Link<!-- TemplateEndEditable --></li>
<!-- TemplateEndRepeat --></ul>
<div class="external_message">By clicking on the links above, you will be leaving the Tufts Health Plan Medicare Preferred Website.</div>
</div>
<div class="component litegreybox rounded tips">
<h3>TIP OF THE MONTh</h3>
<h4><!-- TemplateBeginEditable name="Tip Headline" -->Tip Headline<!-- TemplateEndEditable --></h4>
<p><!-- TemplateBeginEditable name="Tip Content" -->Tip content
<!-- TemplateEndEditable --></p></div></div>
<!-- TemplateEndIf --><!-- TemplateBeginIf cond="_document['Bottom Callouts']" -->
<div class="bottom_components"><!-- TemplateBeginEditable name="Bottom Callouts" -->
<?php require_once('../inc/box_medsup.php'); ?>
<?php require_once('../inc/box_65bday.php'); ?>
<!-- TemplateEndEditable --></div>
<!-- TemplateEndIf --></div>

</div>
<!-- FOOTER BEGINS -->
<?php require_once('../inc/footer.php'); ?>
<!-- FOOTER ENDS -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/jquery.cookie.js"></script>
        <!-- Anything Slider --> 
	<script src="../js/jquery.anythingslider.js"></script>

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
<script type="text/javascript" src="../js/highlightNav.js"></script>

<!-- TemplateBeginEditable name="Bottom Scripts" --><!-- TemplateEndEditable -->
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
</html>
