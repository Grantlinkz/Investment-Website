<?php
    require_once '../includes/dbh.inc.php';
    
     if(isset($_GET['ref'])) {
        $username = $_GET['ref'];
    }
    else {
        $username = "";
    }
    
?>
<!doctype html> 
<html class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../favicon.png" rel="icon" type="image/x-icon" />
<!-- Add icon library -->
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
 <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link href="../css/main.css" rel="stylesheet"/>
<link href="../css/animate.min.css" rel="stylesheet" />

<title>Verification Code | Swiftcotradefx</title>
<link rel="manifest" href="../js/manifest.json">
<meta name="theme-color" content=" #FF9899">
<meta name="msapplication-navbutton-color" content=" #FF9899">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content=" #FF9899">


<meta name="theme-color" content=" #FF9899">
<meta name="msapplication-navbutton-color" content=" #FF9899">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content=" #FF9899">

<link href="../favicon.png" rel="icon" type="image/x-icon" />
<link rel="icon" sizes="192x192" href="../images/icon/icon-192.html">

<meta name="keywords" content="Swiftcotradefx />
<meta property="og:image" content="images/icon/icon-310x310.png" />

<meta name="msapplication-square310x310logo" content="../images/icon/icon-310x310.png">
<meta name="msapplication-square70x70logo" content="../images/icon/icon-70x70.png">
<meta name="msapplication-square150x150logo" content="../images/icon/icon-150x150.png">
<meta name="msapplication-wide310x150logo" content="../images/icon/icon-310x150.png">

<link rel="apple-touch-icon-precomposed" href="../images/icon/apple-touch-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/icon/apple-touch-icon-57x57.html" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/icon/apple-touch-icon-72x72.html" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/icon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/icon/apple-touch-icon-144x144.png" />


<meta property="og:site_name" content="Swiftcotradefx | Your Trusted Bitcoin  Mining Company">
<meta property="og:title" content="Your Trusted Bitcoin  Mining Company" />
<meta name="description" content="Swiftcotradefx is totally different from its competitors trying to achieve something special starting with the... ">
<meta property="og:description" content="Swiftcotradefx is totally different from its competitors trying to achieve something special starting with the... ">
<meta property="og:type" content="website" />

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../js/jquery.form.js"></script>

<link href="../css/select2.min.css" rel="stylesheet" />
<script>
$(document).ready(function() {
    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }
 
    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
});
</script>
<script>
var fade_outthis = function() {
	$(".alert").fadeOut().empty();
}
setTimeout(fade_outthis, 8000);

$(document).ready(function(){
    $(".closebtn").click(function(){
        $(this).parent().fadeOut().empty();
    });
});
</script>
</head>
<body class="loading_it">
<!-- <div style="width: 100%; height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; text-align: right; line-height:14px; block-size:62px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;"><div style="height:40px;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div></div>         -->
    <!-- MARQUEE SCROLL SECTION  END --> 

<header class="header">
<div class="container row">
<ul class="topheader">
	<li class="logo">
		<div class="bodycontainer">
			<button class="btn round default right menu"><i class="fa fa-align-right"></i></button>
			<a href="index.html">
				<img src="../BB/assets/images/logoIcon/logo.png" title="Swiftcotradefx | Your Trusted Bitcoin  Mining and  investment Company"/>
			</a>
		</div>
	</li>
	<li class="data">
		<div class="bodycontainer">
			<!-- <ul>
				<li><div>3,649,450 USD</div>Payouts</li>
				<li><div>+5.26%</div>24 hour price</li>
				<li><div>12.820 BTC</div>24 hour volume</li>
				<li><div>69,775</div>active traders</li>
				<li><div class="btcwdgt-price" bw-cur="usd"></div>Live Bitcoin price</li>
			</ul> -->
		</div>
	</li>
	<li class="account row">
		<div class="bodycontainer">
			<div class="button_container"><a href="BB-login.php" class="btn"><i class="fa fa-user"></i> SIGN IN</a></div>
				<div class="button_container"><a href="BB-register.php" class="btn v2"><i class="fa fa-user-plus"></i> REGISTER</a></div>		</div>
	</li>
