<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>iFarm.cz - Port�l pro zem�d�lce v �esku</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="WT.cg_n" content="Traktorenkampagne" />
<meta name="WT.cg_s" content="CZ_INT: Home" />
<meta property="og:image" content="../images/facebook-story4.jpg" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<!-- start SkyForm -->
<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/sky-forms-blue.css">
       <!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<script src="js/jquery.min.js"></script>
		<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
<!-- end SkyForm -->
<link rel="icon" href="../images/favicon.gif" type="image/gif" />
<link href="bootstrap.min.css" rel="stylesheet" />
<link href="../css/main4a.css" rel="stylesheet" type="text/css" />
<link href="../css/main-responsive4.css" rel="stylesheet" type="text/css" />
<link href="../css/responsive-layout4.css" rel="stylesheet" type="text/css" />
<link href="../css/story4.css" rel="stylesheet" type="text/css" />
<link href="../css/colorbox.css" rel="stylesheet" type="text/css" />
<link href="../css/perfect-scrollbar-0.4.10.min.css" rel="stylesheet" type="text/css" />
<link href="../css/magnific-popup.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../scripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle2.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle2.swipe.min.js"></script>
<script type="text/javascript" src="../scripts/skrollr.min.js"></script>
<script type="text/javascript" src="../scripts/perfect-scrollbar-0.4.10.min.js"></script>
<script type="text/javascript" src="../scripts/perfect-scrollbar-0.4.10.with-mousewheel.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.magnific-popup.min.js"></script>





 
<script type="text/javascript">
$(document).ready(function() {
		
	    $('.image-link').magnificPopup({type:'image'});
        $('.iframe-link').magnificPopup({
          disableOn: 1040,
          type: 'iframe',
          mainClass: 'mfp-fade',
          fixedContentPos: true
        });
		$('.gallery-item').magnificPopup({
		  type: 'image',
		  gallery:{
			enabled:true
		  }
		});
		$('.gallery-item2').magnificPopup({
		  type: 'image',
		  gallery:{
			enabled:true
		  }
		});
        $('.wallpaper-link').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'ratio169',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });

	  
//=================================== SMOOTH SCROLLING EXTERNAL ANCHOR //	
(function($){
  $(document).on("ready", function () {
      var urlHash = window.location.href.split("#")[1];
      $('html,body').animate({
          scrollTop: $('.' + urlHash + ', #' + urlHash +',[name='+urlHash+']').first().offset().top -66
      }, 1);
  });

})(jQuery);


// =================================== SMOOTH SCROLLING LOCAL ANCHOR //	
(function($) {
 	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top -66
	        }, 1500);
	        return false;
	      }
	    }
  	});
})(jQuery);
	  
	  

	
	$(".world-link").click(function(event){	
		$('#weltkarte').toggle();
	});
	$("#weltkarte").mouseleave(function(event){	
		$("#weltkarte").hide();
	});
	

	
	$("#sprachauswahl-link").click(function(event){	
		$('#sprachauswahl-sub').toggle();
	});
	$("#sprachauswahl-sub").mouseleave(function(event){	
		$("#sprachauswahl-sub").hide();
	});
	
	
	$("#menu").click(function(event){	
		$('#navi').toggle();
	});
	
	
	resizeContent();
	$(window).resize(function() {
		resizeContent();
	});
	function resizeContent() {
		var breite = $(window).width();
		var hoehe = $(window).height();

		if(breite<1280){
			$("#navi a").click(function(event){	
				$('#navi').css("display","none");
			});
			$('#navi').css("display","none");
		} else {
			$('#navi').css("display","block");
			$("#navi a").click(function(event){	
				$('#navi').css("display","block");
			});
			$( "#submenu-link" )
			.mouseover(function() {
				$('#submenu').css("display","block");
			})
			.mouseout(function() {
				$('#submenu').css("display","none");
			});
			$( "#submenu-link2" )
			.mouseover(function() {
				$('#submenu2').css("display","block");
			})
			.mouseout(function() {
				$('#submenu2').css("display","none");
			});
		}
	}	
	
	$('.weltkarte-scrollarea').perfectScrollbar({wheelSpeed:5});
	
});
</script>


<!-- Custom Scrollbar -->
<link href="../css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../scripts/jquery.mCustomScrollbar.js"></script>
<script>
(function($){
	$(window).load(function(){
		$(".tablecontent").mCustomScrollbar({
			axis:"x",
			theme:"dark-3",
			scrollButtons:{enable:true}
		});
	});
})(jQuery);
</script>
 <style>
body > div.radek.hlavicka > nav > ul > li:nth-child(2) a {color:black;}
body > div.radek.hlavicka > nav > ul > li:nth-child(2) {
  background-color: white; /*#e5ef00;*/
  opacity: 0.8;
  -ms-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -webkit-transition: opacity 0.2s;
  color: white !important;
}
body > div.radek.hlavicka > nav > ul > li:nth-child(1) {background-color: white /*#b77100*/;
  opacity: 0.8;
  -ms-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -webkit-transition: opacity 0.2s;color:white !important;}
body > div.radek.hlavicka > nav > ul > li:nth-child(1):hover {opacity: 1 !important;}
body > div.radek.hlavicka > nav > ul > li:nth-child(9) {background-color:#00b800;  opacity: 1;
  -ms-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -webkit-transition: opacity 0.2s;color:white !important;}
body > div.radek.hlavicka > nav > ul > li:nth-child(9):hover {opacity:1;}
body > div.radek.hlavicka > nav > ul > li:nth-child(9) > a {color:white !important;}


</style>
</head>
<body class="language-CZ" onload="callFT('CZ_01_Landingpage');" >


<!-- start header -->

    	<div class="radek shadow hlavicka">
			<h1><a href="#top" style="  float: left;
  width: 100%;
  height: 100%;">Energie pod kontrolou</a></h1>
			<nav>
			<ul>
			<li><a href="#videa">Projekt ifarm</a></li><li><a href="#ukazka">Uk�zka z praxe</a></li>
<li><a href="#jaktofunguje">Jak to funguje?</a></li>

<li><a href="#kolik">Kolik to stoj�?</a></li>
<li><a href="#vyzkouset">Vyzkou�et</a></li><li><a href="#reference">Reference</a></li><li><a href="#podminky">Obchodn� podm�nky</a></li><li><a href="#kontakt">Kontakt</a></li>	<li><div id="footleft">
<a href="" id="link" style="color:white">P�ihl�sit</a>
<div id="subscribe-pop">

<div class="featuresColumn4 last shadow" style="border-radius: 0px 0px 8px 8px; width:14%;padding-top:20px; padding-bottom:22px; position:fixed; top: 181px;
  right: 50px; background: rgba(232, 240, 49, 0.5); opacity: 1 !important; border-top:0px solid white">
 
<div class="body" id="prihlasit" style="padding:0px !important;">			
		
			<!-- Red color scheme -->
			<form name="form1" method="post" action="signup.php" class="sky-form">
				
				
				<fieldset style="padding: 0 0 0;">
					<section>
						<label class="label" class="textshadow" style="color: white;">Jm�no</label>
						<label class="input">
							<input type="text">
						</label>
