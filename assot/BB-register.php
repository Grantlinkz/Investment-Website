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

<title>Register | Swiftcotradefx</title>
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
			<a href="../BB/index.php">
				<img src="../BB/assets/images/logoIcon/logo.png" title="Swiftcotradefx | Your Trusted Bitcoin  Mining Company"/>
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
<!-- <nav class="center">
	<div class="bodycontainer">
		<ul>
			<li><a href="../BB/index.php" class="active">HOME</a></li>
			<li><a href="../info/about.html">ABOUT US</a></li>
			<li><a href="../BB/index.php# investment"> investment PLANS</a></li>
			<li><a href="#">LEGAL <i class="fa fa-chevron-down"></i></a>
				<ul>
					<li><a href="info/terms.html">TERMS & CONDITIONS</a></li>
					<li><a href="faqs.html">FAQS</a></li>
				</ul>
			</li>
			<li><a href="../contact.html">CONTACT US</a></li>
			<li><a href="../affiliate_program.html">AFFILIATE</a></li>
		</ul>
	</div>
</nav> -->
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

<div class="banner-area center" >
<div class="area">
	<div class="bodycontainer">
		<h1 class="tlt text-white" style="margin: 20px 0;">USER <span class="text-default">REGISTERATION</span></h1>
		<div class="banner-title">
           <span class="decor-equal"></span>
		</div>
		<div  style="margin: 20px 0;">
			<a href="../BB/index.php">HOME</a> / CREATE AN ACCOUNT
		</div>
	</div>
	<div id="particles-js"></div>
</div>
</div>
<script src="../js/regvalidation.js"></script>
<link rel="stylesheet" href="../css/intlTelInput.css">
<div class="smallcontainer padding">
    <form action="../includes/sign-up.inc.php" method="post" class="validate row" id="register">
        <div class="col-12 col-m-12 col-sm-12">
			<div class="title_container">
				  <h4>Create an Account</h4>
				  <span class="decor_default"></span>
			</div>
		</div>
                <div class="col-12 col-m-12 col-sm-12">
			<input type="text" placeholder="First Name" required name="first_name" value="" style="width:100%" class="round">
                        <div style="color: red"><?php if(isset($_GET["error"])) {if($_GET['error'] == "invalid_firstname") { echo "<p style='color: red'>Invalid Name Format </p>";} }?></div>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
			<input type="text" placeholder="Last Name" required name="last_name" value="" style="width:100%;" class="round">
                        <div style="color: red"><?php if(isset($_GET["error"])) {if($_GET['error'] == "invalid_lastname") { echo "<p style='color: red'>Invalid Name Format </p>";} }?> </div>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
			<input type="text" placeholder="Username" required name="username" value="" style="width:100%;" class="round">
                        <div style="color: red"><?php if(isset($_GET["error"])) {if($_GET['error'] == "invalid_username") { echo "<p style='color: red'>Invalid Name Format </p>";} }?> </div>
        </div>
                <div class="col-12 col-m-12 col-sm-12">
			<input type="email" placeholder="Email" required name="email" value="" style="width:100%;" class="round">
 <div style="color: red"><?php if(isset($_GET["error"])) {if($_GET['error'] == "invalidemail") { echo "<p style='color: red'>Please enter a valid email </p>";} }?> </div>
 
 <div style="color: red"><?php if(isset($_GET["error"])) {if($_GET['error'] == "emailtaken") { echo "<p style='color: red'>Email Taken!</p>";} }?> </div>
                        <!--            <div id="emailErr" class="form_hint"> Email must not be empty!</div>
                        
            <div id="emailErra" class="form_hint"> Email format not supportted!</div>
            <div id="emailErrb" class="form_hint"> Email already exist!</div>
            <div id="emailErrc" class="form_hint"><i class="fa fa-spinner fa-spin center"></i></div>-->
        </div>
        <div class="col-12 col-m-12 col-sm-12">
        	<select name="sex" id="gender" style="width:100%;" class="round" required>
                <option id="male">Male</option>
                <option id="female">Female</option>
            </select>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
            <input type="text" id="" required placeholder="Country Code + Phone Number" name="phone_no" value="" class="round" style="width:100%;">
