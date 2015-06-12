<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>iFarm.cz - Portál pro zemìdìlce v Èesku</title>
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
			<li><a href="#videa">Projekt ifarm</a></li><li><a href="#ukazka">Ukázka z praxe</a></li>
<li><a href="#jaktofunguje">Jak to funguje?</a></li>

<li><a href="#kolik">Kolik to stojí?</a></li>
<li><a href="#vyzkouset">Vyzkoušet</a></li><li><a href="#reference">Reference</a></li><li><a href="#podminky">Obchodní podmínky</a></li><li><a href="#kontakt">Kontakt</a></li>	<li><div id="footleft">
<a href="" id="link" style="color:white">Pøihlásit</a>
<div id="subscribe-pop">

<div class="featuresColumn4 last shadow" style="border-radius: 0px 0px 8px 8px; width:14%;padding-top:20px; padding-bottom:22px; position:fixed; top: 181px;
  right: 50px; background: rgba(232, 240, 49, 0.5); opacity: 1 !important; border-top:0px solid white">
 
<div class="body" id="prihlasit" style="padding:0px !important;">			
		
			<!-- Red color scheme -->
			<form name="form1" method="post" action="signup.php" class="sky-form">
				
				
				<fieldset style="padding: 0 0 0;">
					<section>
						<label class="label" class="textshadow" style="color: white;">Jméno</label>
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

					<button type="submit" class="button">Pøihlásit</button></fieldset></form></div>
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
  line-height: 40px;color:#e5ef00;">Pomáháme zrychlovat potøeby zemìdìlce</h2>
<div style="margin-top:0px;"></div>
<div class="round textpole shadow" style="background:rgba(255, 255, 255, 0.9); margin-top:0px;margin-left:-108px;  width: 92%;"><div style="margin-left:90px;">
<h2 style="margin-left:0%;margin-bottom: 20px;">Vıhody ifarm.cz</h2><div style="opacity:0.9;">
<ul style="list-style-type:none;"><li class="round" style="width:200px;padding-left:60px;background:#00b800; color:white;">Vıhoda 1</li><li class="round" style="width:200px;padding-left:60px;">Vıhoda 2</li><li class="round" style="width:200px;padding-left:60px;">Vıhoda 3</li></ul><ul style="list-style-type:none; margin-left:300px;margin-top:-112px;"><li class="round" style="width:200px;padding-left:60px;background:#7e4c00; color:white">Vıhoda 1</li><li class="round" style="width:200px;padding-left:60px;">Vıhoda 2</li><li class="round" style="width:200px;padding-left:60px;">Vıhoda 3</li></ul>
<ul style="list-style-type:none; margin-left:600px;margin-top:-112px;"><li class="round" style="width:200px;padding-left:60px;background:#b77100; color:white;">Vıhoda 1</li><li class="round" style="width:200px;padding-left:60px;">Vıhoda 2</li><li class="round" style="width:200px;padding-left:60px;">Vıhoda 3</li></ul></div></div></div>


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
<h2 class="velka marginl margint"style="margin-bottom:20px; background:white; padding-bottom:40px;padding-top:20px; margin-bottom:-30px;padding-left:60px;margin-left:-30px;">Kolik to stojí</h2>
</div>
<div class="wrapper round font24 shadow" style="margin-top:0px;margin-bottom:80px; font-size: 24px; margin-left:0%;">
 
<div class="featuresColumn5 textpole" style="background:white; border-right:1px solid white; border-left:1px solid white; padding-top: 14px;
  padding-bottom: 30px;">
<span class="textpole sedivatext">Chci poptávat</span></br>
<span class="center green shadowwhite">0Kè ZDARMA</span>
</div>
 
<div class="featuresColumn5 textpole last" style="background:white;">
  <span class="textpole sedivatext">Chci nabízet</span></br>
<div style="margin-left:20%;"><span class="green shadowwhite">Mìsíc ZDARMA, </span><span style="color:blue;">1200Kè / Rok</span></div>
</div>
     
     
</div>
   
<div class="wrapper shadow" style="margin-top:20px;margin-bottom:20px;">

</div>
<div class="wrapper font24 textpole shadow" style="background:white;margin-top: 220px;
  padding-bottom: 80px;
  margin-bottom: 100px; font-size: 24px; min-height: 110px;">
<h2 class="velka marginl">Recenze</h2>
<div class="featuresColumn2">
  <span class="textpole sedivatext">„Kdo koupí, neprohloupí“<cite> M. Svoboda, Praha</cite></span></div>
<div class="featuresColumn2 last">
 <span class="textpole sedivatext">„Kdo koupí, neprohloupí“<cite> N. Stovoda, Parha</cite></span></div></br>
<div class="featuresColumn2">
  <span class="textpole sedivatext">„Kdo koupí, neprohloupí“<cite> K. Stonoha, Praah</cite></span></div>