<label class="label" style="color: white;">Email</label>
						<label class="input">
							<input type="text">
						</label>
<label class="label" style="color: white;">Heslo</label>
						<label class="input">
							<input type="text">
						</label>
</section>

					<button type="submit" class="button">P�ihl�sit</button></fieldset></form></div>
</div>



</div>
</div> 

 </li>	
			</ul>			
			</nav>
		
	</div>
		
	
	
	
	 <?php
        include './menu2.php'; ?>
       
     
      
    </div>
    <div id="story1" class="inner box backgr">
     
<?php
            include './nabnab1.php';
                  ?>

<div class="wrapper shadow" style="margin-top:-30px;margin-bottom:0px;">
</div>
<div class="wrapper round font24 shadow" style="margin-top:0px;margin-bottom:80px; font-size: 24px;color:black">
 <span id="top" style="position:relative;top:-60px;"></span>
<div class="featuresColumn3 textpole" style="margin-top:-20px; width:100%;">
<h2 style="font-size: 40px;
  font-weight: normal;
  padding-bottom: 10px;
  line-height: 40px;color:#e5ef00;">Pom�h�me zrychlovat pot�eby zem�d�lce</h2>
<div style="margin-top:0px;"></div>
<div class="round textpole shadow" style="background:rgba(255, 255, 255, 0.9); margin-top:0px;margin-left:-108px;  width: 92%;"><div style="margin-left:90px;">
<h2 style="margin-left:0%;margin-bottom: 20px;">V�hody ifarm.cz</h2><div style="opacity:0.9;">
<ul style="list-style-type:none;"><li class="round" style="width:200px;padding-left:60px;background:#00b800; color:white;">V�hoda 1</li><li class="round" style="width:200px;padding-left:60px;">V�hoda 2</li><li class="round" style="width:200px;padding-left:60px;">V�hoda 3</li></ul><ul style="list-style-type:none; margin-left:300px;margin-top:-112px;"><li class="round" style="width:200px;padding-left:60px;background:#7e4c00; color:white">V�hoda 1</li><li class="round" style="width:200px;padding-left:60px;">V�hoda 2</li><li class="round" style="width:200px;padding-left:60px;">V�hoda 3</li></ul>
<ul style="list-style-type:none; margin-left:600px;margin-top:-112px;"><li class="round" style="width:200px;padding-left:60px;background:#b77100; color:white;">V�hoda 1</li><li class="round" style="width:200px;padding-left:60px;">V�hoda 2</li><li class="round" style="width:200px;padding-left:60px;">V�hoda 3</li></ul></div></div></div>


</div>
</div>
 





   

      
      </div>
      

<div class="backgroun">
<span id="videa" style="position:relative;top:25px;"></span>
<div class="wrapper marginbot" style="height:300px;background:white;margin-top:-140px;margin-bottom:0px;padding-top:0px;">

<div class="featuresColumn">
   <img src="img/video-rostlinna.jpg" />
</div>
 
<div class="featuresColumn">
     <img src="img/video-zivocisna.jpg" />
</div>
     
<div class="featuresColumn">
   <img src="img/video-obchodnik.jpg" />
</div>
 
<div class="featuresColumn last">
    <img src="img/video-sluzby.jpg" />
</div>

    
</div>
 
<span id="kolik" style="position:relative;top:30px;"></span>
<div class="wrapper shadow" style="margin-top:100px;margin-bottom:20px;">
<h2 class="velka marginl margint"style="margin-bottom:20px; background:white; padding-bottom:40px;padding-top:20px; margin-bottom:-30px;padding-left:60px;margin-left:-30px;">Kolik to stoj�</h2>
</div>
<div class="wrapper round font24 shadow" style="margin-top:0px;margin-bottom:80px; font-size: 24px; margin-left:0%;">
 
<div class="featuresColumn5 textpole" style="background:white; border-right:1px solid white; border-left:1px solid white; padding-top: 14px;
  padding-bottom: 30px;">
<span class="textpole sedivatext">Chci popt�vat</span></br>
<span class="center green shadowwhite">0K� ZDARMA</span>
</div>
 
<div class="featuresColumn5 textpole last" style="background:white;">
  <span class="textpole sedivatext">Chci nab�zet</span></br>
<div style="margin-left:20%;"><span class="green shadowwhite">M�s�c ZDARMA, </span><span style="color:blue;">1200K� / Rok</span></div>
</div>
     
     
</div>
   
<div class="wrapper shadow" style="margin-top:20px;margin-bottom:20px;">

</div>
<div class="wrapper font24 textpole shadow" style="background:white;margin-top: 220px;
  padding-bottom: 80px;
  margin-bottom: 100px; font-size: 24px; min-height: 110px;">
<h2 class="velka marginl">Recenze</h2>
<div class="featuresColumn2">
  <span class="textpole sedivatext">�Kdo koup�, neprohloup�<cite> M. Svoboda, Praha</cite></span></div>
<div class="featuresColumn2 last">
 <span class="textpole sedivatext">�Kdo koup�, neprohloup�<cite> N. Stovoda, Parha</cite></span></div></br>
<div class="featuresColumn2">
  <span class="textpole sedivatext">�Kdo koup�, neprohloup�<cite> K. Stonoha, Praah</cite></span></div>
<div class="featuresColumn2 last">
 <span class="textpole sedivatext">�Kdo koup�, neprohloup�<cite> L. Svotbola, Harpa</cite></span></div>
     </div>
<span id="jaktofunguje" style="position:relative;top:50px;"></span>
<div class="backgroun">
<div class="wrapper shadow" style="margin-top:0px;margin-bottom:20px;">
</div>
<div class="wrapper" style="padding-top: 20px;
  min-height: 200px;
  background: white;
  margin-top: 0px;
  padding-bottom: 60px;
  font-size: 24px;">
<h2 class="velka marginl">Jak to cel� funguje?</h2>
<img src="img/kroky.jpg" style="display:block;
    margin-left:auto; margin-right:auto;" />
     </div>

<div class="wrapper shadow" style="margin-top:0px;margin-bottom:20px;">

</div>
<div class="wrapper font24 shadow" style="margin-top:100px;margin-bottom:80px; font-size: 24px; margin-left:0%; background: white; padding-bottom:120px;margin-bottom:-20px; padding-top:20px;">
<p><h2 class="velka marginl">Popt�vejte a za�n�te �et�it 10-30% n�klad�</h2></p>
 
<div class="featuresColumn5 textpole" style="min-height:103px;border-right:0px solid white; border-left:0px solid white; padding-top:0px; margin-top: 20px;">
<span class="textpole sedivatext">Zadat popt�vku</span>
<span class="green shadowwhite"> ZDARMA</span>
</div>
 
<div class="featuresColumn5 textpole last">
  <span class="textpole sedivatext">Zadat nab�dku</span>
