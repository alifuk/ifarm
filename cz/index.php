<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>iFarm.cz - Portál pro zemědělce v Česku</title>
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
  background-color: #e5ef00;
  opacity: 0.8;
  -ms-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -webkit-transition: opacity 0.2s;
  color: white !important;
}
body > div.radek.hlavicka > nav > ul > li:nth-child(1) {background-color: #b77100;
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
<body class="language-CZ" onload="callFT('CZ_01_Landingpage');" style="background:url('../cz/img/farming-wallpaper6.jpg') no-repeat; max-width:100%; -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;background-attachment: fixed;">


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
<a href="" id="link" style="color:white">Přihlásit</a>
<div id="subscribe-pop">

<div class="featuresColumn4 last shadow" style="border-radius: 0px 0px 8px 8px; width:14%;padding-top:20px; padding-bottom:22px; position:fixed; top:47px; right:-2px; background: rgba(232, 240, 49, 0.5); opacity: 1 !important; border-top:0px solid white">
 
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

					<button type="submit" class="button">Přihlásit</button></fieldset></form></div>
</div>



</div>
</div> 

 </li>	
			</ul>			
			</nav>
		
	</div>
		
	
	
	
	
       
     
      
    </div>
    <div id="story1" class="inner box backgr">
     


<div class="wrapper shadow" style="margin-top:-30px;margin-bottom:80px;">
</div>
<div class="wrapper round font24 shadow" style="margin-top:0px;margin-bottom:80px; font-size: 24px;color:black">
 <span id="top" style="position:relative;top:-60px;"></span>
<div class="featuresColumn3 textpole" style="margin-top:-20px; width:100%;">
<h2 style="font-size: 40px;
  font-weight: normal;
  padding-bottom: 10px;
  line-height: 40px;color:#e5ef00;">Pomáháme zrychlovat potřeby zemědělce</h2>
<div style="margin-top:40px;"></div>
<div class="round textpole shadow" style="background:rgba(255, 255, 255, 0.9); margin-top:40px;"><div style="margin-left:90px;">
<h2 style="margin-left:0%;margin-bottom: 20px;">Výhody ifarm.cz</h2><div style="opacity:0.9;">
<ul style="list-style-type:none;"><li class="round" style="width:200px;padding-left:60px;background:#00b800; color:white;">Výhoda 1</li><li class="round" style="width:200px;padding-left:60px;">Výhoda 2</li><li class="round" style="width:200px;padding-left:60px;">Výhoda 3</li></ul><ul style="list-style-type:none; margin-left:300px;margin-top:-112px;"><li class="round" style="width:200px;padding-left:60px;background:#7e4c00; color:white">Výhoda 1</li><li class="round" style="width:200px;padding-left:60px;">Výhoda 2</li><li class="round" style="width:200px;padding-left:60px;">Výhoda 3</li></ul>
<ul style="list-style-type:none; margin-left:600px;margin-top:-112px;"><li class="round" style="width:200px;padding-left:60px;background:#b77100; color:white;">Výhoda 1</li><li class="round" style="width:200px;padding-left:60px;">Výhoda 2</li><li class="round" style="width:200px;padding-left:60px;">Výhoda 3</li></ul></div></div></div>


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
<span class="center green shadowwhite">0Kč ZDARMA</span>
</div>
 
<div class="featuresColumn5 textpole last" style="background:white;">
  <span class="textpole sedivatext">Chci nabízet</span></br>
<div style="margin-left:20%;"><span class="green shadowwhite">Měsíc ZDARMA, </span><span style="color:blue;">1200Kč / Rok</span></div>
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
<p><h2 class="velka marginl">Poptávejte a začněte šetřit 10-30% nákladů</h2></p>
 
<div class="featuresColumn5 textpole" style="min-height:103px;border-right:0px solid white; border-left:0px solid white; padding-top:0px; margin-top: 20px;">
<span class="textpole sedivatext">Zadat poptávku</span>
<span class="green shadowwhite"> ZDARMA</span>
</div>
 
<div class="featuresColumn5 textpole last">
  <span class="textpole sedivatext">Zadat nabídku</span>
<span style="margin-left:0%;"><span class="green shadowwhite"> ZDARMA</span></span></br><span style="font-size:18px; margin-left:25%">Měsíc zdarma, dále<span style="color:blue;"> 1200Kč / Rok</span></span></div>
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
<h2 class="marginl velka shadow">Ukázka uvnitř v praxi</h2>
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
    <li class="toggle2 round">Uživatelský účet</li>
    <li class="toggle3 round">Uzavření kupní smlouvy</li>
    <li class="toggle4 round">Cena zboží a Platební podmínky</li>
    <li class="toggle5 round">Odstoupení od kupní smlouvy</li>
<li class="toggle6 round">Přeprava a dodání zboží</li><li class="toggle7 round">Práva z Vadného plnění</li><li class="toggle8 round">Další práva a povinnosti smluvních stran</li><li class="toggle9 round">Ochrana osobních údajů</li><li class="toggle10 round">Zasílání obchodních sdělení a ukládání cookies</li><li class="toggle11 round">Doručování</li><li class="toggle12 round">Závěrečná ustanovení</li>
</ul>
<div class="container" style="padding-left: 20px;margin-top:-10px;border-top:1px solid #f5f5f5;
  padding-right: 20px;
  margin-right: 10px;
  background: white;">
<div class="toggle0"></div>
    <div class="toggle1"><h2 id="led1"><span id="uvodni-ustanoveni">1. </span>ÚVODNÍ USTANOVENÍ</h2>
<p class="uroven2">1.1.   Tyto obchodní podmínky obchodní společnosti  Roel Adriaan Ramp, se sídlem Hrnčířská 765, 470 01, Česká Lípa, identifikační číslo: 86941461, zapsané v obchodním rejstříku vedeném ZIVCL/5939/2008/SIP/2, oddíl obchodní společnosti , vložka pro prodej zboží prostřednictvím on-line obchodu umístěného na internetové adrese www.LEDsviti.czupravují v souladu s ustanovením § 1751 odst. 1 zákona č. 89/2012 Sb., občanský zákoník vzájemná práva a povinnosti smluvních stran vzniklé v souvislosti nebo na základě kupní smlouvy uzavírané mezi prodávajícím a jinou fyzickou osobou prostřednictvím internetového obchodu prodávajícího. Internetový obchod je prodávajícím provozován na webové stránce umístněné na internetové adrese www.LEDsviti.cz.</p>
<p class="uroven2">1.2.      Obchodní podmínky se nevztahují na případy, kdy osoba, která má v úmyslu nakoupit zboží od prodávajícího, je právnickou osobou či osobou, jež jedná při objednávání zboží v rámci své podnikatelské činnosti nebo v rámci svého samostatného výkonu povolání.</p>
<p class="uroven2">1.3.      Ustanovení odchylná od obchodních podmínek je možné sjednat v kupní smlouvě. Odchylná ujednání v kupní smlouvě mají přednost před ustanoveními obchodních podmínek.</p>
<p class="uroven2">1.4.      Ustanovení obchodních podmínek jsou nedílnou součástí kupní smlouvy. Kupní smlouva a obchodní podmínky jsou vyhotoveny v českém jazyce. Kupní smlouvu lze uzavřít v českém jazyce.</p>
<p class="uroven2">1.5.      Znění obchodních podmínek může prodávající měnit či doplňovat. Tímto ustanovením nejsou dotčena práva a povinnosti vzniklá po dobu účinnosti předchozího znění obchodních podmínek.</p></div>

    <div class="toggle2"><h2 id="led2"><span id="uzivatelsky-ucet">2. </span>UŽIVATELSKÝ ÚČET</h2>
<p class="uroven2">2.1.      Na základě registrace kupujícího provedené na webové stránce může kupující přistupovat do svého uživatelského rozhraní. Ze svého uživatelského rozhraní může kupující provádět objednávání zboží v případě, že to webové rozhraní obchodu umožňuje, může kupující provádět objednávání zboží též bez registrace přímo z webového rozhraní obchodu.</p>
<p class="uroven2">2.2.      Při registraci na webové stránce a při objednávání zboží je kupující povinen uvádět správně a pravdivě všechny údaje. Údaje uvedené v uživatelském účtu je kupující při jakékoliv jejich změně povinen aktualizovat. Údaje uvedené kupujícím v uživatelském účtu a při objednávání zboží jsou prodávajícím považovány za správné.</p>
<p class="uroven2">2.3.      Přístup k uživatelskému účtu je zabezpečen uživatelským jménem a heslem. Kupující je povinen zachovávat mlčenlivost ohledně informací nezbytných k přístupu do jeho uživatelského účtu.</p>
<p class="uroven2">2.4.      Kupující není oprávněn umožnit využívání uživatelského účtu třetím osobám.</p>
<p class="uroven2">2.5.      Prodávající může zrušit uživatelský účet, a to zejména v případě, kdy kupující svůj uživatelský účet déle než  rok     nevyužívá, či v případě, kdy kupující poruší své povinnosti z kupní smlouvy.</p>
<p class="uroven2">2.6.      Kupující bere na vědomí, že uživatelský účet nemusí být dostupný nepřetržitě, a to zejména s ohledem na nutnou údržbu hardwarového a softwarového vybavení prodávajícího, popř. nutnou údržbu hardwarového a softwarového vybavení třetích osob.</p></div>
    <div class="toggle3"><h2 id="led3" class="uroven2"><span id="kupni-smlouva">3. </span>UZAVŘENÍ KUPNÍ SMLOUVY</h2>
<p class="uroven2">3.1.      Veškerá prezentace zboží umístěná ve webovém rozhraní obchodu je informativního charakteru a prodávající není povinen uzavřít kupní smlouvu ohledně tohoto zboží. Ustanovení § 1732 odst. 2 občanského zákoníku se nepoužije.</p>
<p class="uroven2">3.2.      Webové rozhraní obchodu obsahuje informace o zboží, a to včetně uvedení cen jednotlivého zboží. Ceny zboží jsou uvedeny včetně daně z přidané hodnoty a všech souvisejících poplatků. Ceny zboží zůstávají v platnosti po dobu, kdy jsou zobrazovány ve webovém rozhraní obchodu. Tímto ustanovením není omezena možnost prodávajícího uzavřít kupní smlouvu za individuálně sjednaných podmínek.</p>
<p class="uroven2">3.3.      Webové rozhraní obchodu obsahuje také informace o nákladech spojených s balením a dodáním zboží. Informace o nákladech spojených s balením a dodáním zboží uvedené ve webovém rozhraní obchodu platí pouze v případech, kdy je zboží doručováno v rámci území České republiky.</p>
<p class="uroven2">3.4.      Pro objednání zboží vyplní kupující objednávkový formulář ve webovém rozhraní obchodu. Objednávkový formulář obsahuje zejména informace o:</p>
<p class="uroven2">3.4.1.   objednávaném zboží (objednávané zboží „vloží“ kupující do elektronického nákupního košíku webového rozhraní obchodu),</p>
<p class="uroven2">3.4.2.   způsobu úhrady kupní ceny zboží, údaje o požadovaném způsobu doručení objednávaného zboží a</p>
<p class="uroven2">3.4.3.   informace o nákladech spojených s dodáním zboží (dále společně jen jako „objednávka“).</p>
<p class="uroven2">3.5.      Před zasláním objednávky prodávajícímu je kupujícímu umožněno zkontrolovat a měnit údaje, které do objednávky kupující vložil, a to i s ohledem na možnost kupujícího zjišťovat a opravovat chyby vzniklé při zadávání dat do objednávky. Objednávku odešle kupující prodávajícímu kliknutím na tlačítko „OBJEDNAT“. Údaje uvedené v objednávce jsou prodávajícím považovány za správné. Prodávající neprodleně po obdržení objednávky toto obdržení kupujícímu potvrdí elektronickou poštou, a to na adresu elektronické pošty kupujícího uvedenou v uživatelském rozhraní či v objednávce(dále jen „elektronická adresa kupujícího“).</p>
<p class="uroven2">3.6.      Prodávající je vždy oprávněn v závislosti na charakteru objednávky (množství zboží, výše kupní ceny, předpokládané náklady na dopravu) požádat kupujícího o dodatečné potvrzení objednávky (například písemně či telefonicky).</p>
<p class="uroven2">3.7.      Smluvní vztah mezi prodávajícím a kupujícím vzniká doručením přijetí objednávky (akceptací), jež je prodávajícím zasláno kupujícímu elektronickou poštou, a to na adresu elektronické pošty kupujícího.</p>
<p class="uroven2">3.8.      Kupující souhlasí s použitím komunikačních prostředků na dálku při uzavírání kupní smlouvy. Náklady vzniklé kupujícímu při použití komunikačních prostředků na dálku v souvislosti s uzavřením kupní smlouvy (náklady na internetové připojení, náklady na telefonní hovory) si hradí kupující sám, přičemž tyto náklady se neliší od základní sazby.</p></div>
    <div class="toggle4"><h2 id="led4" class="uroven2"><span id="cena-platebni-podminky">4. </span>CENA ZBOŽÍ A PLATEBNÍ PODMÍNKY</h2>
<p class="uroven2">4.1.      Cenu zboží a případné náklady spojené s dodáním zboží dle kupní smlouvy může kupující uhradit prodávajícímu následujícími způsoby:</p>
<p class="uroven2">v hotovosti ve skladě prodávajícího na adrese Hrnčířská 765, Česká Lípa  470 01;</p>
<p class="uroven2">v hotovosti na dobírku v místě určeném kupujícím v objednávce;</p>
<p class="uroven2">bezhotovostně převodem na účet prodávajícího č. 2000249286 / 2010, vedený u společnosti FIO Banka (dále jen „účet prodávajícího“).</p>
<p class="uroven2">4.2.      Společně s kupní cenou je kupující povinen zaplatit prodávajícímu také náklady spojené s balením a dodáním zboží ve smluvené výši. Není-li uvedeno výslovně jinak, rozumí se dále kupní cenou i náklady spojené s dodáním zboží.</p>
<p class="uroven2">4.3.      Prodávající nepožaduje od kupujícího zálohu či jinou obdobnou platbu. Tímto není dotčeno ustanovení čl. 4.6 obchodních podmínek ohledně povinnosti uhradit kupní cenu zboží předem.</p>
<p class="uroven2">4.4.      V případě platby v hotovosti či v případě platby na dobírku je kupní cena splatná při převzetí zboží. V případě bezhotovostní platby je kupní cena splatná do 14 dnů od uzavření kupní smlouvy.</p>
<p class="uroven2">4.5.      V případě bezhotovostní platby je kupující povinen uhrazovat kupní cenu zboží společně s uvedením variabilního symbolu platby. V případě bezhotovostní platby je závazek kupujícího uhradit kupní cenu splněn okamžikem připsání příslušné částky na účet prodávajícího.</p>
<p class="uroven2">4.6.      Prodávající je oprávněn, zejména v případě, že ze strany kupujícího nedojde k dodatečnému potvrzení objednávky (čl. 3.6), požadovat uhrazení celé kupní ceny ještě před odesláním zboží kupujícímu. Ustanovení § 2119 odst. 1 občanského zákoníku se nepoužije.</p>
<p class="uroven2">4.7.      Případné slevy z ceny zboží poskytnuté prodávajícím kupujícímu nelze vzájemně kombinovat.</p>
<p class="uroven2">4.8.      Je-li to v obchodním styku obvyklé nebo je-li tak stanoveno obecně závaznými právními předpisy, vystaví prodávající ohledně plateb prováděných na základě kupní smlouvy kupujícímu daňový doklad – fakturu. Prodávající je plátcem daně z přidané hodnoty. Daňový doklad – fakturu vystaví prodávající kupujícímu po uhrazení ceny zboží a zašle jej v elektronické podobě na elektronickou adresu kupujícího.</p></div>
    <div class="toggle5"><h2 id="led5" class="uroven2"><span id="odstoupeni-od-smlouvy"></span>5. ODSTOUPENÍ OD KUPNÍ SMLOUVY</h2>
<p class="uroven2">5.1.      Kupující bere na vědomí, že dle ustanovení § 1837 občanského zákoníku, nelze mimo jiné odstoupit od kupní smlouvy o dodávce zboží, které bylo upraveno podle přání kupujícího nebo pro jeho osobu, od kupní smlouvy o dodávce zboží, které podléhá rychlé zkáze, jakož i zboží, které bylo po dodání nenávratně smíseno s jiným zbožím, od kupní smlouvy o dodávce zboží v uzavřeném obalu, které spotřebitel z obalu vyňal a z hygienických důvodů jej není možné vrátit a od kupní smlouvy o dodávce zvukové nebo obrazové nahrávky nebo počítačového programu, pokud porušil jejich původní obal.</p>
<p class="uroven2">5.2.      Nejedná-li se o případ uvedený v čl. 5.1 či o jiný případ, kdy nelze od kupní smlouvy odstoupit, má kupující v souladu s ustanovením § 1829 odst. 1 občanského zákoníku právo od kupní smlouvy odstoupit, a to do čtrnácti (14) dnů od převzetí zboží, přičemž v případě, že předmětem kupní smlouvy je několik druhů zboží nebo dodání několika částí, běží tato lhůta ode dne převzetí poslední dodávky zboží. Odstoupení od kupní smlouvy musí být prodávajícímu odesláno ve lhůtě uvedené v předchozí větě. Pro odstoupení od kupní smlouvy může kupující využit vzorový formulář poskytovaný prodávajícím, jenž tvoří přílohu obchodních podmínek. Odstoupení od kupní smlouvy může kupující zasílat mimo jiné na adresu provozovny prodávajícího či na adresu elektronické pošty prodávajícího      .</p>
<p class="uroven2">5.3.      V případě odstoupení od kupní smlouvy dle čl. 5.2 obchodních podmínek se kupní smlouva od počátku ruší. Zboží musí být prodávajícímu vráceno do čtrnácti (14) dnů od odstoupení od smlouvy prodávajícímu. Odstoupí-li kupující od kupní smlouvy, nese kupující náklady spojené s navrácením zboží prodávajícímu, a to i v tom případě, kdy zboží nemůže být vráceno pro svou povahu obvyklou poštovní cestou.</p>
<p class="uroven2">5.4.      V případě odstoupení od smlouvy dle čl. 5.2 obchodních podmínek vrátí prodávající peněžní prostředky přijaté od kupujícího do čtrnácti (14) dnů od odstoupení od kupní smlouvy kupujícím, a to stejným způsobem, jakým je prodávající od kupujícího přijal. Prodávající je taktéž oprávněn vrátit plnění poskytnuté kupujícím již při vrácení zboží kupujícím či jiným způsobem, pokud s tím kupující bude souhlasit a nevzniknou tím kupujícímu další náklady. Odstoupí-li kupující od kupní smlouvy, prodávající není povinen vrátit přijaté peněžní prostředky kupujícímu dříve, než mu kupující zboží vrátí nebo prokáže, že zboží podnikateli odeslal.</p>
<p class="uroven2">5.5.      Nárok na úhradu škody vzniklé na zboží je prodávající oprávněn jednostranně započíst proti nároku kupujícího na vrácení kupní ceny.</p>
<p class="uroven2">5.6.      Do doby převzetí zboží kupujícím je prodávající oprávněn kdykoliv od kupní smlouvy odstoupit. V takovém případě vrátí prodávající kupujícímu kupní cenu bez zbytečného odkladu, a to bezhotovostně na účet určený kupujícím.</p>
<p class="uroven2">5.7.      Je-li společně se zbožím poskytnut kupujícímu dárek, je darovací smlouva mezi prodávajícím a kupujícím uzavřena s rozvazovací podmínkou, že dojde-li k odstoupení od kupní smlouvy kupujícím, pozbývá darovací smlouva ohledně takového dárku účinnosti a kupující je povinen spolu se zbožím prodávajícímu vrátit i poskytnutý dárek.</p></div>
<div class="toggle6"><h2 id="led6" class="uroven2"><span id="doprava-zdarma">6. </span>PŘEPRAVA A DODÁNÍ ZBOŽÍ</h2>
<p class="uroven2">6.1.      V případě, že je způsob dopravy smluven na základě zvláštního požadavku kupujícího, nese kupující riziko a případné dodatečné náklady spojené s tímto způsobem dopravy.</p>
<p class="uroven2">6.2.      Je-li prodávající podle kupní smlouvy povinen dodat zboží na místo určené kupujícím v objednávce, je kupující povinen převzít zboží při dodání. Poštovné činí 120 Kč.</p>
<p class="uroven2">6.3.      V případě, že je z důvodů na straně kupujícího nutno zboží doručovat opakovaně nebo jiným způsobem, než bylo uvedeno v objednávce, je kupující povinen uhradit náklady spojené s opakovaným doručováním zboží, resp. náklady spojené s jiným způsobem doručení.</p>
<p class="uroven2">6.4.      Při převzetí zboží od přepravce je kupující povinen zkontrolovat neporušenost obalů zboží a v případě jakýchkoliv závad toto neprodleně oznámit přepravci. V případě shledání porušení obalu svědčícího o neoprávněném vniknutí do zásilky nemusí kupující zásilku od přepravce převzít.</p>
<p class="uroven2">6.5.      Při objednávce zboží nad 3000Kč je cena za dopravu 0Kč.</p>
<p class="uroven2">6.6.      Další práva a povinnosti stran při přepravě zboží mohou upravit zvláštní dodací podmínky prodávajícího, jsou-li prodávajícím vydány.</p></div>
<div class="toggle7"><h2 id="led7" class="uroven2"><span id="vadne-plneni">7. </span>PRÁVA Z VADNÉHO PLNĚNÍ</h2>
<p class="uroven2">7.1.      Práva a povinnosti smluvních stran ohledně práv z vadného plnění se řídí příslušnými obecně závaznými předpisy (zejména ustanoveními § 1914 až 1925, § 2099 až 2117 a § 2161 až 2174 občanského zákoníku).</p>
<p class="uroven2">7.2.      Prodávající odpovídá kupujícímu, že zboží při převzetí nemá vady. Zejména prodávající odpovídá kupujícímu, že v době, kdy kupující zboží převzal:</p>
<p class="uroven2">7.2.1.   má zboží vlastnosti, které si strany ujednaly, a chybí-li ujednání, má takové vlastnosti, které prodávající nebo výrobce popsal nebo které kupující očekával s ohledem na povahu zboží a na základě reklamy jimi prováděné,</p>
<p class="uroven2">7.2.2.   se zboží hodí k účelu, který pro jeho použití prodávající uvádí nebo ke kterému se zboží tohoto druhu obvykle používá,</p>
<p class="uroven2">7.2.3.   zboží odpovídá jakostí nebo provedením smluvenému vzorku nebo předloze, byla-li jakost nebo provedení určeno podle smluveného vzorku nebo předlohy,</p>
<p class="uroven2">7.2.4.   je zboží v odpovídajícím množství, míře nebo hmotnosti a</p>
<p class="uroven2">7.2.5.   zboží vyhovuje požadavkům právních předpisů.</p>
<p class="uroven2">7.3.      Ustanovení uvedená v čl. 7.2 obchodních podmínek se nepoužijí u zboží prodávaného za nižší cenu na vadu, pro kterou byla nižší cena ujednána, na opotřebení zboží způsobené jeho obvyklým užíváním, u použitého zboží na vadu odpovídající míře používání nebo opotřebení, kterou zboží mělo při převzetí kupujícím, nebo vyplývá-li to z povahy zboží.</p>
<p class="uroven2">7.4.      Projeví-li se vada v průběhu šesti měsíců od převzetí, má se za to, že zboží bylo vadné již při převzetí.</p>
<p class="uroven2">7.5.      Práva z vadného plnění uplatňuje kupující u prodávajícího na adrese jeho provozovny, v níž je přijetí reklamace možné s ohledem na sortiment prodávaného zboží, případně i v sídle nebo místě podnikání. Za okamžik uplatnění reklamace se považuje okamžik, kdy prodávající obdržel od kupujícího reklamované zboží.</p>
<p class="uroven2">7.6.      Další práva a povinnosti stran související s odpovědností prodávajícího za vady může upravit reklamační řád prodávajícího.</p></div>
<div class="toggle8"><h2 id="led8" class="uroven2"><span id="dalsi-prava-povinnosti">8. </span>DALŠÍ PRÁVA A POVINNOSTI SMLUVNÍCH STRAN</h2>
<p class="uroven2">8.1.      Kupující nabývá vlastnictví ke zboží zaplacením celé kupní ceny zboží.</p>
<p class="uroven2">8.2.      Prodávající není ve vztahu ke kupujícímu vázán žádnými kodexy chování ve smyslu ustanovení § 1826 odst. 1 písm. e) občanského zákoníku.</p>
<p class="uroven2">8.3.      Mimosoudní vyřizování stížností spotřebitelů zajišťuje prodávající prostřednictvím elektronické adresy Roel.ramp@seznam.cz. Informaci o vyřízení stížnosti kupujícího zašle prodávající na elektronickou adresu kupujícího.</p>
<p class="uroven2">8.4.      Prodávající je oprávněn k prodeji zboží na základě živnostenského oprávnění. Živnostenskou kontrolu provádí v rámci své působnosti příslušný živnostenský úřad. Dozor nad oblastí ochrany osobních údajů vykonává Úřad pro ochranu osobních údajů. Česká obchodní inspekce vykonává ve vymezeném rozsahu mimo jiné dozor nad dodržováním zákona č. 634/1992 Sb., o ochraně spotřebitele, ve znění pozdějších předpisů.</p>
<p class="uroven2">8.5.      Kupující tímto přebírá na sebe nebezpečí změny okolností ve smyslu § 1765 odst. 2 občanského zákoníku.</p></div>
<div class="toggle9"><h2 id="led9" class="uroven2"><span id="osobni-udaje">9. </span>OCHRANA OSOBNÍCH ÚDAJŮ</h2>
<p class="uroven2">9.1.      Ochrana osobních údajů kupujícího, který je fyzickou osobou, je poskytována zákonem č. 101/2000 Sb., o ochraně osobních údajů, ve znění pozdějších předpisů.</p>
<p class="uroven2">9.2.      Kupující souhlasí se zpracováním těchto svých osobních údajů: jméno a příjmení, adresa bydliště, identifikační číslo, daňové identifikační číslo, adresa elektronické pošty a telefonní číslo (dále společně vše jen jako „osobní údaje“).</p>
<p class="uroven2">9.3.      Kupující souhlasí se zpracováním osobních údajů prodávajícím, a to pro účely realizace práv a povinností z kupní smlouvy a pro účely vedení uživatelského účtu. Nezvolí-li kupující jinou možnost, souhlasí se zpracováním osobních údajů prodávajícím také pro účely zasílání informací a obchodních sdělení kupujícímu. Souhlas se zpracováním osobních údajů v celém rozsahu dle tohoto článku není podmínkou, která by sama o sobě znemožňovala uzavření kupní smlouvy.</p>
<p class="uroven2">9.4.      Kupující bere na vědomí, že je povinen své osobní údaje (při registraci, ve svém uživatelském účtu, při objednávce provedené z webového rozhraní obchodu) uvádět správně a pravdivě a že je povinen bez zbytečného odkladu informovat prodávajícího o změně ve svých osobních údajích.</p>
<p class="uroven2">9.5.      Zpracováním osobních údajů kupujícího může prodávající pověřit třetí osobu, jakožto zpracovatele. Kromě osob dopravujících zboží nebudou osobní údaje prodávajícím bez předchozího souhlasu kupujícího předávány třetím osobám.</p>
<p class="uroven2">9.6.      Osobní údaje budou zpracovávány po dobu neurčitou. Osobní údaje budou zpracovávány v elektronické podobě automatizovaným způsobem nebo v tištěné podobě neautomatizovaným způsobem.</p>
<p class="uroven2">9.7.      Kupující potvrzuje, že poskytnuté osobní údaje jsou přesné a že byl poučen o tom, že se jedná o dobrovolné poskytnutí osobních údajů.</p>
<p class="uroven2">9.8.      V případě, že by se kupující domníval, že prodávající nebo zpracovatel (čl. 9.5) provádí zpracování jeho osobních údajů, které je v rozporu s ochranou soukromého a osobního života kupujícího nebo v rozporu se zákonem, zejména jsou-li osobní údaje nepřesné s ohledem na účel jejich zpracování, může:</p>
<p class="uroven2">9.8.1.   požádat prodávajícího nebo zpracovatele o vysvětlení,</p>
<p class="uroven2">9.8.2.   požadovat, aby prodávající nebo zpracovatel odstranil takto vzniklý stav.</p>
<p class="uroven2">9.9.      Požádá-li kupující o informaci o zpracování svých osobních údajů, je mu prodávající povinen tuto informaci předat. Prodávající má právo za poskytnutí informace podle předchozí věty požadovat přiměřenou úhradu nepřevyšující náklady nezbytné na poskytnutí informace.</p></div>
<div class="toggle10"><h2 id="led10" class="uroven2"><span id="obchodni-sdeleni">10. </span>ZASÍLÁNÍ OBCHODNÍCH SDĚLENÍ A UKLÁDÁNÍ COOKIES</h2>
<p class="uroven2">10.1.  Kupující souhlasí se zasíláním informací souvisejících se zbožím, službami nebo podnikem prodávajícího na elektronickou adresu kupujícího a dále souhlasí se zasíláním obchodních sdělení prodávajícím na elektronickou adresu kupujícího.</p>
<p class="uroven2">10.2.  Kupující souhlasí s ukládáním tzv. cookies na jeho počítač. V případě, že je nákup na webové stránce možné provést a závazky prodávajícího z kupní smlouvy plnit, aniž by docházelo k ukládání tzv. cookies na počítač kupujícího, může kupující souhlas podle předchozí věty kdykoliv odvolat.</p></div>
<div class="toggle11"><h2 id="led11" class="uroven2"><span id="dorucovani">11. </span>DORUČOVÁNÍ</h2>
<p class="uroven2">11.1.  Kupujícímu může být doručováno na adresu elektronické pošty uvedenou v jeho uživatelském účtu či uvedenou kupujícím v objednávce.</p></div>
<div class="toggle12"><h2 id="ustanoveni" class="uroven2"><span id="ustanoveni">12. </span>ZÁVĚREČNÁ USTANOVENÍ</h2>
<p class="uroven2">12.1.  Pokud vztah založený kupní smlouvou obsahuje mezinárodní (zahraniční) prvek, pak strany sjednávají, že vztah se řídí českým právem. Tímto nejsou dotčena práva spotřebitele vyplývající z obecně závazných právních předpisů.</p>
<p class="uroven2">12.2.  Je-li některé ustanovení obchodních podmínek neplatné nebo neúčinné, nebo se takovým stane, namísto neplatných ustanovení nastoupí ustanovení, jehož smysl se neplatnému ustanovení co nejvíce přibližuje. Neplatností nebo neúčinností jednoho ustanovení není dotknutá platnost ostatních ustanovení. Změny a doplňky kupní smlouvy či obchodních podmínek vyžadují písemnou formu.</p>
<p class="uroven2">12.3.  Kupní smlouva včetně obchodních podmínek je archivována prodávajícím v elektronické podobě a není přístupná.</p>
<p class="uroven2">12.4.  Přílohu obchodních podmínek tvoří vzorový formulář pro odstoupení od kupní smlouvy.</p>
<p class="uroven2">12.5.  Kontaktní údaje prodávajícího: Hrnčířská 765, Česká Lípa 470 01, roel.ramp@seznam.cz, +420 602 658 319.</p>
<p class="uroven2" style="margin-left:3.8%">V České Lípě      dne 01.04.2015</p></div>
</div>
<div>
</div>
    
