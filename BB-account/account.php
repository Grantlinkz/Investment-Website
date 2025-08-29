<?php
    include_once '../includes/account.inc.php';
	include_once '../includes/dbh.inc.php';
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

<title>Dashboard | Swiftcotradefx</title>
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
	<!-- <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png"> -->
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
                <h1>Dashboard</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="../BB">Home</a></li>
                    <li>Dashboard</li>
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
<div class="default cpanel_info" style="text-transform: capitalize;margin-top:5px">
	Welcome <?php echo$first_name ." " . $last_name; ?>
</div>
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
    
<div class="row">
      <div class="col-12">
         <div class="container mb-3"  style="background-color: #041e37; color: #fff;" >
                                            <?php
                                                if ($row['msg'] !== "") {
                                                    
                                             ?>
                                                  <marquee scrollamount="4">
                                                            <h4 style="font-size: 20px; color: #fff !important; font-style: italic">
                                                            <span style="background-color: red; 
                                                                  padding: 2px; 
                                                                  border-radius: 3px; 
                                                                  margin-right: 5px; 
                                                                  ">News Flash: </span>
                                                                  <?php echo $row['msg'];  ?>
                                                            </h4></marquee>
                                            <?php
                                                }
                                                else {
                                                    echo "";
                                                }
                                            ?>
             
                                        
                                    </div>
    </div>
<div class="col-12">
	<div class="title_container">
		<ul class="breadcrumb right udex-hidden">
  <li><a href="account.php"><i class="fa fa-home"></i> Home</a></li>
  <li class="bold">User Dashboard</li></ul>
		<h4>User Dashboard</h4>
		<span class="decor_default"></span>
	</div>
</div>
    <div class="row">
        <div class="col-6 col-m-6">
	<div class="r4_counter db_box has-gradient-to-right-bottom">
		<div class="icon-after">
			<img src="../images/cryptonia-ico-lg.png" alt="">
		</div>
	
		<i class="pull-left fa fa-usd icon-md icon-white mt-10"></i>
		<div class="stats">
			<h3 class="color-white mb-5"><?php 
                          $wallet_balance ;
                                    $show_wallet = number_format($wallet_balance, 2);
                                echo $show_wallet;
                            ?>USD</h3>
			<span>Balance</span>
		</div>
	</div>
</div>
<div class="col-6 col-m-6">
	<div class="r4_counter db_box">
		<div class="icon-after">
			<img src="../images/sell-icon-lg.png" alt="">
		</div>
		<i class="pull-left ico-icon icon-md icon-primary mt-20">
			<img src="../images/sell-icon-so.png" class="ico-icon-o" alt="">
			<img src="../images/sell-icon-sw.png" class="ico-icon-w" alt="">
		</i>
		<div class="stats" style="padding: 0 20px;border-left: 1px solid #eeebeb;">
			<h3 class="color-white mb-5">      $<?php 
                                    $show_total_deposit = number_format($total_deposit, 2);
                               echo $show_total_deposit; 
                                        ?></h3>
			<span>Total Deposit(s)</span>
		</div>
	</div>
</div>
    </div>
    <div class="row">
        <div class="col-6 col-m-6">
	<div class="r4_counter db_box">
		  <div class = 'col-ref-code'>
                      <a href="../assot/BB-register.php?ref=<?php echo $row['username'] ?>" target='_target'> Your Referral Link </a>
                                        <input type="text"readonly ='readonly' value="BBexchange.com/BB-register.php?ref=<?php echo $row['username'] ?>" id="myInput" class="bit-add" style = 'background: #fff;'>
                                <!-- ================================================== -->							        	
                                <br/>
                            

                                                <button type="button" onclick="myFunction()" class="btn btn-primary btn-lg" id="copy-btn">Copy text</button>
                                                <script>

                                                function myFunction() {

                                                  var copyText = document.getElementById("myInput");

                                                  copyText.select();

                                                  document.execCommand("copy");



                                                        }

                                                        $(document).ready(function(){

                                                                $('#copy-btn').click(function(){

                                                                        swal({

                                                                                text: 'Referral id Copied',

                                                                                icon: 'success'

                                                                        });

                                                                });

                                                        });

                                                </script>
                                </div>
	</div>