<span style="margin-left:0%;"><span class="green shadowwhite"> ZDARMA</span></span></br><span style="font-size:18px; margin-left:25%">M�s�c zdarma, d�le<span style="color:blue;"> 1200K� / Rok</span></span></div>
</div>
    
     
</div>

<div class="backgroun">
<div class="wrapper shadow" style="margin-top:0px;margin-bottom:0px;">
</div>
<div class="backgroun">
<div class="wrapper round backgroun font24 shadow" style="margin-top:0px;margin-bottom:80px; font-size: 24px; margin-left:0%;">

 <div class="pbile hpx650" style="margin-top: 100px;">

<div class="featuresColumn6 textpole" style="max-height:180px;">
<h2 class="velka marginl">Reference</h2>
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agrofert.png" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/cez.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro2.png" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro3.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro1.png" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro4.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
</div><span id="reference" style="position:relative;top:-80px"></span>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro5.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro6.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro7.png" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro8.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro9.png" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro10.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro11.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
</div>

<div class="featuresColumn6 textpole" style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro12.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
</div>
 
<div class="featuresColumn6 textpole last"  style="max-height:180px;">
<div class="responsive-container9">
    <div class="dummy9"></div>
    <div class="img-container9 efekt1 efekt2"><img src="img/agro13.jpg" style="max-width:100%;max-height:100%;"></div>
</div>
 </div>
</div>
</div>
</div>
</div>

<div class="backgroun">
<span id="ukazka" style="position:relative;top:-30px;"></span>
<div class="wrapper" style="margin-top:100px;margin-bottom:0px;">
<div style="background:WHITE;width:100%;padding-top:40px;padding-bottom:20px;margin-bottom:20px;">
<h2 class="marginl velka shadow">Uk�zka uvnit� v praxi</h2>
<img src="img/videobig.jpg"  style="max-width:40%;max-height:40%;margin-top:0px;margin-left:28%;" /></div>
   
</div>
<span id="podminky" style="position:relative;top:50px;"></span>
<div class="backgroun">

<div class="wrapper" style="margin-top:100px;margin-bottom:80px;word-wrap: break-word;word-break: break-word;">
<ul class="menu" style="padding-top: 14px;
  padding-bottom: 10px;
  background: white;">
<h2 class="marginl velka shadow">Obchodn� podm�nky</h2>
    <li class="toggle1 round">�vodn� ustanoven�</li>
    <li class="toggle2 round">U�ivatelsk� ��et</li>
    <li class="toggle3 round">Uzav�en� kupn� smlouvy</li>
    <li class="toggle4 round">Cena zbo�� a Platebn� podm�nky</li>
    <li class="toggle5 round">Odstoupen� od kupn� smlouvy</li>
<li class="toggle6 round">P�eprava a dod�n� zbo��</li><li class="toggle7 round">Pr�va z Vadn�ho pln�n�</li><li class="toggle8 round">Dal�� pr�va a povinnosti smluvn�ch stran</li><li class="toggle9 round">Ochrana osobn�ch �daj�</li><li class="toggle10 round">Zas�l�n� obchodn�ch sd�len� a ukl�d�n� cookies</li><li class="toggle11 round">Doru�ov�n�</li><li class="toggle12 round">Z�v�re�n� ustanoven�</li>
</ul>
<div class="container" style="padding-left: 20px;margin-top:-10px;border-top:1px solid #f5f5f5;
  padding-right: 20px;
  margin-right: 10px;
  background: white;">
<div class="toggle0"></div>
    <div class="toggle1"><h2 id="led1"><span id="uvodni-ustanoveni">1.�</span>�VODN� USTANOVEN�</h2>
<p class="uroven2">1.1. � Tyto obchodn� podm�nky obchodn� spole�nosti �Roel Adriaan Ramp, se�s�dlem�Hrn���sk� 765, 470 01, �esk� L�pa, identifika�n� ��slo: 86941461, zapsan� v obchodn�m rejst��ku veden�m�ZIVCL/5939/2008/SIP/2, odd�l�obchodn� spole�nosti�, vlo�ka pro prodej zbo�� prost�ednictv�m on-line obchodu um�st�n�ho na internetov� adrese�www.LEDsviti.czupravuj� v�souladu s�ustanoven�m � 1751 odst. 1 z�kona �. 89/2012 Sb., ob�ansk� z�kon�k�vz�jemn� pr�va a povinnosti smluvn�ch stran vznikl� v�souvislosti nebo na z�klad� kupn� smlouvy�uzav�ran� mezi prod�vaj�c�m a�jinou fyzickou osobou�prost�ednictv�m internetov�ho obchodu prod�vaj�c�ho. Internetov� obchod je�prod�vaj�c�m provozov�n na webov� str�nce um�stn�n� na internetov� adrese www.LEDsviti.cz.</p>
<p class="uroven2">1.2.����� Obchodn� podm�nky se nevztahuj� na p��pady, kdy osoba, kter� m� v �myslu nakoupit zbo�� od prod�vaj�c�ho, je pr�vnickou osobou �i osobou, je� jedn� p�i objedn�v�n� zbo�� v r�mci sv� podnikatelsk� �innosti nebo v�r�mci sv�ho samostatn�ho v�konu povol�n�.</p>
<p class="uroven2">1.3.����� Ustanoven� odchyln� od obchodn�ch podm�nek je mo�n� sjednat v kupn� smlouv�. Odchyln� ujedn�n� v kupn� smlouv� maj� p�ednost p�ed ustanoven�mi obchodn�ch podm�nek.</p>
<p class="uroven2">1.4.����� Ustanoven� obchodn�ch podm�nek jsou ned�lnou sou��st� kupn� smlouvy. Kupn� smlouva a�obchodn� podm�nky jsou vyhotoveny v �esk�m jazyce. Kupn� smlouvu lze uzav��t v��esk�m jazyce.</p>
<p class="uroven2">1.5.����� Zn�n� obchodn�ch podm�nek m��e prod�vaj�c� m�nit �i dopl�ovat. T�mto ustanoven�m nejsou dot�ena pr�va a povinnosti vznikl� po dobu ��innosti p�edchoz�ho zn�n� obchodn�ch podm�nek.</p></div>

    <div class="toggle2"><h2 id="led2"><span id="uzivatelsky-ucet">2.�</span>U�IVATELSK� ��ET</h2>