<div class="featuresColumn2 last">
 <span class="textpole sedivatext">„Kdo koupí, neprohloupí“<cite> L. Svotbola, Harpa</cite></span></div>
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
<h2 class="velka marginl">Jak to celé funguje?</h2>
<img src="img/kroky.jpg" style="display:block;
    margin-left:auto; margin-right:auto;" />
     </div>

<div class="wrapper shadow" style="margin-top:0px;margin-bottom:20px;">

</div>
<div class="wrapper font24 shadow" style="margin-top:100px;margin-bottom:80px; font-size: 24px; margin-left:0%; background: white; padding-bottom:120px;margin-bottom:-20px; padding-top:20px;">
<p><h2 class="velka marginl">Poptávejte a zaènìte šetøit 10-30% nákladù</h2></p>
 
<div class="featuresColumn5 textpole" style="min-height:103px;border-right:0px solid white; border-left:0px solid white; padding-top:0px; margin-top: 20px;">
<span class="textpole sedivatext">Zadat poptávku</span>
<span class="green shadowwhite"> ZDARMA</span>
</div>
 
<div class="featuresColumn5 textpole last">
  <span class="textpole sedivatext">Zadat nabídku</span>
<span style="margin-left:0%;"><span class="green shadowwhite"> ZDARMA</span></span></br><span style="font-size:18px; margin-left:25%">Mìsíc zdarma, dále<span style="color:blue;"> 1200Kè / Rok</span></span></div>
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
<h2 class="marginl velka shadow">Ukázka uvnitø v praxi</h2>
<img src="img/videobig.jpg"  style="max-width:40%;max-height:40%;margin-top:0px;margin-left:28%;" /></div>
   
</div>
<span id="podminky" style="position:relative;top:50px;"></span>
<div class="backgroun">

<div class="wrapper" style="margin-top:100px;margin-bottom:80px;word-wrap: break-word;word-break: break-word;">
<ul class="menu" style="padding-top: 14px;
  padding-bottom: 10px;
  background: white;">
<h2 class="marginl velka shadow">Obchodní podmínky</h2>
    <li class="toggle1 round">Úvodní ustanovení</li>
    <li class="toggle2 round">Uivatelskı úèet</li>
    <li class="toggle3 round">Uzavøení kupní smlouvy</li>
    <li class="toggle4 round">Cena zboí a Platební podmínky</li>
    <li class="toggle5 round">Odstoupení od kupní smlouvy</li>
<li class="toggle6 round">Pøeprava a dodání zboí</li><li class="toggle7 round">Práva z Vadného plnìní</li><li class="toggle8 round">Další práva a povinnosti smluvních stran</li><li class="toggle9 round">Ochrana osobních údajù</li><li class="toggle10 round">Zasílání obchodních sdìlení a ukládání cookies</li><li class="toggle11 round">Doruèování</li><li class="toggle12 round">Závìreèná ustanovení</li>
</ul>
<div class="container" style="padding-left: 20px;margin-top:-10px;border-top:1px solid #f5f5f5;
  padding-right: 20px;
  margin-right: 10px;
  background: white;">
<div class="toggle0"></div>
    <div class="toggle1"><h2 id="led1"><span id="uvodni-ustanoveni">1. </span>ÚVODNÍ USTANOVENÍ</h2>
<p class="uroven2">1.1.   Tyto obchodní podmínky obchodní spoleènosti  Roel Adriaan Ramp, se sídlem Hrnèíøská 765, 470 01, Èeská Lípa, identifikaèní èíslo: 86941461, zapsané v obchodním rejstøíku vedeném ZIVCL/5939/2008/SIP/2, oddíl obchodní spoleènosti , vloka pro prodej zboí prostøednictvím on-line obchodu umístìného na internetové adrese www.LEDsviti.czupravují v souladu s ustanovením § 1751 odst. 1 zákona è. 89/2012 Sb., obèanskı zákoník vzájemná práva a povinnosti smluvních stran vzniklé v souvislosti nebo na základì kupní smlouvy uzavírané mezi prodávajícím a jinou fyzickou osobou prostøednictvím internetového obchodu prodávajícího. Internetovı obchod je prodávajícím provozován na webové stránce umístnìné na internetové adrese www.LEDsviti.cz.</p>
<p class="uroven2">1.2.      Obchodní podmínky se nevztahují na pøípady, kdy osoba, která má v úmyslu nakoupit zboí od prodávajícího, je právnickou osobou èi osobou, je jedná pøi objednávání zboí v rámci své podnikatelské èinnosti nebo v rámci svého samostatného vıkonu povolání.</p>
<p class="uroven2">1.3.      Ustanovení odchylná od obchodních podmínek je moné sjednat v kupní smlouvì. Odchylná ujednání v kupní smlouvì mají pøednost pøed ustanoveními obchodních podmínek.</p>
<p class="uroven2">1.4.      Ustanovení obchodních podmínek jsou nedílnou souèástí kupní smlouvy. Kupní smlouva a obchodní podmínky jsou vyhotoveny v èeském jazyce. Kupní smlouvu lze uzavøít v èeském jazyce.</p>
<p class="uroven2">1.5.      Znìní obchodních podmínek mùe prodávající mìnit èi doplòovat. Tímto ustanovením nejsou dotèena práva a povinnosti vzniklá po dobu úèinnosti pøedchozího znìní obchodních podmínek.</p></div>

    <div class="toggle2"><h2 id="led2"><span id="uzivatelsky-ucet">2. </span>UIVATELSKİ ÚÈET</h2>
