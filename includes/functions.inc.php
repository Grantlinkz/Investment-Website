<?php  
    function invalidUid($username) {
        $result="";
        
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }
      function strongPsw($psw) {
        $result="";
        
        if($psw <= 6) {
            $result = true;
        }
        else {
            return false;
        }
        return $result;
    }
    
       function invalidAdmin($admin_username) {
        $result="";
        
        if(!preg_match("/^[a-zA-Z0-9]*$/", $admin_username)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }
    
     
    
    
       function invalidOtp($security) {
        $result="";
        
        if(!preg_match("/^[0-9]*$/", $security)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }
    
     function invalidEmail($email) {
        $result="";
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }
    
     function pwdMatch($psw, $re_psw) {
        $result="";
        
        if($psw !== $re_psw) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }
    
    function forget_pass($conn, $email) {
             $sql = "SELECT * FROM user WHERE email = ?;";

            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)) {
                 header("location: ../fpass.php?error=connectionerror");
                       exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);

            // $resultData = mysqli_stmt_get_result($stmt);

            // if($row = mysqli_fetch_assoc($resultData))
            if($row = mysqli_stmt_prepare($stmt, $sql)) {
                
                $psw_token = "qwertyuiopasdfghjklzxcvbnQWERTYUIZCVBAS34567";
                $psw_token = str_shuffle($psw_token);
                $get_otp = substr($psw_token, 0, 7);

                 $name = "Dear User";
                 $from = "noreply@Swiftcotradefx.com";
                 $subject = "Received mail from $from";
                 $message = "This is your reset password ".$get_otp. "Changed this default password to a stronger password from your profile when you login to your account";

                 $to = "$email";
                 $headers = "MIME-Version: 1.0" . "\r\n";
                 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                 $headers .= 'From: <$from>' . "\r\n";
                 
            $email = $row['email'];
        
              $update_psw = "UPDATE user SET psw='$get_otp' WHERE email='$email'";

                 mysqli_query($conn, $update_psw);
                 
                 
                             if(mail($to, $subject, $message, $headers)) {
                               header("location: ../email-notification.html");
                         }
               
            }

            else {
                header("location: ../fpass.php?error=emailnotfound");
                  exit();
            }

            mysqli_stmt_close($stmt);
       
    }
    
        function verification($conn, $verify) {
            $sql = "SELECT * FROM user WHERE sign = ?;";

            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)) {
                 header("location: ../verification_code.php?error=connectionerror");
                       exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $verify);
            mysqli_stmt_execute($stmt);

            // $resultData = mysqli_stmt_get_result($stmt);

            // if($row = mysqli_fetch_assoc($resultData))
            if($row = mysqli_stmt_prepare($stmt, $sql)) {
                 $sql2 = "UPDATE user SET email_verified='1' WHERE sign= ?";
               
                  $stmt2 = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt2, $sql2)) {
                     header("location: ../verification_code.php?error=connectionerror");
                           exit();
                }
                mysqli_stmt_bind_param($stmt2, "s", $verify);
                mysqli_stmt_execute($stmt2);

               

                     header("Location: ../comfirm.php");
            }

            else {
                header("location: ../verification_code.php?error=invalid_code");
                  exit();
            }

            mysqli_stmt_close($stmt);
       
    }
    
     function security($conn, $security) {
            $sql = "SELECT * FROM user WHERE otp = ?;";

            // $stmt = mysqli_stmt_init($conn);

            // if(!mysqli_stmt_prepare($stmt, $sql)) {
            //      header("location: ../assot/BB-security.php?error=connectionerror");
            //            exit();
            // }
            // mysqli_stmt_bind_param($stmt, "s", $security);
            // mysqli_stmt_execute($stmt);

            // $resultData = mysqli_stmt_get_result($stmt);

            // if($row = mysqli_fetch_assoc($resultData)) 
   
            $userquery = $conn->query("SELECT * FROM user WHERE otp='$security' ");
            while($row = mysqli_fetch_array($userquery)){
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['last_login'] = $row['last_login'];
                $_SESSION['msg'] = $row['msg'];
                $_SESSION["first_name"] = $row['first_name'];
                $_SESSION["last_name"] = $row['last_name'];
                // die($_SESSION['id']);
               

                $current_time = strtotime("now");
                $date = date("jS M, Y h:ia", $current_time);

                $last_enter = "UPDATE user SET last_login='$date' WHERE id=$_SESSION[id]";
                // die($_SESSION['id']);
                if(mysqli_query($conn, $last_enter)) {
                       header("Location: ../BB-account/account.php");
                          exit();
                }
                
               
            // }

            else {
                header("location: ../assot/BB-security.php?error=invalid_code");
                  exit();
            }

            // mysqli_stmt_close($stmt);
       
    }
}
    
     function uidExists($conn, $email) {
       $sql = "SELECT * FROM user WHERE email = ?;";
       
       $stmt = mysqli_stmt_init($conn);
       
       if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../BB-register.php?error=connectionerror");
                  exit();
       }
    //    mysqli_stmt_bind_param($stmt, "s", $email);
    //    mysqli_stmt_execute($stmt);
       
    //    $resultData = mysqli_stmt_get_result($stmt);
       
    //    if($row = mysqli_fetch_assoc($resultData))
    $userquery = $conn->query("SELECT * FROM user WHERE email = '$email' ");
    if($row = mysqli_fetch_array($userquery))
       {
           return $row;
       }
       
       else {
           $result = false;
           return $result;
       }
       
       mysqli_stmt_close($stmt);
       
    }
    
    
    function uidAdminExists($conn, $admin_username, $admin_password) {
       $sql = "SELECT * FROM admin WHERE admin_name = ? AND admin_password = ?;";
       
       $stmt = mysqli_stmt_init($conn);
       
       if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../admin/admin_login.php?error=connectionerror");
                  exit();
       }
       mysqli_stmt_bind_param($stmt, "ss", $admin_username, $admin_password);
       mysqli_stmt_execute($stmt);
       
      $resultData = mysqli_stmt_get_result($stmt);
       
    //    if($row = mysqli_fetch_assoc($resultData))
       if($row = mysqli_stmt_prepare($stmt, $sql)) {
           return $row;
       }
       
       else {
           $result = false;
           return $result;
       }
       
       mysqli_stmt_close($stmt);
       
    }
    
     function loginAdmin($conn, $admin_username, $admin_password) {
        $uidAdminExists = uidAdminExists($conn, $admin_username, $admin_password);
        
        
        if($uidAdminExists === false) {
             header("location: ../admin/admin_login.php?error=invalidlogins");
             exit();
        }
        
           
        $sql = "SELECT * FROM admin WHERE admin_name = ? AND admin_password = ?;";

            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)) {
                 header("location: ../admin/admin_login.php?error=connectionerror");
                       exit();
            }
            // mysqli_stmt_bind_param($stmt, "ss", $admin_username, $admin_password);
            // mysqli_stmt_execute($stmt);

            // $resultData = mysqli_stmt_get_result($stmt);

            // if($row = mysqli_fetch_assoc($resultData)) 
            $userquery = $conn->query("SELECT * FROM admin WHERE admin_name = '$admin_username' AND admin_password = '$admin_password' ");
            if($row = mysqli_fetch_array($userquery)){
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['admin_name'] = $row['admin_name'];
                $_SESSION['admin_password'] = $row['admin_password'];
                
                header("Location: ../admin/admin_cpanel.php");
            }

            else {
                header("location: ../admin/admin_login.php?error=invalidlogins");
                  exit();
            }
       
    }
    
        function loginUser($conn, $email, $psw) {
        $uidExists = uidExists($conn, $email, $psw);
        
        if($uidExists === false) {
             header("location: ../assot/BB-login.php?error=wrongdetails");
                  exit();
        }
        
        else {
            session_start();
            $psw_token = "0123456789";
            $psw_token = str_shuffle($psw_token);
            $get_otp = substr($psw_token, 0, 6);

            $sql3 = "UPDATE user SET otp='$get_otp' WHERE email= ? ";
               $stmt3 = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt3, $sql3)) {
                     header("location: ../assot/BB-security.php?error=connectionerror");
                           exit();
                }
                mysqli_stmt_bind_param($stmt3, "s", $email);
                mysqli_stmt_execute($stmt3);
                
                // $resultData = mysqli_stmt_get_result($stmt3);
       
