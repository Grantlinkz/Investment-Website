<?php

    if(isset($_POST["submit"])) {
        $admin_username = $_POST["admin_name"];
        $admin_password = $_POST["admin_password"];
        
        require_once "dbh.inc.php";
        require_once "functions.inc.php";
            
   if (invalidAdmin($admin_username) !== false) {
                  header("location: ../admin/admin_login.php?error=invalidName");
                  exit();
            }
        loginAdmin($conn, $admin_username, $admin_password);
         header("location: ../admin/admin_cpanel.php");
    }
    
         else {
          header("location: ../admin/admin_login.php");
                  exit();
         }