<p class="uroven2">2.1.      Na základì registrace kupujícího provedené na webové stránce mùe kupující pøistupovat do svého uivatelského rozhraní. Ze svého uivatelského rozhraní mùe kupující provádìt objednávání zboí v pøípadì, e to webové rozhraní obchodu umoòuje, mùe kupující provádìt objednávání zboí té bez registrace pøímo z webového rozhraní obchodu.</p>
<p class="uroven2">2.2.      Pøi registraci na webové stránce a pøi objednávání zboí je kupující povinen uvádìt správnì a pravdivì všechny údaje. Údaje uvedené v uivatelském úètu je kupující pøi jakékoliv jejich zmìnì povinen aktualizovat. Údaje uvedené kupujícím v uivatelském úètu a pøi objednávání zboí jsou prodávajícím povaovány za správné.</p>
<p class="uroven2">2.3.      Pøístup k uivatelskému úètu je zabezpeèen uivatelskım jménem a heslem. Kupující je povinen zachovávat mlèenlivost ohlednì informací nezbytnıch k pøístupu do jeho uivatelského úètu.</p>
<p class="uroven2">2.4.      Kupující není oprávnìn umonit vyuívání uivatelského úètu tøetím osobám.</p>
<p class="uroven2">2.5.      Prodávající mùe zrušit uivatelskı úèet, a to zejména v pøípadì, kdy kupující svùj uivatelskı úèet déle ne  rok     nevyuívá, èi v pøípadì, kdy kupující poruší své povinnosti z kupní smlouvy.</p>
<p class="uroven2">2.6.      Kupující bere na vìdomí, e uivatelskı úèet nemusí bıt dostupnı nepøetritì, a to zejména s ohledem na nutnou údrbu hardwarového a softwarového vybavení prodávajícího, popø. nutnou údrbu hardwarového a softwarového vybavení tøetích osob.</p></div>
    <div class="toggle3"><h2 id="led3" class="uroven2"><span id="kupni-smlouva">3. </span>UZAVØENÍ KUPNÍ SMLOUVY</h2>
<p class="uroven2">3.1.      Veškerá prezentace zboí umístìná ve webovém rozhraní obchodu je informativního charakteru a prodávající není povinen uzavøít kupní smlouvu ohlednì tohoto zboí. Ustanovení § 1732 odst. 2 obèanského zákoníku se nepouije.</p>
<p class="uroven2">3.2.      Webové rozhraní obchodu obsahuje informace o zboí, a to vèetnì uvedení cen jednotlivého zboí. Ceny zboí jsou uvedeny vèetnì danì z pøidané hodnoty a všech souvisejících poplatkù. Ceny zboí zùstávají v platnosti po dobu, kdy jsou zobrazovány ve webovém rozhraní obchodu. Tímto ustanovením není omezena monost prodávajícího uzavøít kupní smlouvu za individuálnì sjednanıch podmínek.</p>
<p class="uroven2">3.3.      Webové rozhraní obchodu obsahuje také informace o nákladech spojenıch s balením a dodáním zboí. Informace o nákladech spojenıch s balením a dodáním zboí uvedené ve webovém rozhraní obchodu platí pouze v pøípadech, kdy je zboí doruèováno v rámci území Èeské republiky.</p>
<p class="uroven2">3.4.      Pro objednání zboí vyplní kupující objednávkovı formuláø ve webovém rozhraní obchodu. Objednávkovı formuláø obsahuje zejména informace o:</p>
<p class="uroven2">3.4.1.   objednávaném zboí (objednávané zboí „vloí“ kupující do elektronického nákupního košíku webového rozhraní obchodu),</p>
<p class="uroven2">3.4.2.   zpùsobu úhrady kupní ceny zboí, údaje o poadovaném zpùsobu doruèení objednávaného zboí a</p>
<p class="uroven2">3.4.3.   informace o nákladech spojenıch s dodáním zboí (dále spoleènì jen jako „objednávka“).</p>
<p class="uroven2">3.5.      Pøed zasláním objednávky prodávajícímu je kupujícímu umonìno zkontrolovat a mìnit údaje, které do objednávky kupující vloil, a to i s ohledem na monost kupujícího zjišovat a opravovat chyby vzniklé pøi zadávání dat do objednávky. Objednávku odešle kupující prodávajícímu kliknutím na tlaèítko „OBJEDNAT“. Údaje uvedené v objednávce jsou prodávajícím povaovány za správné. Prodávající neprodlenì po obdrení objednávky toto obdrení kupujícímu potvrdí elektronickou poštou, a to na adresu elektronické pošty kupujícího uvedenou v uivatelském rozhraní èi v objednávce(dále jen „elektronická adresa kupujícího“).</p>
<p class="uroven2">3.6.      Prodávající je vdy oprávnìn v závislosti na charakteru objednávky (mnoství zboí, vıše kupní ceny, pøedpokládané náklady na dopravu) poádat kupujícího o dodateèné potvrzení objednávky (napøíklad písemnì èi telefonicky).</p>
<p class="uroven2">3.7.      Smluvní vztah mezi prodávajícím a kupujícím vzniká doruèením pøijetí objednávky (akceptací), je je prodávajícím zasláno kupujícímu elektronickou poštou, a to na adresu elektronické pošty kupujícího.</p>
<p class="uroven2">3.8.      Kupující souhlasí s pouitím komunikaèních prostøedkù na dálku pøi uzavírání kupní smlouvy. Náklady vzniklé kupujícímu pøi pouití komunikaèních prostøedkù na dálku v souvislosti s uzavøením kupní smlouvy (náklady na internetové pøipojení, náklady na telefonní hovory) si hradí kupující sám, pøièem tyto náklady se neliší od základní sazby.</p></div>
    <div class="toggle4"><h2 id="led4" class="uroven2"><span id="cena-platebni-podminky">4. </span>CENA ZBOÍ A PLATEBNÍ PODMÍNKY</h2>