</div>
        <div class="col-6 col-m-6">
	<div class="r4_counter db_box">
		<div class="icon-after">
			<img src="../images/buy-icon-lg.png" alt="">
		</div>
		<i class="pull-left ico-icon icon-md icon-primary mt-20">
			<img src="../images/buy-icon-so.png" class="ico-icon-o" alt="">
			<img src="../images/buy-icon-sw.png" class="ico-icon-w" alt="">
		</i>
		<div class="stats" style="padding: 0 20px;border-left: 1px solid #eeebeb;">
			<h3 class="color-white mb-5">  $<?php 
                                    $show_total_withdraw = number_format($total_withdraw, 2);
                               echo $show_total_withdraw; 
                                        ?></h3>
			<span>Total Withdrawal(s)</span>
		</div>
	</div>
</div>
    </div>
<div class="row">
    <div class="col-6 col-m-6">
    
	<div class="white section round row" style="padding: 0">
            
		<div class="col-12" style="padding: 5px 10px; height:315px">
                   
			  <h3 style="text-align: left; font-family: raleway !important;">Current BTC Price</h3>
                            <div class="bitcoin-widget">
							<div style="width: 420px; height:220px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px;"><div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=light&coin_id=859&pref_coin_id=1505" width="400" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>
                                <!-- <script type="text/javascript"> crypt_single_base_currency = "Bitcoin (BTC)";crypt_single_target_currency = "US Dollar (USD)";crypt_single_border_width = 0;</script> -->
                                <!-- <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/single_widget.js"></script> -->
                            </div>
		</div>
	</div>
    
</div>
<div class="col-6 col-m-6">
	<div class="white section round">
		 <h3 style="font-family: raleway !important;">BITCOIN (BTC) AND ETHEREUM (ETH) TO USD CONVERTER</h3>
            <script type="text/javascript">crypt_calc_border_width = 0;</script>
            <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>

	</div>
</div>
</div>
<div class="col-6 col-m-6">
	<div class="white section round row" style="padding: 0">
		<div class="col-12" style="padding: 10px 20px">
			        <h3 style="font-family: raleway !important;">Top Crypto Currencies</h3>
                                <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 99%;"><div style="height:413px;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;">powered by&nbsp;<a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none;font-size:11px">Coinlib</a></div>
                                </div>                                           
		</div>
	</div>
</div>
<div class="col-6 col-m-6">
	<div class="white section round">
		 <h3 style="font-family: raleway !important;">Live Coin Chart</h3>
                <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:0px;padding: 0px; margin: 0px;"><div style="height:540px;padding:0px;margin:0px;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" width="100%" height="409" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;box-sizing:content-box;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;">powered by&nbsp;<a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; font-size: 11px; text-decoration:none;">Coinlib</a></div>
                </div>                                                      
	</div>