<p class="uroven2">2.1.����� Na z�klad� registrace kupuj�c�ho proveden� na webov� str�nce m��e kupuj�c� p�istupovat do�sv�ho u�ivatelsk�ho rozhran�. Ze�sv�ho u�ivatelsk�ho rozhran� m��e kupuj�c� prov�d�t objedn�v�n� zbo��v p��pad�, �e to webov� rozhran� obchodu umo��uje, m��e kupuj�c� prov�d�t objedn�v�n� zbo�� t� bez registrace p��mo z�webov�ho rozhran� obchodu.</p>
<p class="uroven2">2.2.����� P�i registraci na webov� str�nce a p�i objedn�v�n� zbo�� je�kupuj�c� povinen uv�d�t spr�vn� a�pravdiv� v�echny �daje. �daje uveden� v u�ivatelsk�m ��tu je kupuj�c� p�i jak�koliv jejich zm�n� povinen aktualizovat.��daje uveden� kupuj�c�m v�u�ivatelsk�m ��tu a p�i objedn�v�n� zbo�� jsou prod�vaj�c�m pova�ov�ny za�spr�vn�.</p>
<p class="uroven2">2.3.����� P��stup k u�ivatelsk�mu ��tu je zabezpe�en u�ivatelsk�m jm�nem a heslem. Kupuj�c� je�povinen zachov�vat ml�enlivost ohledn� informac� nezbytn�ch k p��stupu do jeho u�ivatelsk�ho ��tu.</p>
<p class="uroven2">2.4.����� Kupuj�c� nen� opr�vn�n umo�nit vyu��v�n� u�ivatelsk�ho ��tu t�et�m osob�m.</p>
<p class="uroven2">2.5.����� Prod�vaj�c� m��e zru�it u�ivatelsk� ��et, a to zejm�na v p��pad�, kdy kupuj�c� sv�j u�ivatelsk� ��et d�le ne� �rok � � nevyu��v�, �i v p��pad�, kdy kupuj�c� poru�� sv� povinnosti z�kupn� smlouvy.</p>
<p class="uroven2">2.6.����� Kupuj�c� bere na v�dom�, �e u�ivatelsk� ��et nemus� b�t dostupn� nep�etr�it�, a�to�zejm�na s�ohledem na nutnou �dr�bu hardwarov�ho a softwarov�ho vybaven� prod�vaj�c�ho, pop�. nutnou �dr�bu hardwarov�ho a softwarov�ho vybaven� t�et�ch osob.</p></div>
    <div class="toggle3"><h2 id="led3" class="uroven2"><span id="kupni-smlouva">3. </span>UZAV�EN� KUPN� SMLOUVY</h2>
<p class="uroven2">3.1.����� Ve�ker� prezentace zbo�� um�st�n� ve�webov�m rozhran� obchodu je informativn�ho charakteru a�prod�vaj�c� nen� povinen uzav��t kupn� smlouvu ohledn� tohoto zbo��. Ustanoven� � 1732 odst. 2 ob�ansk�ho z�kon�ku se nepou�ije.</p>
<p class="uroven2">3.2.����� Webov� rozhran� obchodu obsahuje informace o zbo��, a�to�v�etn� uveden� cen jednotliv�ho zbo��. Ceny zbo�� jsou uvedeny v�etn� dan� z�p�idan� hodnoty a v�ech souvisej�c�ch poplatk�.�Ceny zbo�� z�st�vaj� v�platnosti po�dobu, kdy jsou zobrazov�ny ve webov�m rozhran� obchodu.�T�mto ustanoven�m nen� omezena mo�nost prod�vaj�c�ho uzav��t kupn� smlouvu za�individu�ln� sjednan�ch podm�nek.</p>
<p class="uroven2">3.3.����� Webov� rozhran� obchodu obsahuje tak� informace o�n�kladech spojen�ch s�balen�m a�dod�n�m zbo��. Informace o n�kladech spojen�ch s balen�m a dod�n�m zbo�� uveden� ve�webov�m rozhran� obchodu plat� pouze v p��padech, kdy je zbo�� doru�ov�no v r�mci �zem� �esk� republiky.</p>
<p class="uroven2">3.4.����� Pro objedn�n� zbo�� vypln� kupuj�c� objedn�vkov� formul�� ve�webov�m rozhran� obchodu. Objedn�vkov� formul�� obsahuje zejm�na informace o:</p>
<p class="uroven2">3.4.1.�� objedn�van�m zbo�� (objedn�van� zbo�� �vlo�� kupuj�c� do elektronick�ho n�kupn�ho ko��ku webov�ho rozhran� obchodu),</p>
<p class="uroven2">3.4.2.�� zp�sobu �hrady kupn� ceny zbo��, �daje o po�adovan�m zp�sobu doru�en� objedn�van�ho zbo�� a</p>
<p class="uroven2">3.4.3.�� informace o n�kladech spojen�ch s�dod�n�m zbo�� (d�le spole�n� jen jako �objedn�vka�).</p>
<p class="uroven2">3.5.����� P�ed zasl�n�m objedn�vky prod�vaj�c�mu je kupuj�c�mu umo�n�no zkontrolovat a m�nit �daje, kter� do�objedn�vky kupuj�c� vlo�il, a to i s�ohledem na mo�nost kupuj�c�ho zji��ovat a�opravovat chyby vznikl� p�i zad�v�n� dat do objedn�vky.�Objedn�vku ode�le kupuj�c� prod�vaj�c�mu kliknut�m na tla��tko �OBJEDNAT�. �daje uveden� v objedn�vce jsou prod�vaj�c�m pova�ov�ny za spr�vn�. Prod�vaj�c� neprodlen� po obdr�en� objedn�vky toto obdr�en� kupuj�c�mu potvrd� elektronickou po�tou, a to na adresu elektronick� po�ty kupuj�c�ho uvedenou v�u�ivatelsk�m rozhran� �i v objedn�vce(d�le jen �elektronick� adresa kupuj�c�ho�).</p>
<p class="uroven2">3.6.����� Prod�vaj�c� je v�dy opr�vn�n v z�vislosti na charakteru objedn�vky (mno�stv� zbo��, v��e kupn� ceny, p�edpokl�dan� n�klady na dopravu) po��dat kupuj�c�ho o dodate�n� potvrzen� objedn�vky (nap��klad p�semn� �i telefonicky).</p>
<p class="uroven2">3.7.����� Smluvn� vztah mezi prod�vaj�c�m a kupuj�c�m vznik� doru�en�m p�ijet� objedn�vky (akceptac�), je� je�prod�vaj�c�m zasl�no kupuj�c�mu elektronickou po�tou, a to na adresu elektronick� po�ty kupuj�c�ho.</p>
<p class="uroven2">3.8.����� Kupuj�c� souhlas� s pou�it�m komunika�n�ch prost�edk� na d�lku p�i uzav�r�n� kupn� smlouvy. N�klady vznikl� kupuj�c�mu p�i pou�it� komunika�n�ch prost�edk� na d�lku v�souvislosti s�uzav�en�m kupn� smlouvy (n�klady na internetov� p�ipojen�, n�klady na�telefonn� hovory) si hrad� kupuj�c� s�m, p�i�em� tyto n�klady se neli�� od z�kladn� sazby.</p></div>
    <div class="toggle4"><h2 id="led4" class="uroven2"><span id="cena-platebni-podminky">4. </span>CENA ZBO�� A PLATEBN� PODM�NKY</h2>
