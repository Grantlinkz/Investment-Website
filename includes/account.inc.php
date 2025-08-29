<?php
setcookie("user", "user-login", time() + 3600, "/", "Swiftcotradefx.com", true, true);
header('Content-Type: text/html; charset=utf-8'); 
include_once 'dbh.inc.php';
    session_start();
    $userId = $_SESSION["id"];
    $userEmail = $_SESSION["email"];
    $first_name = $_SESSION["first_name"];
    $last_name = $_SESSION["last_name"];
    // $wallet_balance =  $_SESSION["username"];
    // $wallet_balance =  $row["wallet_balance"];
    
   if(!$userEmail == "") {
    $sql="select * from user WHERE id='$userId'";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $query = $conn->query("SELECT * FROM user WHERE id='$userId'");
    $wallet_balance=0;
    while($userdetails = mysqli_fetch_array($query)){
    $wallet_balance = $wallet_balance+$userdetails['wallet_balance'];
    // $wallet_balance =  $_SESSION["wallet_balance"];    
}
    
    $sql3 = "SELECT * from history1 WHERE type='withdrawal' and id=$userId";
    $result3 = mysqli_query($conn, $sql3);
    $total_withdraw = 0;
    
    while($row3 = mysqli_fetch_array($result3)) {
        $total_withdraw = $total_withdraw + $row3['amount'];
    }
    
    $sql4 = "SELECT * from history1 WHERE type='deposit' and id=$userId";
    $result4 = mysqli_query($conn, $sql4);
    $total_deposit = 0;
    while($row4 = mysqli_fetch_array($result4)) {
        $total_deposit = $total_deposit + $row4['amount'];
    }
  }
  
  else {
       header("Location: ../assot/BB-login.php");
       exit();
  }
  
  
  
    
  
    
    