</div>

<span id="vyzkouset" style="position:relative;top:100px;"></span>

<div class="wrapper velka" style="margin-top:100px;margin-bottom:80px;">
     <form name="form1" method="post" action="signup.php" class="sky-form pbile" style="padding-bottom:20px;padding-top: 20px;">
				<h2 class="marginl velka shadow">1x týdně 10 nejlepších zemědělských nabídek zdarma</h2>
				
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

<span style="vertical-align:super;font-size:50%;">#</span>2<span class='supsub'><sup class='superscript'>nejrychlejší zemědělská</sup><sub class='subscript'>obchodní společnost ....</sub></span>

</div>
</div>
<div class="featuresColumn7 centertext shadow textpole"><div style="text-align:left;margin-left:40%;width:200px;"><img src="../cz/img/logo-klasa.png" class="efekt1" style="max-height:80px; margin-top:-10px;" /></div></div>
<div class="featuresColumn7 centertext shadow textpole last">

<div style="text-align:left;margin-left:0%;width:200px;"><span style="vertical-align:super;font-size:50%;">#</span>1<span class='supsub'><sup class='superscript'>zde přijde text ...</sup><sub class='subscript'>co vystihne ifarm</sub></span></div>
</div>
</div>


<div class="wrapper textpole" style="margin-top:0px;margin-bottom:0px;">
<p><h2 class="marginl velka shadow"></h2></p></div>
<div class="wrapper textpole" style="background:white; margin-top:0px;margin-bottom:0px;min-height:420px;">
<div class="featuresColumn7 centertext shadow textpole">
<div style="text-align:left;margin-left:30%;width:200px;"><h2 class="velka">ifarm účet</h2>
Můj účet<br>Nastavení<br>Technická podpora </div>
</div>
<div class="featuresColumn7 centertext shadow textpole"><div style="text-align:left;margin-left:30%;width:200px;"><h2 class="velka">informace</h2>FAQ<br>Projekt ifarm<br>Obchodní podmínky  </div></div>
<div class="featuresColumn7 centertext shadow textpole last">

<div style="text-align:left;margin-left:30%;width:200px;"><h2 class="velka">kontakt</h2>602 658 319<br><span  id="kontakt"></span>Roel Adriaan Ramp<br>Hrnčířská 765, Česká Lípa<br></div><img class="efekt1" src="img/cr.png" style="margin-left:-220%;margin-top:10%;" />

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