</ul>
</div>
</header>
<nav class="center">
	<div class="bodycontainer">
		<ul>
			<li><a href="../BB/index.php" class="active">HOME</a></li>
			<li><a href="../BB/about.php">ABOUT</a></li>
			<li><a href="../BB/plan.php">PRICING PLANS</a></li>
			<!--<li><a href="#">LEGAL <i class="fa fa-chevron-down"></i></a>-->
				<ul>
					<!-- <li><a href="info/terms.html">TERMS & CONDITIONS</a></li> -->
					<!-- <li><a href="faqs.html">FAQS</a></li> -->
				</ul>
			</li>
      <li><a href="../BB/contact.php">CONTACT US</a></li>
			 <!--<li><a href="affiliate_program.html">AFFILIATE</a></li> -->
  <li>
                              <!-- GTranslate: https://gtranslate.io/ -->

                        <style type="text/css">
                        <!--
                        a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
                        a.gflag img {border:0;}
                        a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
                        #goog-gt-tt {display:none !important;}
                        .goog-te-banner-frame {display:none !important;}
                        .goog-te-menu-value:hover {text-decoration:none !important;}
                        body {top:0 !important;}
                        #google_translate_element2 {display:none!important;}
                        -->
                        </style>

                        <select onchange="doGTranslate(this);" style="height: 30px; border-radius: 5px; padding: 5px; background: #fff "><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div>
                        <script type="text/javascript">
                        function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
                        </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


                        <script type="text/javascript">
                        /* <![CDATA[ */
                        eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
                        /* ]]> */
                        </script>
                        </li>
		</ul>
	</div>
</nav>
<script>
	$(".menu").click( function(){
		$("nav").slideToggle();
	});
</script>

<!-- <div class="preloader">
<div id="bitcoin">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200px" height="200px" viewBox="100 100 400 400" xml:space="preserve">
    <filter id="dropshadow" height="130%">
  <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
  <feOffset dx="0" dy="0" result="offsetblur"/>
  <feFlood flood-color="red"/>
<feComposite in2="offsetblur" operator="in"/>
<feMerge>
<feMergeNode/>
<feMergeNode in="SourceGraphic"/>
</feMerge>
</filter>          
<path class="path" style="filter:url(#dropshadow)" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
	c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
	l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
	c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
	c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
	l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
	C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
	C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
	C327.767,212.14,389.234,221.02,379.302,260.846z"/>
          
</svg>
</div>
</div> -->
<script>
/*--window load functions--*/
jQuery(window).load(function(){
	var preLoder = $(".preloader");
	preLoder.fadeOut(1000);
	$("body").removeClass("loading_it");
});
</script>
<div class="banner-area center">
<div class="area">
	<div class="bodycontainer">
		
		<div class="banner-title">
           <span class="decor-equal"></span>
		</div>
                <h1>Your registration was successful! Kindly Check your email for confirmation</h1>
	</div>
	<div id="particles-js"></div>
</div>
</div>
<script src="js/regvalidation.js"></script>
<link rel="stylesheet" href="css/intlTelInput.css">