<p class="uroven2">4.1.      Cenu zboí a pøípadné náklady spojené s dodáním zboí dle kupní smlouvy mùe kupující uhradit prodávajícímu následujícími zpùsoby:</p>
<p class="uroven2">v hotovosti ve skladì prodávajícího na adrese Hrnèíøská 765, Èeská Lípa  470 01;</p>
<p class="uroven2">v hotovosti na dobírku v místì urèeném kupujícím v objednávce;</p>
<p class="uroven2">bezhotovostnì pøevodem na úèet prodávajícího è. 2000249286 / 2010, vedenı u spoleènosti FIO Banka (dále jen „úèet prodávajícího“).</p>
<p class="uroven2">4.2.      Spoleènì s kupní cenou je kupující povinen zaplatit prodávajícímu také náklady spojené s balením a dodáním zboí ve smluvené vıši. Není-li uvedeno vıslovnì jinak, rozumí se dále kupní cenou i náklady spojené s dodáním zboí.</p>
<p class="uroven2">4.3.      Prodávající nepoaduje od kupujícího zálohu èi jinou obdobnou platbu. Tímto není dotèeno ustanovení èl. 4.6 obchodních podmínek ohlednì povinnosti uhradit kupní cenu zboí pøedem.</p>
<p class="uroven2">4.4.      V pøípadì platby v hotovosti èi v pøípadì platby na dobírku je kupní cena splatná pøi pøevzetí zboí. V pøípadì bezhotovostní platby je kupní cena splatná do 14 dnù od uzavøení kupní smlouvy.</p>
<p class="uroven2">4.5.      V pøípadì bezhotovostní platby je kupující povinen uhrazovat kupní cenu zboí spoleènì s uvedením variabilního symbolu platby. V pøípadì bezhotovostní platby je závazek kupujícího uhradit kupní cenu splnìn okamikem pøipsání pøíslušné èástky na úèet prodávajícího.</p>
<p class="uroven2">4.6.      Prodávající je oprávnìn, zejména v pøípadì, e ze strany kupujícího nedojde k dodateènému potvrzení objednávky (èl. 3.6), poadovat uhrazení celé kupní ceny ještì pøed odesláním zboí kupujícímu. Ustanovení § 2119 odst. 1 obèanského zákoníku se nepouije.</p>
<p class="uroven2">4.7.      Pøípadné slevy z ceny zboí poskytnuté prodávajícím kupujícímu nelze vzájemnì kombinovat.</p>
<p class="uroven2">4.8.      Je-li to v obchodním styku obvyklé nebo je-li tak stanoveno obecnì závaznımi právními pøedpisy, vystaví prodávající ohlednì plateb provádìnıch na základì kupní smlouvy kupujícímu daòovı doklad – fakturu. Prodávající je plátcem danì z pøidané hodnoty. Daòovı doklad – fakturu vystaví prodávající kupujícímu po uhrazení ceny zboí a zašle jej v elektronické podobì na elektronickou adresu kupujícího.</p></div>
    <div class="toggle5"><h2 id="led5" class="uroven2"><span id="odstoupeni-od-smlouvy"></span>5. ODSTOUPENÍ OD KUPNÍ SMLOUVY</h2>