<p class="uroven2">4.1.����� Cenu zbo�� a p��padn� n�klady spojen� s dod�n�m zbo�� dle kupn� smlouvy m��e kupuj�c� uhradit prod�vaj�c�mu n�sleduj�c�mi zp�soby:</p>
<p class="uroven2">v hotovosti ve sklad� prod�vaj�c�ho na adrese Hrn���sk� 765, �esk� L�pa �470 01;</p>
<p class="uroven2">v hotovosti na dob�rku v m�st� ur�en�m kupuj�c�m v objedn�vce;</p>
<p class="uroven2">bezhotovostn� p�evodem na ��et prod�vaj�c�ho �.�2000249286 / 2010, veden� u�spole�nosti FIO Banka (d�le jen ���et prod�vaj�c�ho�).</p>
<p class="uroven2">4.2.����� Spole�n� s�kupn� cenou je kupuj�c� povinen zaplatit prod�vaj�c�mu tak� n�klady spojen� s�balen�m a dod�n�m zbo�� ve smluven� v��i. Nen�-li uvedeno v�slovn� jinak, rozum� se d�le kupn� cenou i�n�klady spojen� s�dod�n�m zbo��.</p>
<p class="uroven2">4.3.����� Prod�vaj�c� nepo�aduje od kupuj�c�ho z�lohu �i jinou obdobnou platbu. T�mto nen� dot�eno ustanoven� �l.�4.6 obchodn�ch podm�nek ohledn� povinnosti uhradit kupn� cenu zbo�� p�edem.</p>
<p class="uroven2">4.4.����� V�p��pad� platby v�hotovosti �i v�p��pad� platby na dob�rku je kupn� cena splatn� p�i p�evzet� zbo��. V�p��pad� bezhotovostn� platby je kupn� cena splatn� do 14 dn� od uzav�en� kupn� smlouvy.</p>
<p class="uroven2">4.5.����� V�p��pad� bezhotovostn� platby je kupuj�c� povinen uhrazovat kupn� cenu zbo�� spole�n� s�uveden�m�variabiln�ho symbolu platby. V p��pad� bezhotovostn� platby je z�vazek kupuj�c�ho uhradit kupn� cenu spln�n okam�ikem p�ips�n� p��slu�n� ��stky na ��et prod�vaj�c�ho.</p>
<p class="uroven2">4.6.����� Prod�vaj�c� je opr�vn�n, zejm�na v�p��pad�, �e ze strany kupuj�c�ho nedojde k�dodate�n�mu potvrzen� objedn�vky (�l. 3.6), po�adovat uhrazen� cel� kupn� ceny je�t� p�ed odesl�n�m zbo�� kupuj�c�mu. Ustanoven� � 2119 odst. 1 ob�ansk�ho z�kon�ku se nepou�ije.</p>
<p class="uroven2">4.7.����� P��padn� slevy z�ceny zbo�� poskytnut� prod�vaj�c�m kupuj�c�mu nelze vz�jemn� kombinovat.</p>
<p class="uroven2">4.8.����� Je-li to v�obchodn�m styku obvykl� nebo je-li tak stanoveno obecn� z�vazn�mi pr�vn�mi p�edpisy, vystav� prod�vaj�c� ohledn� plateb prov�d�n�ch na�z�klad� kupn� smlouvy kupuj�c�mu da�ov� doklad � fakturu. Prod�vaj�c� je pl�tcem dan� z�p�idan� hodnoty. Da�ov� doklad � fakturu vystav� prod�vaj�c� kupuj�c�mu po uhrazen� ceny zbo�� a za�le jej v�elektronick� podob� na elektronickou adresu kupuj�c�ho.</p></div>
    <div class="toggle5"><h2 id="led5" class="uroven2"><span id="odstoupeni-od-smlouvy"></span>5. ODSTOUPEN� OD KUPN� SMLOUVY</h2>
