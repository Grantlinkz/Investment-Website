<?php

    if(isset($_POST["submit"])) {
        $email = $_POST["email"];
        
        require_once "dbh.inc.php";
        require_once "functions.inc.php";
            
     if (invalidEmail($email) !== false) {
                  header("location: ../fpass.php?error=invalidemail");
                  exit();
            }
              forget_pass($conn, $email);
    }
    
         else {
          header("location: ../fpass.php");
                  exit();
         }

