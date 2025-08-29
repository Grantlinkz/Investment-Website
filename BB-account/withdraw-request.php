<?php
include_once '../includes/account.inc.php';

?>	
<!doctype html>
<html class="no-js"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../favicon.png" rel="icon" type="image/x-icon" />
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
 <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link href="../css/main.css" rel="stylesheet"/>
<link href="../css/home.css" rel="stylesheet"/>
<link href="../css/animate.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../css/dataurl.css">
<link rel="stylesheet" type="text/css" href="../css/iziModal.min.css">

<title>Withdrawal Request | Swiftcotradefx</title>
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
<link rel="icon" sizes="192x192" href="../images/icon/icon-192.png">

<meta name="keywords" content="Swiftcotradefx />
<meta property="og:image" content="../images/icon/icon-310x310.png" />

<meta name="msapplication-square310x310logo" content="../images/icon/icon-310x310.png">
<meta name="msapplication-square70x70logo" content="../images/icon/icon-70x70.png">
<meta name="msapplication-square150x150logo" content="../images/icon/icon-150x150.png">
<meta name="msapplication-wide310x150logo" content="../images/icon/icon-310x150.png">

<link rel="apple-touch-icon-precomposed" href="../images/icon/apple-touch-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/icon/apple-touch-icon-57x57
.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/icon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/icon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/icon/apple-touch-icon-144x144.png" />


<meta property="og:site_name" content="Swiftcotradefx | Your Trusted Bitcoin  Mining Company">
<meta property="og:title" content="Your Trusted Bitcoin  Mining Company" />
<meta name="description" content="Swiftcotradefx is totally different from its competitors trying to achieve something special starting with the... ">
<meta property="og:description" content="Swiftcotradefx is totally different from its competitors trying to achieve something special starting with the... ">
<meta property="og:type" content="website" />

<link rel="stylesheet" href="../BB/assets/templates/bit_gold//css/custom.css">
<link rel="stylesheet" href="../BB/assets/templates/bit_gold/css/color.php?color=d03149&secondColor=000000">
<link rel="stylesheet" href="../BB/assets/templates/bit_gold//assets/css/style.css">

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.form.js"></script>
<script src="../js/pace.min.js"></script>
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
<body>

<header class="cpanel_header row" id="cpanel_header" style="background-color:white">
	<ul>
		<li class="bar"><a id="menu_btn"><i class="fa fa-align-left"></i></a></li>
		<a href="../BB"><li class="brand"><img src="../BB/assets/images/logoIcon/logo.png" title="Swiftcotradefx | Your Trusted Bitcoin  Mining Company"/></li></a>
		<li class="user"><a href="#" id="open_account"><i class="fa fa-user"></i></a>
		</li>
	</ul>
</header>

<section class="page-title centred" style="background-image: url(../BB/assets/templates/bit_gold//assets/images/banner/pictures2.jpg);">
        
        <div class="auto-container">
            <div class="content-box clearfix"  style = "padding-top:30%;">
                <div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
                <h1>Withdrawal </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="../BB">Home</a></li>
                    <li>Withdrawal</li>
                </ul>
            </div>
        </div>
</section>
<div id="account" class="udex-animate-right">
	<ul>
		<li class="title">Account</li>
                <li><a href="info.php" style="text-transform: capitalize"><i class="fa fa-user"></i> <?php echo $row['first_name'] ." " . $row['last_name']; ?></a></li>
		<li><a href="BB-security.php"><i class="fa fa-gear"></i> Safety & Security</a></li>
		<li><a href="changepass.php"><i class="fa fa-lock"></i> Change Password</a></li>
				<li><a href="../includes/logout.inc.php"><i class="fa fa-power-off"></i> Sign Out</a></li>
	</ul>
</div>
<script>
$('#open_account').click( function(){
	$("#account").toggle();
	$("#main, header, .cpanel_info, .udex_footer").toggleClass("cubic-right");
	$("body").toggleClass("udex_overflow");
});
$("#menu_btn").click( function(){
	$("#mySidebar").toggle();
	$("#main, header, .cpanel_info, .udex_footer").toggleClass("cubic-left");
	$("body").toggleClass("udex_overflow");
});
</script>	
<style rel="modal-content">
	@media handheld, only screen and (max-width: 700px) {
		#modal-content{
			width: 90% !important;
			max-width: 90% !important;
			left: 0 !important;
		}
	}
	input, textarea { max-width: 100%; }
</style>