<p class="uroven2">5.1.����� Kupuj�c� bere na v�dom�, �e dle�ustanoven� � 1837 ob�ansk�ho z�kon�ku, nelze mimo jin� odstoupit od kupn� smlouvy o dod�vce zbo��, kter� bylo upraveno podle p��n� kupuj�c�ho nebo pro jeho osobu, od kupn� smlouvy o dod�vce zbo��, kter� podl�h� rychl� zk�ze, jako� i�zbo��, kter� bylo po dod�n� nen�vratn� sm�seno s jin�m zbo��m, od kupn� smlouvy o�dod�vce zbo�� v uzav�en�m obalu, kter� spot�ebitel z obalu vy�al a z hygienick�ch d�vod� jej nen� mo�n� vr�tit a od kupn� smlouvy o dod�vce zvukov� nebo obrazov� nahr�vky nebo po��ta�ov�ho programu, pokud poru�il jejich p�vodn� obal.</p>
<p class="uroven2">5.2.����� Nejedn�-li se o p��pad uveden� v��l. 5.1 �i o jin� p��pad, kdy nelze od kupn� smlouvy odstoupit, m�kupuj�c� v�souladu s ustanoven�m ��1829 odst. 1 ob�ansk�ho z�kon�ku pr�vo od�kupn� smlouvy odstoupit, a to do �trn�cti (14) dn� od p�evzet� zbo��, p�i�em� v�p��pad�, �e p�edm�tem kupn� smlouvy je n�kolik druh� zbo�� nebo dod�n� n�kolika ��st�, b�� tato lh�ta ode dne p�evzet� posledn� dod�vky zbo��. Odstoupen� od�kupn� smlouvy mus� b�t prod�vaj�c�mu odesl�no ve lh�t� uveden� v�p�edchoz� v�t�. Pro odstoupen� od�kupn� smlouvy m��e kupuj�c� vyu�it vzorov� formul�� poskytovan� prod�vaj�c�m, jen� tvo�� p��lohu obchodn�ch podm�nek.�Odstoupen� od�kupn� smlouvy m��e kupuj�c� zas�lat mimo jin� na�adresu provozovny prod�vaj�c�ho �i na adresu elektronick� po�ty prod�vaj�c�ho �����.</p>
<p class="uroven2">5.3.����� V�p��pad� odstoupen� od kupn� smlouvy dle �l. 5.2 obchodn�ch podm�nek se kupn� smlouva od�po��tku ru��. Zbo�� mus� b�t prod�vaj�c�mu vr�ceno do �trn�cti (14) dn� od odstoupen� od smlouvy prod�vaj�c�mu. Odstoup�-li kupuj�c� od kupn� smlouvy, nese kupuj�c� n�klady spojen� s navr�cen�m zbo�� prod�vaj�c�mu, a to i v tom p��pad�, kdy zbo�� nem��e b�t vr�ceno pro svou povahu obvyklou po�tovn� cestou.</p>
<p class="uroven2">5.4.����� V�p��pad� odstoupen� od smlouvy dle �l. 5.2 obchodn�ch podm�nek vr�t� prod�vaj�c� pen�n� prost�edky p�ijat� od kupuj�c�ho do �trn�cti (14) dn� od odstoupen� od�kupn� smlouvy kupuj�c�m, a�to�stejn�m zp�sobem, jak�m je prod�vaj�c� od kupuj�c�ho p�ijal. Prod�vaj�c� je takt� opr�vn�n vr�tit pln�n� poskytnut� kupuj�c�m ji� p�i vr�cen� zbo�� kupuj�c�m �i jin�m zp�sobem, pokud s t�m kupuj�c� bude souhlasit a nevzniknou t�m kupuj�c�mu dal�� n�klady. Odstoup�-li kupuj�c� od kupn� smlouvy, prod�vaj�c� nen� povinen vr�tit p�ijat� pen�n� prost�edky kupuj�c�mu d��ve, ne� mu kupuj�c� zbo�� vr�t� nebo prok�e, �e zbo�� podnikateli odeslal.</p>
<p class="uroven2">5.5.����� N�rok na��hradu �kody vznikl� na zbo�� je prod�vaj�c� opr�vn�n jednostrann� zapo��st proti n�roku kupuj�c�ho na vr�cen� kupn� ceny.</p>
<p class="uroven2">5.6.����� Do doby p�evzet� zbo�� kupuj�c�m je prod�vaj�c� opr�vn�n kdykoliv od kupn� smlouvy odstoupit. V�takov�m p��pad� vr�t� prod�vaj�c� kupuj�c�mu kupn� cenu bez zbyte�n�ho odkladu, a to bezhotovostn� na ��et ur�en� kupuj�c�m.</p>
<p class="uroven2">5.7.����� Je-li spole�n� se zbo��m poskytnut kupuj�c�mu d�rek, je darovac� smlouva mezi prod�vaj�c�m a�kupuj�c�m uzav�ena s�rozvazovac� podm�nkou, �e dojde-li k�odstoupen� od kupn� smlouvy kupuj�c�m, pozb�v� darovac� smlouva ohledn� takov�ho d�rku ��innosti a kupuj�c� je povinen spolu se zbo��m prod�vaj�c�mu vr�tit i poskytnut� d�rek.</p></div>
<div class="toggle6"><h2 id="led6" class="uroven2"><span id="doprava-zdarma">6. </span>P�EPRAVA A DOD�N� ZBO��</h2>
<p class="uroven2">6.1.����� V�p��pad�, �e�je�zp�sob dopravy smluven na z�klad� zvl�tn�ho po�adavku kupuj�c�ho, nese kupuj�c� riziko a�p��padn� dodate�n� n�klady spojen� s�t�mto zp�sobem dopravy.</p>
<p class="uroven2">6.2.����� Je-li prod�vaj�c� podle kupn� smlouvy povinen dodat zbo�� na m�sto ur�en� kupuj�c�m v�objedn�vce, je kupuj�c� povinen p�evz�t zbo�� p�i dod�n�. Po�tovn� �in� 120 K�.</p>
<p class="uroven2">6.3.����� V�p��pad�, �e je z�d�vod� na stran� kupuj�c�ho nutno zbo�� doru�ovat opakovan� nebo jin�m zp�sobem, ne� bylo uvedeno v�objedn�vce, je kupuj�c� povinen uhradit n�klady spojen� s�opakovan�m doru�ov�n�m zbo��, resp. n�klady spojen� s�jin�m zp�sobem doru�en�.</p>
<p class="uroven2">6.4.����� P�i p�evzet� zbo�� od p�epravce je kupuj�c� povinen zkontrolovat neporu�enost obal� zbo�� a�v p��pad� jak�chkoliv z�vad toto neprodlen� ozn�mit p�epravci. V p��pad� shled�n� poru�en� obalu sv�d��c�ho o neopr�vn�n�m vniknut� do z�silky nemus� kupuj�c� z�silku od p�epravce p�evz�t.</p>
<p class="uroven2">6.5.����� P�i objedn�vce zbo�� nad 3000K� je cena za dopravu 0K�.</p>
<p class="uroven2">6.6.����� Dal�� pr�va a povinnosti stran p�i p�eprav� zbo�� mohou upravit zvl�tn� dodac� podm�nky prod�vaj�c�ho, jsou-li prod�vaj�c�m vyd�ny.</p></div>
<div class="toggle7"><h2 id="led7" class="uroven2"><span id="vadne-plneni">7. </span>PR�VA Z�VADN�HO PLN�N�</h2>
<p class="uroven2">7.1.����� Pr�va a povinnosti smluvn�ch stran ohledn� pr�v z�vadn�ho pln�n� se ��d� p��slu�n�mi obecn� z�vazn�mi p�edpisy (zejm�na ustanoven�mi ��1914 a� 1925, � 2099 a� 2117 a � 2161 a� 2174 ob�ansk�ho z�kon�ku).</p>
<p class="uroven2">7.2.����� Prod�vaj�c� odpov�d� kupuj�c�mu, �e zbo�� p�i p�evzet� nem� vady. Zejm�na prod�vaj�c� odpov�d� kupuj�c�mu, �e v dob�, kdy kupuj�c� zbo�� p�evzal:</p>
<p class="uroven2">7.2.1.�� m� zbo�� vlastnosti, kter� si strany ujednaly, a chyb�-li ujedn�n�, m� takov� vlastnosti, kter� prod�vaj�c� nebo v�robce popsal nebo kter� kupuj�c� o�ek�val s ohledem na povahu zbo�� a na z�klad� reklamy jimi prov�d�n�,</p>
<p class="uroven2">7.2.2.�� se zbo�� hod� k ��elu, kter� pro jeho pou�it� prod�vaj�c� uv�d� nebo ke kter�mu se zbo�� tohoto druhu obvykle pou��v�,</p>
<p class="uroven2">7.2.3.�� zbo�� odpov�d� jakost� nebo proveden�m smluven�mu vzorku nebo p�edloze, byla-li jakost nebo proveden� ur�eno podle smluven�ho vzorku nebo p�edlohy,</p>
<p class="uroven2">7.2.4.�� je zbo�� v odpov�daj�c�m mno�stv�, m��e nebo hmotnosti a</p>
<p class="uroven2">7.2.5.�� zbo�� vyhovuje po�adavk�m pr�vn�ch p�edpis�.</p>
<p class="uroven2">7.3.����� Ustanoven� uveden� v �l. 7.2 obchodn�ch podm�nek se nepou�ij� u zbo�� prod�van�ho za ni��� cenu na vadu, pro kterou byla ni��� cena ujedn�na, na opot�eben� zbo�� zp�soben� jeho obvykl�m u��v�n�m, u�pou�it�ho zbo�� na vadu odpov�daj�c� m��e pou��v�n� nebo opot�eben�, kterou zbo�� m�lo p�i p�evzet� kupuj�c�m, nebo vypl�v�-li to z povahy zbo��.</p>
<p class="uroven2">7.4.����� Projev�-li se vada v pr�b�hu �esti m�s�c� od p�evzet�, m� se za to, �e zbo�� bylo vadn� ji� p�i p�evzet�.</p>
<p class="uroven2">7.5.����� Pr�va z�vadn�ho pln�n� uplat�uje kupuj�c� u prod�vaj�c�ho na adrese jeho provozovny, v n� je p�ijet� reklamace mo�n� s ohledem na sortiment prod�van�ho zbo��, p��padn� i v s�dle nebo m�st� podnik�n�.�Za okam�ik uplatn�n� reklamace se pova�uje okam�ik, kdy prod�vaj�c� obdr�el od kupuj�c�ho reklamovan� zbo��.</p>
<p class="uroven2">7.6.����� Dal�� pr�va a povinnosti stran souvisej�c� s�odpov�dnost� prod�vaj�c�ho za vady m��e upravit reklama�n� ��d prod�vaj�c�ho.</p></div>
<div class="toggle8"><h2 id="led8" class="uroven2"><span id="dalsi-prava-povinnosti">8. </span>DAL�� PR�VA A POVINNOSTI SMLUVN�CH STRAN</h2>
<p class="uroven2">8.1.����� Kupuj�c� nab�v� vlastnictv� ke zbo�� zaplacen�m cel� kupn� ceny zbo��.</p>
<p class="uroven2">8.2.����� Prod�vaj�c� nen� ve vztahu ke kupuj�c�mu v�z�n ��dn�mi kodexy chov�n� ve smyslu ustanoven� � 1826 odst. 1 p�sm. e) ob�ansk�ho z�kon�ku.</p>
<p class="uroven2">8.3.����� Mimosoudn� vy�izov�n� st�nost� spot�ebitel� zaji��uje prod�vaj�c� prost�ednictv�m elektronick� adresy Roel.ramp@seznam.cz. Informaci o vy��zen� st�nosti kupuj�c�ho za�le prod�vaj�c� na elektronickou adresu kupuj�c�ho.</p>
<p class="uroven2">8.4.����� Prod�vaj�c� je opr�vn�n k prodeji zbo�� na z�klad� �ivnostensk�ho opr�vn�n�. �ivnostenskou kontrolu prov�d� v r�mci sv� p�sobnosti p��slu�n� �ivnostensk� ��ad. Dozor nad oblast� ochrany osobn�ch �daj� vykon�v� ��ad pro ochranu osobn�ch �daj�. �esk� obchodn� inspekce vykon�v� ve vymezen�m rozsahu mimo jin� dozor nad dodr�ov�n�m z�kona �.�634/1992 Sb., o ochran� spot�ebitele, ve zn�n� pozd�j��ch p�edpis�.</p>
<p class="uroven2">8.5.����� Kupuj�c� t�mto p�eb�r� na sebe nebezpe�� zm�ny okolnost� ve smyslu � 1765 odst. 2 ob�ansk�ho z�kon�ku.</p></div>
<div class="toggle9"><h2 id="led9" class="uroven2"><span id="osobni-udaje">9. </span>OCHRANA OSOBN�CH �DAJ�</h2>
<p class="uroven2">9.1.����� Ochrana osobn�ch �daj� kupuj�c�ho, kter� je fyzickou osobou, je poskytov�na z�konem �.�101/2000 Sb., o ochran� osobn�ch �daj�, ve zn�n� pozd�j��ch p�edpis�.</p>
<p class="uroven2">9.2.����� Kupuj�c� souhlas� se zpracov�n�m t�chto sv�ch osobn�ch �daj�: jm�no a p��jmen�, adresa bydli�t�, identifika�n� ��slo, da�ov� identifika�n� ��slo, adresa elektronick� po�ty a telefonn� ��slo�(d�le spole�n� v�e jen jako �osobn� �daje�).</p>
<p class="uroven2">9.3.����� Kupuj�c� souhlas� se zpracov�n�m osobn�ch �daj� prod�vaj�c�m, a to pro ��ely realizace pr�v a�povinnost� z�kupn� smlouvy a pro ��ely veden� u�ivatelsk�ho ��tu. Nezvol�-li kupuj�c� jinou mo�nost, souhlas� se zpracov�n�m osobn�ch �daj� prod�vaj�c�m tak� pro ��ely zas�l�n� informac� a obchodn�ch sd�len� kupuj�c�mu. Souhlas se zpracov�n�m osobn�ch �daj� v cel�m rozsahu dle tohoto �l�nku nen� podm�nkou, kter� by sama o sob� znemo��ovala uzav�en� kupn� smlouvy.</p>
<p class="uroven2">9.4.����� Kupuj�c� bere na v�dom�, �e je povinen sv� osobn� �daje (p�i registraci, ve sv�m u�ivatelsk�m ��tu, p�i objedn�vce proveden� z�webov�ho rozhran� obchodu) uv�d�t spr�vn� a�pravdiv� a��e je povinen bez zbyte�n�ho odkladu informovat prod�vaj�c�ho o zm�n� ve�sv�ch osobn�ch �daj�ch.</p>
<p class="uroven2">9.5.����� Zpracov�n�m osobn�ch �daj� kupuj�c�ho m��e prod�vaj�c� pov��it t�et� osobu, jako�to zpracovatele. Krom� osob dopravuj�c�ch zbo�� nebudou osobn� �daje prod�vaj�c�m bez p�edchoz�ho souhlasu kupuj�c�ho p�ed�v�ny t�et�m osob�m.</p>
<p class="uroven2">9.6.����� Osobn� �daje budou zpracov�v�ny po dobu neur�itou. Osobn� �daje budou zpracov�v�ny v�elektronick� podob� automatizovan�m zp�sobem nebo v ti�t�n� podob� neautomatizovan�m zp�sobem.</p>
<p class="uroven2">9.7.����� Kupuj�c� potvrzuje, �e poskytnut� osobn� �daje jsou p�esn� a �e byl pou�en o tom, �e�se�jedn� o dobrovoln� poskytnut� osobn�ch �daj�.</p>
<p class="uroven2">9.8.����� V p��pad�, �e by se kupuj�c� domn�val, �e prod�vaj�c� nebo zpracovatel (�l. 9.5) prov�d� zpracov�n� jeho osobn�ch �daj�, kter� je v rozporu s ochranou soukrom�ho a osobn�ho �ivota kupuj�c�ho nebo v rozporu se z�konem, zejm�na jsou-li osobn� �daje nep�esn� s�ohledem na ��el jejich zpracov�n�, m��e:</p>
<p class="uroven2">9.8.1.�� po��dat prod�vaj�c�ho nebo zpracovatele o vysv�tlen�,</p>
<p class="uroven2">9.8.2.�� po�adovat, aby prod�vaj�c� nebo zpracovatel odstranil takto vznikl� stav.</p>
<p class="uroven2">9.9.����� Po��d�-li kupuj�c� o informaci o zpracov�n� sv�ch osobn�ch �daj�, je mu prod�vaj�c� povinen tuto informaci p�edat. Prod�vaj�c� m� pr�vo za poskytnut� informace podle p�edchoz� v�ty po�adovat p�im��enou �hradu nep�evy�uj�c� n�klady nezbytn� na poskytnut� informace.</p></div>
<div class="toggle10"><h2 id="led10" class="uroven2"><span id="obchodni-sdeleni">10. </span>ZAS�L�N� OBCHODN�CH SD�LEN� A UKL�D�N� COOKIES</h2>
<p class="uroven2">10.1.� Kupuj�c� souhlas� se zas�l�n�m informac� souvisej�c�ch se zbo��m, slu�bami nebo podnikem prod�vaj�c�ho na elektronickou adresu kupuj�c�ho a d�le souhlas� se zas�l�n�m obchodn�ch sd�len� prod�vaj�c�m na elektronickou adresu kupuj�c�ho.</p>
<p class="uroven2">10.2.� Kupuj�c� souhlas� s ukl�d�n�m tzv. cookies na jeho po��ta�. V�p��pad�, �e je n�kup na webov� str�nce mo�n� prov�st a z�vazky prod�vaj�c�ho z kupn� smlouvy plnit, ani� by doch�zelo k�ukl�d�n� tzv. cookies na po��ta� kupuj�c�ho, m��e kupuj�c� souhlas podle p�edchoz� v�ty kdykoliv odvolat.</p></div>
<div class="toggle11"><h2 id="led11" class="uroven2"><span id="dorucovani">11. </span>DORU�OV�N�</h2>
<p class="uroven2">11.1.� Kupuj�c�mu m��e b�t doru�ov�no na adresu elektronick� po�ty uvedenou v jeho u�ivatelsk�m ��tu �i uvedenou kupuj�c�m v objedn�vce.</p></div>
<div class="toggle12"><h2 id="ustanoveni" class="uroven2"><span id="ustanoveni">12. </span>Z�V�RE�N� USTANOVEN�</h2>
<p class="uroven2">12.1.� Pokud vztah zalo�en� kupn� smlouvou obsahuje mezin�rodn� (zahrani�n�) prvek, pak strany sjedn�vaj�, �e�vztah se ��d� �esk�m pr�vem. T�mto nejsou dot�ena pr�va spot�ebitele vypl�vaj�c� z�obecn� z�vazn�ch pr�vn�ch p�edpis�.</p>
<p class="uroven2">12.2.� Je-li n�kter� ustanoven� obchodn�ch podm�nek neplatn� nebo ne��inn�, nebo se takov�m stane, nam�sto neplatn�ch ustanoven� nastoup� ustanoven�, jeho� smysl se neplatn�mu ustanoven� co nejv�ce p�ibli�uje. Neplatnost� nebo ne��innost� jednoho ustanoven� nen� dotknut� platnost ostatn�ch ustanoven�. Zm�ny a dopl�ky kupn� smlouvy �i�obchodn�ch podm�nek vy�aduj� p�semnou formu.</p>
<p class="uroven2">12.3.� Kupn� smlouva v�etn� obchodn�ch podm�nek je archivov�na prod�vaj�c�m v�elektronick� podob� a nen� p��stupn�.</p>
<p class="uroven2">12.4.� P��lohu obchodn�ch podm�nek tvo�� vzorov� formul�� pro odstoupen� od kupn� smlouvy.</p>
<p class="uroven2">12.5.� Kontaktn� �daje prod�vaj�c�ho: Hrn���sk� 765, �esk� L�pa 470 01, roel.ramp@seznam.cz, +420 602 658 319.</p>
<p class="uroven2" style="margin-left:3.8%">V �esk� L�p� � � �dne 01.04.2015</p></div>
</div>
<div>
</div>
    
