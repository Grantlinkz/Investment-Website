<?php
     include('dbh.inc.php');
     require_once 'functions.inc.php';
     
     if(isset($_POST['submit'])) {
        $first_name =$_POST['first_name'];
        $last_name = $_POST['last_name'];
        $sex = $_POST['sex'];
        $mobile_number = $_POST['phone_no'];
        $account_type = $_POST['account_type'];
        $country = $_POST['country']; 
        $email = $_POST['email']; 
        $referral = $_POST['referral'];
       
        $zip_code = $_POST['zip']; 
        $username = $_POST['username']; 
        $address = $_POST['address']; 
        $psw = $_POST['psw'];
        $re_psw = $_POST['re_psw'];
       
       
       
        $current_time = strtotime("now");
        $date = date("jS M, Y h:ia", $current_time);
        $wallet_balance = 0;
        $complete_signup = "123456789012";
        $complete_signup = str_shuffle($complete_signup);
        $account_status = 'active';
            
        
        
        
        $select = "SELECT email FROM user WHERE email='$email'";
if($query = mysqli_query($conn,$select)){
	$num = mysqli_num_rows($query);
	if($num > 0){
$msg = "Username <b>$user</b> already exists!";
header("location:../assot/BB-login.php?msg=$msg");
		
	}else{
    $sql = "INSERT INTO user(first_name,last_name,sex,email,country,username,psw,phone_no,referral,account_type,address,wallet_balance,date,sign,account_status) VALUES('$first_name','$last_name','$sex','$email','$country','$username','$psw','$mobile_number','$referral','$account_type','$address','$wallet_balance','$date','$complete_signup','$account_status')";
    
if(mysqli_query($conn,$sql)){
$msg = "Data submitted successfully!";
require_once '../assot-registerMail.php';       
//send Email
$mailreturn = mailClient($first_name, $last_name, $email, $complete_signup);
// header("location:fetch.php?msg=$msg");
header("location:../assot/verification_code.php?msg=$msg");
	
}else{
$msg = "Failed to execute query on the database!";
header("location:../assot/BB-login.php?msg=$msg");
	
}
		
	}
}else{
	$msg = "Failed to query database!";
header("location:BB-login.php?msg=$msg");
	
}

}else{
$msg = "Parameter Missing! Try again later";
header("location:BB-login.php?msg=$msg");
}

?>
       
    <!-- ?> -->
     