//       if($row = mysqli_fetch_assoc($resultData)) {
//           return $row;
//       }
//       
//       else {
//           $result = false;
//           return $result;
//       }
//       
//       mysqli_stmt_close($stmt);

             require_once '../assot-otpMail.php';

                            //send Email
             mailClient($get_otp,$email);

            header("Location: ../assot/BB-security.php?email=".$email);
            //   header("location: ../assot/BB-security.php");
                  exit();
        }
    }
    
      function createUser($conn, $first_name, $last_name, $sex, $email, $country, $username, $psw, $phone_no, $referral, $account_type, $wallet_balance, $date, $complete_signup, $account_status) {
      
        //   $sql = "INSERT INTO user (first_name, last_name, sex, email, country, username, psw, phone_no, referral, account_type, wallet_balance, date, sign, account_status) VALUES('$first_name', '$last_name', '$sex', '$email', '$country', '$username', '$psw', '$phone_no', '$referral', '$account_type', '$wallet_balance', '$date', '$complete_signup', '$account_status')";
        
         $sql = "INSERT INTO user (first_name, last_name, sex, email, country, username, psw, phone_no, referral, account_type, wallet_balance, date, sign, account_status) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
       
       
        $stmt = mysqli_stmt_init($conn);
       
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../assot/BB-register.php?error=statmentfailed");
                  exit();
        }
       
//$hashedPwd = password_hash($psw, PASSWORD_DEFAULT);
                   
       
       
        // mysqli_stmt_bind_param($stmt, "ssssssssssssss", $first_name, $last_name, $sex, $email, $country, $username, $psw, $phone_no, $referral, $account_type, $wallet_balance, $date, $complete_signup, $account_status);
        // mysqli_stmt_execute($stmt);
        // mysqli_stmt_close($stmt);
        $sql;
         require_once '../assot-registerMail.php';
         
         //send Email
         $mailreturn = mailClient($first_name, $last_name, $email, $complete_signup);
        
        if($mailreturn=='success') {
            echo header("location: ../assot/verification_code.php");
            exit();
     } 
       
     
       
    
       
    }
    ?>