</div>

<span id="vyzkouset" style="position:relative;top:100px;"></span>

<div class="wrapper velka" style="margin-top:100px;margin-bottom:80px;">
     <form name="form1" method="post" action="signup.php" class="sky-form pbile" style="padding-bottom:20px;padding-top: 20px;">
				<h2 class="marginl velka shadow">1x t�dn� 10 nejlep��ch zem�d�lsk�ch nab�dek zdarma</h2>
				
				<fieldset>
					<section>
						<label class="label">Email</label>
						<label class="input">
							<input type="text">
						</label>
</section>

					<button type="submit" class="button">Odeslat</button></form>
</div></div>
</div></div>


<div class="round font40 textpole shadow" style="background:rgba(255, 255, 255, 1);height:140px; margin-top:60px;">
<div class="featuresColumn7 centertext shadow textpole">
<div style="text-align:left;margin-left:30%;width:200px;">

<span style="vertical-align:super;font-size:50%;">#</span>2<span class='supsub'><sup class='superscript'>nejrychlej�� zem�d�lsk�</sup><sub class='subscript'>obchodn� spole�nost ....</sub></span>

</div>
</div>
<div class="featuresColumn7 centertext shadow textpole"><div style="text-align:left;margin-left:40%;width:200px;"><img src="../cz/img/logo-klasa.png" class="efekt1" style="max-height:80px; margin-top:-10px;" /></div></div>
<div class="featuresColumn7 centertext shadow textpole last">