<p class="uroven2">5.1.      Kupující bere na vìdomí, e dle ustanovení § 1837 obèanského zákoníku, nelze mimo jiné odstoupit od kupní smlouvy o dodávce zboí, které bylo upraveno podle pøání kupujícího nebo pro jeho osobu, od kupní smlouvy o dodávce zboí, které podléhá rychlé zkáze, jako i zboí, které bylo po dodání nenávratnì smíseno s jinım zboím, od kupní smlouvy o dodávce zboí v uzavøeném obalu, které spotøebitel z obalu vyòal a z hygienickıch dùvodù jej není moné vrátit a od kupní smlouvy o dodávce zvukové nebo obrazové nahrávky nebo poèítaèového programu, pokud porušil jejich pùvodní obal.</p>
<p class="uroven2">5.2.      Nejedná-li se o pøípad uvedenı v èl. 5.1 èi o jinı pøípad, kdy nelze od kupní smlouvy odstoupit, má kupující v souladu s ustanovením § 1829 odst. 1 obèanského zákoníku právo od kupní smlouvy odstoupit, a to do ètrnácti (14) dnù od pøevzetí zboí, pøièem v pøípadì, e pøedmìtem kupní smlouvy je nìkolik druhù zboí nebo dodání nìkolika èástí, bìí tato lhùta ode dne pøevzetí poslední dodávky zboí. Odstoupení od kupní smlouvy musí bıt prodávajícímu odesláno ve lhùtì uvedené v pøedchozí vìtì. Pro odstoupení od kupní smlouvy mùe kupující vyuit vzorovı formuláø poskytovanı prodávajícím, jen tvoøí pøílohu obchodních podmínek. Odstoupení od kupní smlouvy mùe kupující zasílat mimo jiné na adresu provozovny prodávajícího èi na adresu elektronické pošty prodávajícího      .</p>
<p class="uroven2">5.3.      V pøípadì odstoupení od kupní smlouvy dle èl. 5.2 obchodních podmínek se kupní smlouva od poèátku ruší. Zboí musí bıt prodávajícímu vráceno do ètrnácti (14) dnù od odstoupení od smlouvy prodávajícímu. Odstoupí-li kupující od kupní smlouvy, nese kupující náklady spojené s navrácením zboí prodávajícímu, a to i v tom pøípadì, kdy zboí nemùe bıt vráceno pro svou povahu obvyklou poštovní cestou.</p>
<p class="uroven2">5.4.      V pøípadì odstoupení od smlouvy dle èl. 5.2 obchodních podmínek vrátí prodávající penìní prostøedky pøijaté od kupujícího do ètrnácti (14) dnù od odstoupení od kupní smlouvy kupujícím, a to stejnım zpùsobem, jakım je prodávající od kupujícího pøijal. Prodávající je takté oprávnìn vrátit plnìní poskytnuté kupujícím ji pøi vrácení zboí kupujícím èi jinım zpùsobem, pokud s tím kupující bude souhlasit a nevzniknou tím kupujícímu další náklady. Odstoupí-li kupující od kupní smlouvy, prodávající není povinen vrátit pøijaté penìní prostøedky kupujícímu døíve, ne mu kupující zboí vrátí nebo prokáe, e zboí podnikateli odeslal.</p>
<p class="uroven2">5.5.      Nárok na úhradu škody vzniklé na zboí je prodávající oprávnìn jednostrannì zapoèíst proti nároku kupujícího na vrácení kupní ceny.</p>
<p class="uroven2">5.6.      Do doby pøevzetí zboí kupujícím je prodávající oprávnìn kdykoliv od kupní smlouvy odstoupit. V takovém pøípadì vrátí prodávající kupujícímu kupní cenu bez zbyteèného odkladu, a to bezhotovostnì na úèet urèenı kupujícím.</p>
<p class="uroven2">5.7.      Je-li spoleènì se zboím poskytnut kupujícímu dárek, je darovací smlouva mezi prodávajícím a kupujícím uzavøena s rozvazovací podmínkou, e dojde-li k odstoupení od kupní smlouvy kupujícím, pozbıvá darovací smlouva ohlednì takového dárku úèinnosti a kupující je povinen spolu se zboím prodávajícímu vrátit i poskytnutı dárek.</p></div>
<div class="toggle6"><h2 id="led6" class="uroven2"><span id="doprava-zdarma">6. </span>PØEPRAVA A DODÁNÍ ZBOÍ</h2>
<p class="uroven2">6.1.      V pøípadì, e je zpùsob dopravy smluven na základì zvláštního poadavku kupujícího, nese kupující riziko a pøípadné dodateèné náklady spojené s tímto zpùsobem dopravy.</p>
<p class="uroven2">6.2.      Je-li prodávající podle kupní smlouvy povinen dodat zboí na místo urèené kupujícím v objednávce, je kupující povinen pøevzít zboí pøi dodání. Poštovné èiní 120 Kè.</p>
<p class="uroven2">6.3.      V pøípadì, e je z dùvodù na stranì kupujícího nutno zboí doruèovat opakovanì nebo jinım zpùsobem, ne bylo uvedeno v objednávce, je kupující povinen uhradit náklady spojené s opakovanım doruèováním zboí, resp. náklady spojené s jinım zpùsobem doruèení.</p>
<p class="uroven2">6.4.      Pøi pøevzetí zboí od pøepravce je kupující povinen zkontrolovat neporušenost obalù zboí a v pøípadì jakıchkoliv závad toto neprodlenì oznámit pøepravci. V pøípadì shledání porušení obalu svìdèícího o neoprávnìném vniknutí do zásilky nemusí kupující zásilku od pøepravce pøevzít.</p>
<p class="uroven2">6.5.      Pøi objednávce zboí nad 3000Kè je cena za dopravu 0Kè.</p>
<p class="uroven2">6.6.      Další práva a povinnosti stran pøi pøepravì zboí mohou upravit zvláštní dodací podmínky prodávajícího, jsou-li prodávajícím vydány.</p></div>
<div class="toggle7"><h2 id="led7" class="uroven2"><span id="vadne-plneni">7. </span>PRÁVA Z VADNÉHO PLNÌNÍ</h2>
<p class="uroven2">7.1.      Práva a povinnosti smluvních stran ohlednì práv z vadného plnìní se øídí pøíslušnımi obecnì závaznımi pøedpisy (zejména ustanoveními § 1914 a 1925, § 2099 a 2117 a § 2161 a 2174 obèanského zákoníku).</p>
<p class="uroven2">7.2.      Prodávající odpovídá kupujícímu, e zboí pøi pøevzetí nemá vady. Zejména prodávající odpovídá kupujícímu, e v dobì, kdy kupující zboí pøevzal:</p>
<p class="uroven2">7.2.1.   má zboí vlastnosti, které si strany ujednaly, a chybí-li ujednání, má takové vlastnosti, které prodávající nebo vırobce popsal nebo které kupující oèekával s ohledem na povahu zboí a na základì reklamy jimi provádìné,</p>
<p class="uroven2">7.2.2.   se zboí hodí k úèelu, kterı pro jeho pouití prodávající uvádí nebo ke kterému se zboí tohoto druhu obvykle pouívá,</p>
<p class="uroven2">7.2.3.   zboí odpovídá jakostí nebo provedením smluvenému vzorku nebo pøedloze, byla-li jakost nebo provedení urèeno podle smluveného vzorku nebo pøedlohy,</p>
<p class="uroven2">7.2.4.   je zboí v odpovídajícím mnoství, míøe nebo hmotnosti a</p>
<p class="uroven2">7.2.5.   zboí vyhovuje poadavkùm právních pøedpisù.</p>
<p class="uroven2">7.3.      Ustanovení uvedená v èl. 7.2 obchodních podmínek se nepouijí u zboí prodávaného za niší cenu na vadu, pro kterou byla niší cena ujednána, na opotøebení zboí zpùsobené jeho obvyklım uíváním, u pouitého zboí na vadu odpovídající míøe pouívání nebo opotøebení, kterou zboí mìlo pøi pøevzetí kupujícím, nebo vyplıvá-li to z povahy zboí.</p>
<p class="uroven2">7.4.      Projeví-li se vada v prùbìhu šesti mìsícù od pøevzetí, má se za to, e zboí bylo vadné ji pøi pøevzetí.</p>
<p class="uroven2">7.5.      Práva z vadného plnìní uplatòuje kupující u prodávajícího na adrese jeho provozovny, v ní je pøijetí reklamace moné s ohledem na sortiment prodávaného zboí, pøípadnì i v sídle nebo místì podnikání. Za okamik uplatnìní reklamace se povauje okamik, kdy prodávající obdrel od kupujícího reklamované zboí.</p>
<p class="uroven2">7.6.      Další práva a povinnosti stran související s odpovìdností prodávajícího za vady mùe upravit reklamaèní øád prodávajícího.</p></div>
<div class="toggle8"><h2 id="led8" class="uroven2"><span id="dalsi-prava-povinnosti">8. </span>DALŠÍ PRÁVA A POVINNOSTI SMLUVNÍCH STRAN</h2>
<p class="uroven2">8.1.      Kupující nabıvá vlastnictví ke zboí zaplacením celé kupní ceny zboí.</p>
<p class="uroven2">8.2.      Prodávající není ve vztahu ke kupujícímu vázán ádnımi kodexy chování ve smyslu ustanovení § 1826 odst. 1 písm. e) obèanského zákoníku.</p>
<p class="uroven2">8.3.      Mimosoudní vyøizování stíností spotøebitelù zajišuje prodávající prostøednictvím elektronické adresy Roel.ramp@seznam.cz. Informaci o vyøízení stínosti kupujícího zašle prodávající na elektronickou adresu kupujícího.</p>
<p class="uroven2">8.4.      Prodávající je oprávnìn k prodeji zboí na základì ivnostenského oprávnìní. ivnostenskou kontrolu provádí v rámci své pùsobnosti pøíslušnı ivnostenskı úøad. Dozor nad oblastí ochrany osobních údajù vykonává Úøad pro ochranu osobních údajù. Èeská obchodní inspekce vykonává ve vymezeném rozsahu mimo jiné dozor nad dodrováním zákona è. 634/1992 Sb., o ochranì spotøebitele, ve znìní pozdìjších pøedpisù.</p>
<p class="uroven2">8.5.      Kupující tímto pøebírá na sebe nebezpeèí zmìny okolností ve smyslu § 1765 odst. 2 obèanského zákoníku.</p></div>
<div class="toggle9"><h2 id="led9" class="uroven2"><span id="osobni-udaje">9. </span>OCHRANA OSOBNÍCH ÚDAJÙ</h2>
<p class="uroven2">9.1.      Ochrana osobních údajù kupujícího, kterı je fyzickou osobou, je poskytována zákonem è. 101/2000 Sb., o ochranì osobních údajù, ve znìní pozdìjších pøedpisù.</p>
<p class="uroven2">9.2.      Kupující souhlasí se zpracováním tìchto svıch osobních údajù: jméno a pøíjmení, adresa bydlištì, identifikaèní èíslo, daòové identifikaèní èíslo, adresa elektronické pošty a telefonní èíslo (dále spoleènì vše jen jako „osobní údaje“).</p>
<p class="uroven2">9.3.      Kupující souhlasí se zpracováním osobních údajù prodávajícím, a to pro úèely realizace práv a povinností z kupní smlouvy a pro úèely vedení uivatelského úètu. Nezvolí-li kupující jinou monost, souhlasí se zpracováním osobních údajù prodávajícím také pro úèely zasílání informací a obchodních sdìlení kupujícímu. Souhlas se zpracováním osobních údajù v celém rozsahu dle tohoto èlánku není podmínkou, která by sama o sobì znemoòovala uzavøení kupní smlouvy.</p>
<p class="uroven2">9.4.      Kupující bere na vìdomí, e je povinen své osobní údaje (pøi registraci, ve svém uivatelském úètu, pøi objednávce provedené z webového rozhraní obchodu) uvádìt správnì a pravdivì a e je povinen bez zbyteèného odkladu informovat prodávajícího o zmìnì ve svıch osobních údajích.</p>
<p class="uroven2">9.5.      Zpracováním osobních údajù kupujícího mùe prodávající povìøit tøetí osobu, jakoto zpracovatele. Kromì osob dopravujících zboí nebudou osobní údaje prodávajícím bez pøedchozího souhlasu kupujícího pøedávány tøetím osobám.</p>
<p class="uroven2">9.6.      Osobní údaje budou zpracovávány po dobu neurèitou. Osobní údaje budou zpracovávány v elektronické podobì automatizovanım zpùsobem nebo v tištìné podobì neautomatizovanım zpùsobem.</p>
<p class="uroven2">9.7.      Kupující potvrzuje, e poskytnuté osobní údaje jsou pøesné a e byl pouèen o tom, e se jedná o dobrovolné poskytnutí osobních údajù.</p>
<p class="uroven2">9.8.      V pøípadì, e by se kupující domníval, e prodávající nebo zpracovatel (èl. 9.5) provádí zpracování jeho osobních údajù, které je v rozporu s ochranou soukromého a osobního ivota kupujícího nebo v rozporu se zákonem, zejména jsou-li osobní údaje nepøesné s ohledem na úèel jejich zpracování, mùe:</p>
<p class="uroven2">9.8.1.   poádat prodávajícího nebo zpracovatele o vysvìtlení,</p>
<p class="uroven2">9.8.2.   poadovat, aby prodávající nebo zpracovatel odstranil takto vzniklı stav.</p>
<p class="uroven2">9.9.      Poádá-li kupující o informaci o zpracování svıch osobních údajù, je mu prodávající povinen tuto informaci pøedat. Prodávající má právo za poskytnutí informace podle pøedchozí vìty poadovat pøimìøenou úhradu nepøevyšující náklady nezbytné na poskytnutí informace.</p></div>
<div class="toggle10"><h2 id="led10" class="uroven2"><span id="obchodni-sdeleni">10. </span>ZASÍLÁNÍ OBCHODNÍCH SDÌLENÍ A UKLÁDÁNÍ COOKIES</h2>
<p class="uroven2">10.1.  Kupující souhlasí se zasíláním informací souvisejících se zboím, slubami nebo podnikem prodávajícího na elektronickou adresu kupujícího a dále souhlasí se zasíláním obchodních sdìlení prodávajícím na elektronickou adresu kupujícího.</p>
<p class="uroven2">10.2.  Kupující souhlasí s ukládáním tzv. cookies na jeho poèítaè. V pøípadì, e je nákup na webové stránce moné provést a závazky prodávajícího z kupní smlouvy plnit, ani by docházelo k ukládání tzv. cookies na poèítaè kupujícího, mùe kupující souhlas podle pøedchozí vìty kdykoliv odvolat.</p></div>
<div class="toggle11"><h2 id="led11" class="uroven2"><span id="dorucovani">11. </span>DORUÈOVÁNÍ</h2>
<p class="uroven2">11.1.  Kupujícímu mùe bıt doruèováno na adresu elektronické pošty uvedenou v jeho uivatelském úètu èi uvedenou kupujícím v objednávce.</p></div>
<div class="toggle12"><h2 id="ustanoveni" class="uroven2"><span id="ustanoveni">12. </span>ZÁVÌREÈNÁ USTANOVENÍ</h2>
<p class="uroven2">12.1.  Pokud vztah zaloenı kupní smlouvou obsahuje mezinárodní (zahranièní) prvek, pak strany sjednávají, e vztah se øídí èeskım právem. Tímto nejsou dotèena práva spotøebitele vyplıvající z obecnì závaznıch právních pøedpisù.</p>
<p class="uroven2">12.2.  Je-li nìkteré ustanovení obchodních podmínek neplatné nebo neúèinné, nebo se takovım stane, namísto neplatnıch ustanovení nastoupí ustanovení, jeho smysl se neplatnému ustanovení co nejvíce pøibliuje. Neplatností nebo neúèinností jednoho ustanovení není dotknutá platnost ostatních ustanovení. Zmìny a doplòky kupní smlouvy èi obchodních podmínek vyadují písemnou formu.</p>
<p class="uroven2">12.3.  Kupní smlouva vèetnì obchodních podmínek je archivována prodávajícím v elektronické podobì a není pøístupná.</p>
<p class="uroven2">12.4.  Pøílohu obchodních podmínek tvoøí vzorovı formuláø pro odstoupení od kupní smlouvy.</p>
<p class="uroven2">12.5.  Kontaktní údaje prodávajícího: Hrnèíøská 765, Èeská Lípa 470 01, roel.ramp@seznam.cz, +420 602 658 319.</p>
<p class="uroven2" style="margin-left:3.8%">V Èeské Lípì      dne 01.04.2015</p></div>
</div>
<div>
</div>
    
