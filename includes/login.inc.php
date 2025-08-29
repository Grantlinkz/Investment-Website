<?php

    if(isset($_POST["submit"])) {
        $email = trim($_POST["email"]);
        $psw = trim($_POST["psw"]);
        
        require_once "dbh.inc.php";
        require_once "functions.inc.php";
            
   if (invalidEmail($email) !== false) {
                  header("location: ../assot/BB-login.php?error=invalidemail");
                  exit();
            }
        loginUser($conn, $email, $psw);
    }
    
         else {
          header("location: ../assot/BB-login.php");
                  exit();
         }