<div style="color: red"><?php if(isset($_GET["error"])) {if($_GET['error'] == "invalidphone_number") { echo "<p style='color: red'>Please enter a valid phone number format </p>";} }?> </div>
		</div>
        <div class="col-12 col-m-12 col-sm-12">
        	<select name="account_type" id="gender" style="width:100%" class="round" required>
               <option value="" disabled="" selected="">-- Package Plan --</option>
                    <option>MINI</option>
                    <option> SILVER</option>
                    <option>GOLD</option>
                    <option>PLATINUM</option>
                    <option>SUPER</option>
                    
                 
            </select>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
        	  <select name="country" size="1" style="width:100%" class="round">
                  <option value="" disabled selected>--Select Country--</option>
                  <option style="font-family: Montserrat, sans-serif;">Afghanistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Albania</option> 
                  <option style="font-family: Montserrat, sans-serif;">Algeria</option> 
                  <option style="font-family: Montserrat, sans-serif;">American Samoa</option> 
                  <option style="font-family: Montserrat, sans-serif;">Andorra</option> 
                  <option style="font-family: Montserrat, sans-serif;">Angola</option> 
                  <option style="font-family: Montserrat, sans-serif;">Anguilla</option> 
                  <option style="font-family: Montserrat, sans-serif;">Antarctica</option> 
                  <option style="font-family: Montserrat, sans-serif;">Antigua and Barbuda</option> 
                  <option style="font-family: Montserrat, sans-serif;">Argentina</option> 
                  <option style="font-family: Montserrat, sans-serif;">Armenia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Aruba</option> 
                  <option style="font-family: Montserrat, sans-serif;">Australia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Austria</option> 
                  <option style="font-family: Montserrat, sans-serif;">Azerbaijan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bahamas</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bahrain</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bangladesh</option> 
                  <option style="font-family: Montserrat, sans-serif;">Barbados</option> 
                  <option style="font-family: Montserrat, sans-serif;">Belarus</option> 
                  <option style="font-family: Montserrat, sans-serif;">Belgium</option> 
                  <option style="font-family: Montserrat, sans-serif;">Belize</option> 
                  <option style="font-family: Montserrat, sans-serif;">Benin</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bermuda</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bhutan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bolivia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bosnia and Herzegowina</option> 
                  <option style="font-family: Montserrat, sans-serif;">Botswana</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bouvet Island</option> 
                  <option style="font-family: Montserrat, sans-serif;">Brazil</option> 
                  <option style="font-family: Montserrat, sans-serif;">British Indian Ocean Territory</option> 
                  <option style="font-family: Montserrat, sans-serif;">Brunei Darussalam</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bulgaria</option> 
                  <option style="font-family: Montserrat, sans-serif;">Burkina Faso</option> 
                  <option style="font-family: Montserrat, sans-serif;">Burundi</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cambodia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cameroon</option> 
                  <option style="font-family: Montserrat, sans-serif;">Canada</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cape Verde</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cayman Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Central African Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">Chad</option> 
                  <option style="font-family: Montserrat, sans-serif;">Chile</option> 
                  <option style="font-family: Montserrat, sans-serif;">China</option> 
                  <option style="font-family: Montserrat, sans-serif;">Christmas Island</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cocos (Keeling) Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Colombia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Comoros</option> 
                  <option style="font-family: Montserrat, sans-serif;">Congo</option> 
                  <option style="font-family: Montserrat, sans-serif;">Congo, the Democratic Republic of the</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cook Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Costa Rica</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cote d'Ivoire</option> 
                  <option style="font-family: Montserrat, sans-serif;">Croatia (Hrvatska)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cuba</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cyprus</option> 
                  <option style="font-family: Montserrat, sans-serif;">Czech Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">Denmark</option> 
                  <option style="font-family: Montserrat, sans-serif;">Djibouti</option> 
                  <option style="font-family: Montserrat, sans-serif;">Dominica</option> 
                  <option style="font-family: Montserrat, sans-serif;">Dominican Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">East Timor</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ecuador</option> 
                  <option style="font-family: Montserrat, sans-serif;">Egypt</option> 
                  <option style="font-family: Montserrat, sans-serif;">El Salvador</option> 
                  <option style="font-family: Montserrat, sans-serif;">Equatorial Guinea</option> 
                  <option style="font-family: Montserrat, sans-serif;">Eritrea</option> 
                  <option style="font-family: Montserrat, sans-serif;">Estonia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ethiopia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Falkland Islands (Malvinas)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Faroe Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Fiji</option> 
                  <option style="font-family: Montserrat, sans-serif;">Finland</option> 
                  <option style="font-family: Montserrat, sans-serif;">France</option> 
                  <option style="font-family: Montserrat, sans-serif;">France, Metropolitan</option> 
                  <option style="font-family: Montserrat, sans-serif;">French Guiana</option> 
                  <option style="font-family: Montserrat, sans-serif;">French Polynesia</option> 
                  <option style="font-family: Montserrat, sans-serif;">French Southern Territories</option> 
                  <option style="font-family: Montserrat, sans-serif;">Gabon</option> 
                  <option style="font-family: Montserrat, sans-serif;">Gambia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Georgia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Germany</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ghana</option> 
                  <option style="font-family: Montserrat, sans-serif;">Gibraltar</option> 
                  <option style="font-family: Montserrat, sans-serif;">Greece</option> 
                  <option style="font-family: Montserrat, sans-serif;">Greenland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Grenada</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guadeloupe</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guam</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guatemala</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guinea</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guinea-Bissau</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guyana</option> 
                  <option style="font-family: Montserrat, sans-serif;">Haiti</option> 
                  <option style="font-family: Montserrat, sans-serif;">Heard and Mc Donald Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Holy See (Vatican City State)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Honduras</option> 
                  <option style="font-family: Montserrat, sans-serif;">Hong Kong</option> 
                  <option style="font-family: Montserrat, sans-serif;">Hungary</option> 
                  <option style="font-family: Montserrat, sans-serif;">Iceland</option> 
                  <option style="font-family: Montserrat, sans-serif;">India</option> 
                  <option style="font-family: Montserrat, sans-serif;">Indonesia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Iran (Islamic Republic of)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Iraq</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ireland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Israel</option> 
                  <option style="font-family: Montserrat, sans-serif;">Italy</option> 
                  <option style="font-family: Montserrat, sans-serif;">Jamaica</option> 
                  <option style="font-family: Montserrat, sans-serif;">Japan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Jordan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kazakhstan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kenya</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kiribati</option> 
                  <option style="font-family: Montserrat, sans-serif;">Korea, Democratic People's Republic of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Korea, Republic of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kuwait</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kyrgyzstan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Lao People's Democratic Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">Latvia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Lebanon</option> 
                  <option style="font-family: Montserrat, sans-serif;">Lesotho</option> 
                  <option style="font-family: Montserrat, sans-serif;">Liberia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Libyan Arab Jamahiriya</option> 
                  <option style="font-family: Montserrat, sans-serif;">Liechtenstein</option> 
                  <option style="font-family: Montserrat, sans-serif;">Lithuania</option> 
                  <option style="font-family: Montserrat, sans-serif;">Luxembourg</option> 
                  <option style="font-family: Montserrat, sans-serif;">Macau</option> 
                  <option style="font-family: Montserrat, sans-serif;">Macedonia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Madagascar</option> 
                  <option style="font-family: Montserrat, sans-serif;">Malawi</option> 
                  <option style="font-family: Montserrat, sans-serif;">Malaysia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Maldives</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mali</option> 
                  <option style="font-family: Montserrat, sans-serif;">Malta</option> 
                  <option style="font-family: Montserrat, sans-serif;">Marshall Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Martinique</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mauritania</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mauritius</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mayotte</option> 
                  <option style="font-family: Montserrat, sans-serif;">Micronesia, Federated States of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Moldova, Republic of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mexico</option><option style="font-family: Montserrat, sans-serif;">Monaco</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mongolia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Montserrat</option> 
                  <option style="font-family: Montserrat, sans-serif;">Morocco</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mozambique</option> 
                  <option style="font-family: Montserrat, sans-serif;">Myanmar</option> 
                  <option style="font-family: Montserrat, sans-serif;">Namibia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Nauru</option> 
                  <option style="font-family: Montserrat, sans-serif;">Nepal</option> 
                  <option style="font-family: Montserrat, sans-serif;">Netherlands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Netherlands Antilles</option> 
                  <option style="font-family: Montserrat, sans-serif;">New Caledonia</option> 
                  <option style="font-family: Montserrat, sans-serif;">New Zealand</option> 
                  <option style="font-family: Montserrat, sans-serif;">Nicaragua</option> 
                  <option style="font-family: Montserrat, sans-serif;">Niger</option> 
                  <option style="font-family: Montserrat, sans-serif;">Nigeria</option> 
                  <option style="font-family: Montserrat, sans-serif;">Niue</option> 
                  <option style="font-family: Montserrat, sans-serif;">Norfolk Island</option> 
                  <option style="font-family: Montserrat, sans-serif;">Northern Mariana Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Norway</option> 
                  <option style="font-family: Montserrat, sans-serif;">Oman</option> 
                  <option style="font-family: Montserrat, sans-serif;">Pakistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Palau</option> 
                  <option style="font-family: Montserrat, sans-serif;">Panama</option> 
                  <option style="font-family: Montserrat, sans-serif;">Papua New Guinea</option> 
                  <option style="font-family: Montserrat, sans-serif;">Paraguay</option> 
                  <option style="font-family: Montserrat, sans-serif;">Peru</option> 
                  <option style="font-family: Montserrat, sans-serif;">Philippines</option> 
                  <option style="font-family: Montserrat, sans-serif;">Pitcairn</option> 
                  <option style="font-family: Montserrat, sans-serif;">Poland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Portugal</option> 
                  <option style="font-family: Montserrat, sans-serif;">Puerto Rico</option> 
                  <option style="font-family: Montserrat, sans-serif;">Qatar</option> 
                  <option style="font-family: Montserrat, sans-serif;">Reunion</option> 
                  <option style="font-family: Montserrat, sans-serif;">Romania</option> 
                  <option style="font-family: Montserrat, sans-serif;">Russian Federation</option> 
                  <option style="font-family: Montserrat, sans-serif;">Rwanda</option> 
                  <option style="font-family: Montserrat, sans-serif;">Saint Kitts and Nevis</option> 
                  <option style="font-family: Montserrat, sans-serif;">Saint LUCIA</option> 
                  <option style="font-family: Montserrat, sans-serif;">Saint Vincent and the Grenadines</option> 
                  <option style="font-family: Montserrat, sans-serif;">Samoa</option> 
                  <option style="font-family: Montserrat, sans-serif;">San Marino</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sao Tome and Principe</option> 
                  <option style="font-family: Montserrat, sans-serif;">Saudi Arabia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Senegal</option> 
                  <option style="font-family: Montserrat, sans-serif;">Seychelles</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sierra Leone</option> 
                  <option style="font-family: Montserrat, sans-serif;">Singapore</option> 
                  <option style="font-family: Montserrat, sans-serif;">Slovakia (Slovak Republic)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Slovenia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Solomon Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Somalia</option> 
                  <option style="font-family: Montserrat, sans-serif;">South Africa</option> 
                  <option style="font-family: Montserrat, sans-serif;">South Georgia and the South Sandwich Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Spain</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sri Lanka</option> 
                  <option style="font-family: Montserrat, sans-serif;">St. Helena</option> 
                  <option style="font-family: Montserrat, sans-serif;">St. Pierre and Miquelon</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sudan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Suriname</option> 
                  <option style="font-family: Montserrat, sans-serif;">Svalbard and Jan Mayen Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Swaziland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sweden</option> 
                  <option style="font-family: Montserrat, sans-serif;">Switzerland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Syrian Arab Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">Taiwan, Province of China</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tajikistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tanzania, United Republic of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Thailand</option> 
                  <option style="font-family: Montserrat, sans-serif;">Togo</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tokelau</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tonga</option> 
                  <option style="font-family: Montserrat, sans-serif;">Trinidad and Tobago</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tunisia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Turkey</option> 
                  <option style="font-family: Montserrat, sans-serif;">Turkmenistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Turks and Caicos Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tuvalu</option> 
                  <option style="font-family: Montserrat, sans-serif;">Uganda</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ukraine</option> 
                  <option style="font-family: Montserrat, sans-serif;">United Arab Emirates</option> 
                  <option style="font-family: Montserrat, sans-serif;">United Kingdom</option> 
                  <option style="font-family: Montserrat, sans-serif;">United States</option> 
                  <option style="font-family: Montserrat, sans-serif;">United States Minor Outlying Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Uruguay</option> 
                  <option style="font-family: Montserrat, sans-serif;">Uzbekistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Vanuatu</option> 
                  <option style="font-family: Montserrat, sans-serif;">Venezuela</option> 
                  <option style="font-family: Montserrat, sans-serif;">Viet Nam</option> 
                  <option style="font-family: Montserrat, sans-serif;">Virgin Islands (British)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Virgin Islands (U.S.)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Wallis and Futuna Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Western Sahara</option> 
                  <option style="font-family: Montserrat, sans-serif;">Yemen</option> 
                  <option style="font-family: Montserrat, sans-serif;">Yugoslavia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Zambia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Zimbabwe</option> 
                </select>
        </div>
                        <div class="col-12 col-m-12 col-sm-12">
			<input type="text" placeholder="Refered by?" name="referral" style="width:100%" style="width:100%" class="round">
        </div><div style="color: red"><?php if(isset($_GET["error"])) {if($_GET['error'] == "invalid_referral") { echo "<p style='color: red'>Invalid name format</p>";} }?> </div>

		<div class="col-12 col-m-12 col-sm-12">
			<input type="tel" id="mobile-number" required name="pno" value="" class="round" style="width:100%;">
			<select id="address-country" name="country" style="display:none" required></select>
		</div>
        <div class="col-12 col-m-12 col-sm-12">
			<input type="text" placeholder="Zip Code" required name="zip" value="" style="width:100%" class="round">
            <div id="zipErr" class="form_hint"> Zip code must not be empty!</div>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
			<input type="text" placeholder="Address" required name="address" value="" style="width:100%" class="round">
            <div id="addressErr" class="form_hint"> Address must not be empty!</div>
        </div>
		<div class="col-12 col-m-12 col-sm-12">
                    <input type="password" autocomplete="off" placeholder="Password" name="psw" style="width:100%" id="password" class="round">
 <div style="color: red"><?php if(isset($_GET["error"])) {if($_GET['error'] == "passwordmismatch") { echo "<p style='color: red'>Password Mismatch</p>";} }?> </div>
 <div style="color: red"><?php if(isset($_GET["error"])) {if($_GET['error'] == "weakPassword") { echo "<p style='color: red'>Use a minimum of 7 characters</p>";} }?> </div>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
        	<input type="password" autocomplete="off" placeholder="Confirm Password" required name="re_psw" style="width:100%" class="round">
        </div>
        <div class="col-12 col-m-12 col-sm-12"><input type="checkbox" name="age" required> I am 18 years of age or older
        </div>
        <div class="col-12 col-m-12 col-sm-12"><input type="checkbox" name="agree" required checked> I agree to Swiftcotradefx | Your Trusted Bitcoin  Mining Company <a href="../info/terms.html" target="_blank">Terms and conditions</a>
        </div>
        <div class="col-12 col-m-12 col-sm-12"><input type="checkbox" name="mail" required> I agree to receive Swiftcotradefx | Your Trusted Bitcoin  Mining Company and third party emails</label>
        </div>
        <div class="col-12 col-m-12 col-sm-12">
            <input name="submit" type="submit" value="Submit" class="btn round default" style="border:0"><br><br>
            <a href="../assot/BB-login.php">Already have an account</a>
        </div>
	</form>
</div>
<script src="../js/intlTelInput.js"></script> 
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
				<a href="BB-login.php" class="btn">GET STARTED</a>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php")?>
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
<!-- <?php include_once "../includes/tawkto.php" ?> -->
</body>

</html>