<div style="text-align:left;margin-left:0%;width:200px;"><span style="vertical-align:super;font-size:50%;">#</span>1<span class='supsub'><sup class='superscript'>zde p�ijde text ...</sup><sub class='subscript'>co vystihne ifarm</sub></span></div>
</div>
</div>


<div class="wrapper textpole" style="margin-top:0px;margin-bottom:0px;">
<p><h2 class="marginl velka shadow"></h2></p></div>
<div class="wrapper textpole" style="background:white; margin-top:0px;margin-bottom:0px;min-height:420px;">
<div class="featuresColumn7 centertext shadow textpole">
<div style="text-align:left;margin-left:30%;width:200px;"><h2 class="velka">ifarm ��et</h2>
M�j ��et<br>Nastaven�<br>Technick� podpora </div>
</div>
<div class="featuresColumn7 centertext shadow textpole"><div style="text-align:left;margin-left:30%;width:200px;"><h2 class="velka">informace</h2>FAQ<br>Projekt ifarm<br>Obchodn� podm�nky  </div></div>
<div class="featuresColumn7 centertext shadow textpole last">

<div style="text-align:left;margin-left:30%;width:200px;"><h2 class="velka">kontakt</h2>602 658 319<br><span  id="kontakt"></span>Roel Adriaan Ramp<br>Hrn���sk� 765, �esk� L�pa<br></div><img class="efekt1" src="img/cr.png" style="margin-left:-220%;margin-top:10%;" />

</div>
</div>

</div>

</div>


<!-- <script>
$('#hidemenu').click(function(e) {
        e.stopPropagation();
    });

$(document).click(function() {
    $('#hidemenu').fadeOut(500);
});
</script> -->

<script>
$('html').click(function() {
    $('#subscribe-pop').hide();
 })

 $('#footleft').click(function(e){
     e.stopPropagation();
 });

$('#link').click(function(e) {
 $('#subscribe-pop').toggle();
 });



</script>

<script>
var menu_elements = document.querySelectorAll('.menu>li'),
    menu_length = menu_elements.length;
for (var i = 0; i < menu_length; i++) {
    menu_elements[i].addEventListener('click', function (e) {
        var target = document.querySelector('.container>.' + e.target.classList[0]); // clicked element
        Array.prototype.filter.call(target.parentNode.children, function (siblings) {
            siblings.style.display = 'none'; // hide sibling elements
        });
        target.style.display = 'block'; // show clicked element
    });
}
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5565eab519120cff1852f0a6/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>



</html>
