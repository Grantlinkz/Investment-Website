<?php
     if(isset($_POST['submit'])) {
        $security = $_POST['security'];
            
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
        
//        if (emptyInputSignup($first_name, $last_name, $sex, $email, $country, $username, $psw, $re_psw, $phone_no, $referral, $account_type,) !== false) {
//                  header("location: ../assot/BB-register.php?error=emptyinputfield");
//                  exit();
//            }
             if (invalidUid($security) !== false) {
                  header("location: ../assot/BB-security.php?error=invalidcode");
                  exit();
            }
            security($conn, $security);
            header("location: ../BB-account/account.php");
        
              }
        
        else {
            header("location: ../assot/BB-login.php");
            exit();
        }
            
     