<script src="js/intlTelInput.js"></script> 
<style>
.intl-tel-input .country-list {
    background-color: #000000 !important;
    border: 1px solid #2d2d2d !important;
}
.intl-tel-input .country-list .divider { border-bottom: 1px solid #2D2D2D !important; }
.intl-tel-input .selected-flag .iti-arrow { border-top: 4px solid #F1F1F1 !important; }
</style>
<script>
var countryData = $.fn.intlTelInput.getCountryData(),
  telInput = $("#mobile-number"),
  addressDropdown = $("#address-country");

telInput.intlTelInput({
  initialCountry: "auto",
  customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
	  return "e.g. " + selectedCountryPlaceholder;
	},
  preferredCountries: [ "us", "gb" ],
  geoIpLookup: function(callback) {
    $.get("https://ipinfo.io/", function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
  utilsScript: "js/utils.js" // just for formatting/placeholders etc
});

// populate the country dropdown
$.each(countryData, function(i, country) {
  addressDropdown.append($("<option></option>").attr("value", country.name).text(country.name));
});
// set it\'s initial value
var initialCountry = telInput.intlTelInput("getSelectedCountryData").name;
addressDropdown.val(initialCountry);

// listen to the telephone input for changes
telInput.on("countrychange", function(e, countryData) {
  addressDropdown.val(countryData.name);
});

// listen to the address dropdown for changes
addressDropdown.change(function() {
	telInput.intlTelInput("setCountry", $(this).val());
});
$("#register").submit(function(e) {
	telInput.val(telInput.intlTelInput("getNumber"));
});

</script>
<a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up show-back-to-top"></a>
<script>
/*--window Scroll functions--*/
$(window).on('scroll', function () {
	/*--show and hide scroll to top --*/
	var ScrollTop = $('#back-to-top');
	if ($(window).scrollTop() > 500) {
		ScrollTop.fadeIn(1000);
	} else {
		ScrollTop.fadeOut(1000);
	}
});
</script>
<div class="footer_bg center">
	<div class="area">
		<div class="bodycontainer">
			<div style="z-index:2; position: relative">
				<h2 class="margintb">GET STARTED TODAY WITH BITCOIN  investment</h2>
				<p class="margintb">Open account for free and start trading Bitcoins!</p>
                                <a href="BB-login.php" class="btn">Log in</a>
			</div>
		</div>
	</div>
</div>
<footer>
    <div class="bodycontainer">
        <div class="row">
            <div class="col-2 col-m-4 col-sm-12">
            <div class="padding">
                <h3>QUICK LINKS</h3>
                <ul>
                    <!-- <li><a href="index.html">Home</a></li> -->
                    <li><a href="..BB/about.php">About Us</a></li>
                    <li><a href="..BB/about.php">FAQS</a></li>
                    <li><a href="..BB/popper.php">TERMS AND CONDITIONS</a></li>
                    <li><a href="..BB/contact.php">CONTACT US</a></li>
                </ul>
            </div>
            </div>
            <div class="col-2 col-m-4 col-sm-12">
            <div class="padding">
                <h3>HELP & SUPPORT</h3>
                <ul>
                    <li><a href="https://cointelegraph.com/bitcoin-for-beginners/what-are-cryptocurrencies" target="_blank">WHAT IS BITCOIN?</a></li>
                    <li><a href="https://www.investopedia.com/tech/how-to-buy-bitcoin/" target="_blank">HOW TO BUY BITCOIN</a></li>
                    <li><a href="BB-register.php">REGISTER</a></li>
                    <li><a href="BB-login.php">LOGIN</a></li>
					<li><a href="fpass.php">FORGOT PASSWORD</a></li>
                </ul>
            </div>
            </div>
            <div class="col-3 col-m-4 col-sm-12">
            <div class="padding">
                <h3>CONTACT US</h3>
                <ul>
                    <li> 16 Swiftcotradefx STREET, AUCKLAND CBD,NEW ZEALAND</li>
                </ul>
				<a href="mailto://support@Swiftcotradefx.com"><h3 style="font-size: 15px !important">support@Swiftcotradefx.com</h3></a>
				<!-- <a href="tel:+44 7883244382 ">+44 7883244382 </a> -->
				<ul>
					<!-- <li>MON-SAT 08AM ⇾ 05PM</li> -->
					<ul class="social">
						<li><a href="#" class="circle"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="circle"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</ul>
            </div>
            </div>
            <!-- <div class="col-5 col-m-12 col-sm-12">
				<div class="col-6 col-m-6 col-sm-6" style="padding-bottom:0">
					<div class="value">$198.76B</div>
					MARKET CAP
					<div class="value">69K+</div> -->
					<!-- ACTIVE ACCOUNTS
				</div> -->
				<!-- <div class="col-6 col-m-6 col-sm-6" style="padding-bottom:0">
					<div class="value">243K</div>
					WEEKLY TRANSACTIONS
					<div class="value">127</div>
					SUPPORTED COUNTRIES
				</div> -->
				<!-- <div class="col-12" style="padding-top:0">
					<hr>
					SUPPORTED PAYMENT METHODS<br>
					<img src="images/5b55bb652af1a.png" style="width:40px">
					<img src="images/1532345051h7.png" style="width:40px">
					<img src="images/1532345115h7.png" style="width:40px">
				</div>
            </div> -->
        </div>
	<hr>
	<p class="center">COPYRIGHT © 2022  Swiftcotradefx , All Rights Reserved</p>
    </div>
</footer>
<script src="../js/particle.js"></script>
<script>
particlesJS("particles-js", {
	"particles":{ "number":{"value":100,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}
},"retina_detect":true});
</script>
<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','widgets.bitcoin.com/widget.js','btcwdgt');
</script>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'a2fb567efb88f7992357fe7352ba297bc2163e54';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
</body>

</html>