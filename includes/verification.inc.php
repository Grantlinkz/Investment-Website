<?php
     if(isset($_POST['submit'])) {
        $verify = $_POST['verify'];
            
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
        
//        if (emptyInputSignup($first_name, $last_name, $sex, $email, $country, $username, $psw, $re_psw, $phone_no, $referral, $account_type,) !== false) {
//                  header("location: ../assot/BB-register.php?error=emptyinputfield");
//                  exit();
//            }
             if (invalidUid($verify) !== false) {
                  header("location: ../assot/verification_code.php?error=invalidcode");
                  exit();
            }
            verification($conn, $verify);
            header("location: ../comfirm.php");
        
              }
        
        else {
            header("location: ../assot/BB-login.php");
            exit();
        }
            
     