<style type="text/css">
#imgArea {
	display: block;
	margin: 0 auto;
	position: relative;
	font-size: 13px;
	overflow:hidden;
}
#imgArea img {
	outline: medium none;
	vertical-align: middle;
	width: 100%;
}
#imgContainer {
	width: 100%;
	text-align: center;
	position: relative;
}
#imgChange input[type="file"] {
	bottom: 0;
	cursor: pointer;
	height: 100%;
	left: 0;
	margin: 0;
	opacity: 0;
	padding: 0;
	position: absolute;
	width: 100%;
}
/* Progressbar */
.progressBar {
	background: none repeat scroll 0 0 #fff;
	left: 0;
	padding: 5px 0;
	position: absolute;
	top: 50%;
	width: 100%;
	display: none;
}
.progressBar .bar {
	background-color: #2196f3;
	width: 0%;
	height: 18px;
}
.progressBar .percent {
	display: inline-block;
	left: 0;
	position: absolute;
	text-align: center;
	top: 5px;
	color: #FFF;
	width: 100%;
}
#imgChange {
	position: relative;
}
</style>
<div class="default cpanel_info" style="text-transform: capitalize; margin-top:5px">
Welcome, <?php echo $row['first_name'] ." " . $row['last_name']; ?></div>
<div class="udex-sidebar udex-collapse udex-animate-left" id="mySidebar">
	<ul class="udex-ul">
            <li class="header"><a href="account.php"><i class="fa fa-home"></i> Dashboard</a></li>
                <li ><a href="deposit-fund.php"> <i class="fa fa-inbox"></i> Deposit Funds</a></li>
                <li ><a href="withdraw-request.php"> <i class="fa fa-money"></i> Withdraw Funds</a></li>
               <li ><a href="transaction-log.php"> <i class="fa fa-crosshairs"></i> Account History</a></li>
                <li ><a href="info.php"> <i class="fa fa-gears"></i> Account Profile</a></li>
                <li ><a href="trading-view.php"> <i class="fa fa-bullseye"></i> Trade View</a></li>
		<li><a href="../includes/logout.inc.php"> <i class="fa fa-power-off"></i> Logout</a></li>
                <li><a href="../contact.html"> <i class="fa fa-exclamation-circle"></i> Help</a></li>
	</ul>
</div>
<div class="udex-main" id="main">

    <script src="../js/validation.js"></script>
    <div class="title_container">
	<ul class="breadcrumb right udex-hidden">
  <li><a href="account.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="bold">Withdrawal Request</li></ul>
	<h4>Withdrawal Request</h4>
	<span class="decor_default"></span>
</div>
<div class="white section round row kk" style="padding: 0px">

<div class="col-12">
	<div class="center">
		<div class="has-gradient-to-right-bottom padding"><p class="text-white">The request for withdrawals can be made daily from Monday to Friday and should be submitted between the hours of 6.00 AM and 9.00 PM as per the server time and it will be released between 2 hours.</p>
                </div>
            <br>
            <div style="color: red !important"><?php if(isset($_GET["result"])) {if($_GET['result'] == "success") { echo "<h1 style='color: red !important'>Withdrawal Request has been received and is under processing!</h1>";} }?> </div>
            <br>
            		<h5>Available Balance </h5>
						<h2> <span><i class="fas fa-dollar-sign"></i></span>$<?php 
                                                        $wallet = $row['wallet_balance'];
                                                            $show_wallet = number_format($wallet, 2);
                                                        echo $show_wallet;
                                                                ?></h2>
                                                        <hr>
                                                        <form method="post" action='../includes/request_withdrawal.inc.php' enctype="multipart/form-data">
          <div class="form-group">
              <label for="withdraw_amt">Withdraw Amount *</label>
              <input type="int" class="form-control" id="withdraw_amt" required name="withdraw_amt" style="width: 80%">
          </div>
                       <br>
           <div class="form-group">
              <label for="withdraw_method">Withdrawal Method *</label>
              <select class="form-control" id="withdraw_method" name="withdraw_method" onchange="show()" style="width: 80%">
                  <option selected disabled>Select Method</option>
                  <option value="bitcoin">Bitcoin</option>
                  <option value="bank_withdraw">Bank Withdrawal</option>
              </select>
           </div>    
          <div class="form-group mt-4" style="display: none; padding: 0 10%;" id="show_btc">
              <label for="btc_address">Wallet Address *</label>
              <input type="text" class="form-control" id="btc_address" required name="btc_address" style="width: 100%">
                                                                         
          </div>
                       <br>
          <div id="show_banktransfer" style="display: none; padding: 0 10%;">
               <div class="form-group">
                      <label for="swift_code">Bank Name:</label>
                      <input type="text" class="form-control" id="bank_name" name="bank_name" required placeholder="Bank Name" style="width: 100%">
                  </div>
              <br>
               <div class="form-group">
                      <label for="swift_code">Bank Address:</label>
                      <input type="text" class="form-control" id="bank_address" name="bank_address" required placeholder="Bank Address" style="width: 100%;">
                  </div>
              <br>
                  <label for="country">Country: </label>
                  <select name="country" size="1" class="form-control" required id="country" style="font-family: Montserrat, sans-serif; height: 3.25rem; border-radius: 0px; width: 100%;">
                    <option value="" disabled selected>--Select an option--</option>
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
                  <br><br>
                   <div class="form-group">
                      <label for="swift_code">Routing Number</label>
                      <input type="text" class="form-control" id="routing_no" name="routing_no" required placeholder="Routing Number" style="width: 100%">
                  </div>
                  <br>
                   <div class="form-group">
                      <label for="name">Account Name</label>
                      <input type="text" class="form-control" id="account_name" name="account_name" required placeholder="Account Name" style="width: 100%">
                  </div>
                  <br>
                   <div class="form-group">
                      <label for="acc_name">Account Number</label>
                      <input type="text" class="form-control" id="account_no" name="account_no" required placeholder="Account Number" style="width: 100%">
                  </div>
