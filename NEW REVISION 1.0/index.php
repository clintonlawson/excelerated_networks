<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Excelerated Networks</title>
<link rel="icon" type="jpg" href="images/icon.jpg">
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="index.css" rel="stylesheet" type="text/css">
<link href="mainarticles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="styles.css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>

</head>
<body>

<?php include_once("top_menu_buttons.php"); ?>

<script type="text/javascript">

var slideimages=new Array()

function slideshowimages()

{

     for (i=0;i<slideshowimages.arguments.length;i++){

         slideimages[i]=new Image()

         slideimages[i].src=slideshowimages.arguments[i]

    }

}

</script>
<script type="text/javascript">
var slideimages=new Array()
function slideshowimages()
{
     for (i=0;i<slideshowimages.arguments.length;i++){
         slideimages[i]=new Image()
         slideimages[i].src=slideshowimages.arguments[i]
    }
}
</script>
<img src="" alt="Slideshow Image Script" name="slide" title="" id="slideshow"/>
<script type="text/javascript">
slideshowimages("images/microsoft_exceleratednetworks_partners.png","images/webdevelop.jpg","images/dellsonicwall.jpg","images/server1.jpg","images/server2.jpg")
var slideshowspeed=5000
var whichimage=0
function slideit()
{
     if (!document.images)
           return
     document.images.slide.src=slideimages[whichimage].src
     if (whichimage<slideimages.length-1)
              whichimage++
     else
              whichimage=0
      setTimeout("slideit()",slideshowspeed)
}
 slideit()
</script>
</section>
<hr style="border-color:#00AE16;">
<div class="gridContainer clearfix">

	<p id="maintext">
		Network Design, Deployment, Administration, Data Security and Recovery for Financial Institutions, Law Firms, Medical Industry, Logistics Industry, 
		Manufacturing Industry, Retail Industry, and much more! Some of our other services include Microsoft Open Volume and Open Business Licensing, Video 
		Surveillance via Internet/On-Site Recording, Off-Site Network Infrastructure security monitoring, On-Site office workgroup training, Building to Building 
		Secure Wireless Access, VoIP, and other Telecom.
	</p>
    </div>   
<hr style="border-color:#00AE16;">
<div class="gridContainer clearfix">	
		<img src="images/microsoftpartner.jpg" id="microsoftpartner">
		<br>
		<img src="images/microsoftoem.jpg" id="microsoftoem">

</div>
<br>
<br>
<img src="images/smalllogo.png" style="display:block; margin:0 auto; text-align:center; margin-left:auto; margin-right:auto; height:50px; width:50px;">
<br>
<p style="color:black; text-align:center; font:bold 10px/20px sans-serif "Tw Cen MT";">© 2015 ExceleratedNetworks.com L.L.C. All rights reserved.</p>
<br>
<a href="projects.php"><p style="color:black; text-align:center; font:bold 10px/20px sans-serif "Tw Cen MT";">Projects</p></a>
<br>
</body>
</html>