</div>
<div class="col-12 col-m-12">
	<div class="white section round row" style="padding: 0">
		<div class="col-12" style="padding: 10px 20px">
			      <div class="table-responsive">
                    <style>.widget_chart_container{ height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; } .widget_chart_iframe_container{ height:540px; width: calc( 100% - 1px ); } .widget_chart_iframe{ border:0;margin:0;padding:0; } .widget_chart_powered{ color: #626B7F; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 3px 0px; font-family: Verdana, Tahoma, Arial, sans-serif; float: right !important; } .widget_chart_powered_link{ font-weight: 500; color: #626B7F !important; text-decoration:none; font-size:11px; display:inline-block; margin-right:5px; }</style><div class="widget_chart_container"><div class="widget_chart_iframe_container"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1505" width="100%" height="100%" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" class="widget_chart_iframe"></iframe></div><div class="widget_chart_powered"></div></div>
                 </div>                                                                               
		</div>
	</div>
</div>

</div>	<div class="dash_footer">
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
<div id="myModal" class="modal padding">

  <!-- Modal content -->
  <div class="modal-content-small">
  <div class="modal-body center">
    <span class="close text-grey">&times;</span><br>
    <h3>Your profile photo</h3>
<h6>It is not allowed to publish:</h6><br>
<div class="danger">
<ul class="bullet">
    <li>photos of an explicitly sexual or pornographic nature</li>
    <li>images aimed at inciting ethnic or racial hatred or aggression</li>
    <li>photos involving persons under 18 years of age</li>
    <li>third-party copyright protected photos</li>
    <li>images larger than 5 MB and in a format other than JPG, GIF or PNG</li>
</ul></div><br>
Your face must be clearly visible on the photo.<br>
All photos and videos uploaded by you must comply with these requirements, otherwise they can be removed.
</div>
<form enctype="multipart/form-data" action="https://Swiftcotradefx.com/image_profile_upload.php" method="post" name="image_upload_form" id="image_upload_form">
<div class="modal-footer center lightgrey padding">
    <a class="btn default border2 round" id="imgChange" style="width:200px">
    <input type="hidden" name="user" value="375">
    <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file">Select a Photo</a>
  </div>
</form>
</div>

</div>
<div class="udex-overlay" id="myOverlay"></div>
<ul class="udex_footer">
	<div class="bodycontainer2" style="max-width: 500px">
		<li><a href="account.php"><i class="fa fa-home"></i><span>Office</span></a></li>
		<li><a href="trading-view.php"><i class="fa fa-line-chart"></i><span>Signal</span></a></li>
		<li><a href="info.php"><i class="fa fa-gears"></i><span>Settings</span></a></li>
		<li><a href="../includes/logout.inc.php"><i class="fa fa-power-off"></i><span>Logout</span></a></li>
	</div>

<div id="modal-content" class="iziModal card" style="border-bottom: 3px solid #e75874; overflow: hidden; display: none; max-width:90% !important;">
	<div class="iziModal-header"style="background: #000000;">
		<i class="iziModal-header-icon icon-stack fa fa-inbox"></i>
		<h2 class="iziModal-header-title" style="color: #fff !important">Add Fund via Bitcoin</h2>
		<a href="javascript:void(0)" class="iziModal-button-close" data-izimodal-close=""></a>
	</div>
	<div class="iziModal-wrap">
		<div class="iziModal-content">
		<form method="POST" action="deposit-fund.php" class="row">
			<div class="col-12">
				<div class="danger margintb">Deposit Charge : (1 + 1%) - USD</div>
				<div class="display-container">
					<input type="number" required name="bit_amount_fund" placeholder="Amount" class="padding bold" style="width: 100%; padding-right: 70px !important">
					<span class="display-topright grey padding border" style="display: inline-block">USD</span>
				</div>
				<button class="btn default padding center" style="margin-top: 10px; width: 100%"><i class="fa fa-send"></i> CONTINUE</button>
			</div>
		</div>
		</form>
		</div>
	</div>
</div>
<div id="modal-content2" class="iziModal card" style="border-bottom: 3px solid #e75874; overflow: hidden; display: none; max-width:90% !important;">
	<div class="iziModal-header"style="background: #000000;">
		<i class="iziModal-header-icon icon-stack fa fa-inbox"></i>
		<h2 class="iziModal-header-title" style="color: #fff !important">Add Fund via Ethereum</h2>
		<a href="javascript:void(0)" class="iziModal-button-close" data-izimodal-close=""></a>
	</div>
	<div class="iziModal-wrap">
		<div class="iziModal-content">
		<form method="POST" action="deposit-fund.php" class="row">
			<div class="col-12">
				<div class="danger margintb">Deposit Charge : (1 + 1%) - USD</div>
				<div class="display-container">
					<input type="number" required name="eth_amount_fund" placeholder="Amount" class="padding bold" style="width: 100%; padding-right: 70px !important">
					<span class="display-topright grey padding border" style="display: inline-block">USD</span>
				</div>
				<button class="btn default padding center" style="margin-top: 10px; width: 100%"><i class="fa fa-send"></i> CONTINUE</button>
			</div>
		</div>
		</form>
		</div>
	</div>
</div>
<div id="modal-content3" class="iziModal card" style="border-bottom: 3px solid #e75874; overflow: hidden; display: none; max-width:90% !important;">
	<div class="iziModal-header"style="background: #000000;">
		<i class="iziModal-header-icon icon-stack fa fa-inbox"></i>
		<h2 class="iziModal-header-title" style="color: #fff !important">Add Fund via Payeer</h2>
		<a href="javascript:void(0)" class="iziModal-button-close" data-izimodal-close=""></a>
	</div>
	<div class="iziModal-wrap">
		<div class="iziModal-content">
		<form method="POST" action="deposit-fund.php" class="row">
			<div class="col-12">
				<div class="danger margintb">Deposit Charge : (1 + 1%) - USD</div>
				<div class="display-container">
					<input type="number" required name="skr_amount_fund" placeholder="Amount" class="padding bold" style="width: 100%; padding-right: 70px !important">
					<span class="display-topright grey padding border" style="display: inline-block">USD</span>
				</div>
				<button class="btn default padding center" style="margin-top: 10px; width: 100%"><i class="fa fa-send"></i> CONTINUE</button>
			</div>
		</div>
		</form>
		</div>
	</div>
</div>
<div id="modal-content4" class="iziModal card" style="border-bottom: 3px solid #e75874; overflow: hidden; display: none; max-width:90% !important;">
	<div class="iziModal-header"style="background: #000000;">
		<i class="iziModal-header-icon icon-stack fa fa-inbox"></i>
		<h2 class="iziModal-header-title" style="color: #fff !important">Withdraw via Bitcoin</h2>
		<a href="javascript:void(0)" class="iziModal-button-close" data-izimodal-close=""></a>
	</div>
	<div class="iziModal-wrap">
		<div class="iziModal-content">
		<form method="POST" action="withdraw-request.php" class="row">
			<div class="col-12">
				<div class="danger margintb">Withdraw Charge : (25 + 2.25%) - USD</div>
				<div class="display-container">
					<input type="number" required name="btc_amount_withdraw" placeholder="Amount" class="padding bold" style="width: 100%; padding-right: 70px !important">
					<span class="display-topright grey padding border" style="display: inline-block">USD</span>
				</div>
				<button class="btn default padding center" style="margin-top: 10px; width: 100%"><i class="fa fa-send"></i> WITHDRAW NOW</button>
			</div>
		</div>
		</form>
		</div>
	</div>
</div>
<div id="modal-content5" class="iziModal card" style="border-bottom: 3px solid #e75874; overflow: hidden; display: none; max-width:90% !important;">
	<div class="iziModal-header"style="background: #000000;">
		<i class="iziModal-header-icon icon-stack fa fa-inbox"></i>
		<h2 class="iziModal-header-title" style="color: #fff !important">Withdraw via Ethereum</h2>
		<a href="javascript:void(0)" class="iziModal-button-close" data-izimodal-close=""></a>
	</div>
	<div class="iziModal-wrap">
		<div class="iziModal-content">
		<form method="POST" action="withdraw-request.php" class="row">
			<div class="col-12">
				<div class="danger margintb">Withdraw Charge : (25 + 2.30%) - USD</div>
				<div class="display-container">
					<input type="number" required name="eth_amount_withdraw" placeholder="Amount" class="padding bold" style="width: 100%; padding-right: 70px !important">
					<span class="display-topright grey padding border" style="display: inline-block">USD</span>
				</div>
				<button class="btn default padding center" style="margin-top: 10px; width: 100%"><i class="fa fa-send"></i> WITHDRAW NOW</button>
			</div>
		</div>
		</form>
		</div>
	</div>
</div>
<div id="modal-content6" class="iziModal card" style="border-bottom: 3px solid #e75874; overflow: hidden; display: none; max-width:90% !important;">
	<div class="iziModal-header"style="background: #000000;">
		<i class="iziModal-header-icon icon-stack fa fa-inbox"></i>
		<h2 class="iziModal-header-title" style="color: #fff !important">Withdraw via Payeer</h2>
		<a href="javascript:void(0)" class="iziModal-button-close" data-izimodal-close=""></a>
	</div>
	<div class="iziModal-wrap">
		<div class="iziModal-content">
		<form method="POST" action="withdraw-request.php" class="row">
			<div class="col-12">
				<div class="danger margintb">Withdraw Charge : (25 + 2.75%) - USD</div>
				<div class="display-container">
					<input type="number" required name="skr_amount_withdraw" placeholder="Amount" class="padding bold" style="width: 100%; padding-right: 70px !important">
					<span class="display-topright grey padding border" style="display: inline-block">USD</span>
				</div>
				<button class="btn default padding center" style="margin-top: 10px; width: 100%"><i class="fa fa-send"></i> WITHDRAW NOW</button>
			</div>
		</div>
		</form>
		</div>
	</div>
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