<!--                   <div class="form-group">
                      <label for="ibam_no">IBAM NUMBER</label>
                      <input type="text" class="form-control" id="ibam_no" name="ibam_no" required placeholder="ibam number">
                  </div>-->
<br>
                   <div class="form-group">
                      <label for="phone_no">Mobile Number</label>
                      <input type="text" class="form-control" id="phone_no" name="phone_no" required placeholder="Phone Number" style="width: 100%">
                      <small class="text-muted">Enter country code with phone number</small>
                  </div>
<br>
                   <div class="form-group">
                      <label for="currency">Enter Currency Type</label>
                      <select class="form-control" id="currency" name="currency" required style="width: 100%">
                          <option>USD</option>
                          <option>EURO</option>
                          <option>POUNDS</option>
                      </select>
                  </div>
<br>
                   <div class="form-group">
                      <label for="currency">Account Type</label>
                      <input type="text" class="form-control" id="account_type" name="account_type" required style="width: 100%">
                  </div>
    <!--                                                                        <center>
                      <button type="submit" class="btn btn-primary  btn-lg" id="submit2" name="bank_withdrawal">Request Withdrawal</button>
                </center>                                                                          -->
              </div> 
                       <br>
                <center>
                      <button type="submit" class="btn btn-primary  btn-lg" id="submit" name="request_withdrawal" style="width: 80%">Request Withdrawal</button>
                </center>                                                                      



        </form>
                                                               
        <script>
            function show() {
                var withdraw_method = document.getElementById('withdraw_method');
                var show_btc = document.getElementById('show_btc');
                var show_banktransfer = document.getElementById('show_banktransfer');

                var withdraw_amt = document.getElementById('withdraw_amt');
                var btc_address = document.getElementById('btc_address');


                //bank withdraw
                var bank_name = document.getElementById('bank_name');
                var bank_address = document.getElementById('bank_address');
                var country = document.getElementById('country');
                var routing_no = document.getElementById('routing_no');
//                var name = document.getElementById('name');
                var account_name = document.getElementById('account_name');
                var account_no = document.getElementById('account_no');
//                var ibam_no = document.getElementById('ibam_no');
                var phone_no = document.getElementById('phone_no');
                var currency = document.getElementById('currency');
                var account_type = document.getElementById('account_type');
                
                if(withdraw_method.options[withdraw_method.selectedIndex].value == 'bitcoin') {
                    show_btc.style.display = 'block';
                    bank_name.setAttribute('disabled', 'disabled');
                    bank_address.setAttribute('disabled', 'disabled');
                    country.setAttribute('disabled','disabled');
                    routing_no.setAttribute('disabled','disabled');
                    account_name.setAttribute('disabled','disabled');
                    account_no.setAttribute('disabled','disabled');
//                    acc_name.setAttribute('disabled','disabled');
//                    ibam_no.setAttribute('disabled','disabled');
                    phone_no.setAttribute('disabled','disabled');
                    currency.setAttribute('disabled','disabled');
                    account_type.setAttribute('disabled','disabled');
                    show_banktransfer.style.display = 'none';
                  //  withdraw_amt.removeAttribute('disabled');
                    btc_address.removeAttribute('disabled');
                }
                
               if(withdraw_method.options[withdraw_method.selectedIndex].value === 'bank_withdraw') {
                    show_btc.style.display = 'none';
                    bank_name.removeAttribute('disabled');
                    bank_address.removeAttribute('disabled');
                    country.removeAttribute('disabled');
                    routing_no.removeAttribute('disabled');
                    account_name.removeAttribute('disabled');
                    account_no.removeAttribute('disabled');
//                    ibam_no.removeAttribute('disabled');
                    phone_no.removeAttribute('disabled');
                    currency.removeAttribute('disabled');
                    account_type.removeAttribute('disabled');
                    show_banktransfer.removeAttribute('disabled');
                    show_banktransfer.style.display = 'block';
                    btc_address.setAttribute('disabled','disabled');
                }
//                
 //               if(withdraw_method.options[withdraw_method.selectedIndex].value === 'bank_withdraw') {
//                    show_banktransfer.style.display = 'block';
//                  
//                }
//                
//                else {
//                    show_banktransfer.style.display = 'none';
//                }
            }
        </script>
	</div>