</div>

<span id="vyzkouset" style="position:relative;top:100px;"></span>

<div class="wrapper velka" style="margin-top:100px;margin-bottom:80px;">
     <form name="form1" method="post" action="signup.php" class="sky-form pbile" style="padding-bottom:20px;padding-top: 20px;">
				<h2 class="marginl velka shadow">1x tıdnì 10 nejlepších zemìdìlskıch nabídek zdarma</h2>
				
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

<span style="vertical-align:super;font-size:50%;">#</span>2<span class='supsub'><sup class='superscript'>nejrychlejší zemìdìlská</sup><sub class='subscript'>obchodní spoleènost ....</sub></span>

</div>
</div>
<div class="featuresColumn7 centertext shadow textpole"><div style="text-align:left;margin-left:40%;width:200px;"><img src="../cz/img/logo-klasa.png" class="efekt1" style="max-height:80px; margin-top:-10px;" /></div></div>
<div class="featuresColumn7 centertext shadow textpole last">

<div style="text-align:left;margin-left:0%;width:200px;"><span style="vertical-align:super;font-size:50%;">#</span>1<span class='supsub'><sup class='superscript'>zde pøijde text ...</sup><sub class='subscript'>co vystihne ifarm</sub></span></div>
</div>
</div>


<div class="wrapper textpole" style="margin-top:0px;margin-bottom:0px;">
<p><h2 class="marginl velka shadow"></h2></p></div>
<div class="wrapper textpole" style="background:white; margin-top:0px;margin-bottom:0px;min-height:420px;">
<div class="featuresColumn7 centertext shadow textpole">
<div style="text-align:left;margin-left:30%;width:200px;"><h2 class="velka">ifarm úèet</h2>
Mùj úèet<br>Nastavení<br>Technická podpora </div>
</div>
<div class="featuresColumn7 centertext shadow textpole"><div style="text-align:left;margin-left:30%;width:200px;"><h2 class="velka">informace</h2>FAQ<br>Projekt ifarm<br>Obchodní podmínky  </div></div>
<div class="featuresColumn7 centertext shadow textpole last">

<div style="text-align:left;margin-left:30%;width:200px;"><h2 class="velka">kontakt</h2>602 658 319<br><span  id="kontakt"></span>Roel Adriaan Ramp<br>Hrnèíøská 765, Èeská Lípa<br></div><img class="efekt1" src="img/cr.png" style="margin-left:-220%;margin-top:10%;" />

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