</div>
</div>
<style>
	.row.kk [class*="col-"] { padding: 5px 5px;}
	@media (min-width: 992px){
		.row.kk [class*="col-"] { padding: 4px 8px;}
	}
</style>	<div class="dash_footer">
	<p>Copyright © Swiftcotradefx offers a simple and transparent mechanism for attracting  investments and making profits.</p><br>
	<p>Version 2.0</p>
	</div>
</div>
    
<script>
$(document).on('change', '#image_upload_file', function () {
var progressBar = $('.progressBar'), bar = $('.progressBar .bar'), percent = $('.progressBar .percent');

document.getElementById('myModal').style.display = "none";
$('#image_upload_form').ajaxForm({
    beforeSend: function() {
		progressBar.fadeIn();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function(html, statusText, xhr, $form) {		
		obj = $.parseJSON(html);	
		if(obj.status){		
			var percentVal = '100%';
			bar.width(percentVal)
			percent.html(percentVal);
			$("#imgArea>img").prop('src','https://Swiftcotradefx.com/'+obj.image_small);		
		} else {
			alert(obj.error);
		}
    },
	complete: function(xhr) {
		progressBar.fadeOut();			
	}	
}).submit();		

});
</script>

</div>
<div class="udex-overlay" id="myOverlay"></div>
<ul class="udex_footer">
	<div class="bodycontainer2" style="max-width: 500px">
		<li><a href="account.php"><i class="fa fa-home"></i><span>Office</span></a></li>
		<li><a href="trading-view.php"><i class="fa fa-line-chart"></i><span>Signal</span></a></li>
		<li><a href="info.php"><i class="fa fa-gears"></i><span>Settings</span></a></li>
		<li><a href="../includes/logout.inc.php"><i class="fa fa-power-off"></i><span>Logout</span></a></li>
	</div>
<script src="../js/iziModal.min.js"></script>
<script>
if ($(window).width() > 992) {
	boxPosition = $(".udex-sidebar").offset().top;
	$(window).scroll(function(){
	   var isFixed = $(".udex-sidebar").css("position") === "fixed";
	   if($(window).scrollTop() > boxPosition && !isFixed){
				$(".udex-sidebar").css({position:"fixed", top: "0px"});
	   }else if($(window).scrollTop() < boxPosition){
			$(".udex-sidebar").css({position:"absolute", top: "auto"});
	   }
	});
}
</script>
<script>
$("#modal-content, #modal-content2, #modal-content3, #modal-content4, #modal-content5, #modal-content6").iziModal({
        overlayColor: 'rgba(0, 0, 0, 0.8)',
		iconClass: 'icon-stack',
        width: 360,
        padding: 5
    });
    $(document).on('click', '.trigger-btc', function (event) {
        event.preventDefault();
        $('#modal-content').iziModal('open');
    });
    $(document).on('click', '.trigger-eth', function (event) {
        event.preventDefault();
        $('#modal-content2').iziModal('open');
    });
    $(document).on('click', '.trigger-skr', function (event) {
        event.preventDefault();
        $('#modal-content3').iziModal('open');
    });
    $(document).on('click', '.trigger-withdraw-btc', function (event) {
        event.preventDefault();
        $('#modal-content4').iziModal('open');
    });
    $(document).on('click', '.trigger-withdraw-eth', function (event) {
        event.preventDefault();
        $('#modal-content5').iziModal('open');
    });
    $(document).on('click', '.trigger-withdraw-skr', function (event) {
        event.preventDefault();
        $('#modal-content6').iziModal('open');
    });
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<?php include_once "../includes/tawkto.php" ?>
</body>
</html