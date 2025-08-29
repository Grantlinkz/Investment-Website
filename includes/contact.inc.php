<?php

    if(isset($_POST["submit"])) {       
        echo        $contact_question = $_POST['topic'];
                $contact_name = $_POST['name'];
                $contact_email = $_POST['email'];
                $contact_message = $_POST['message'];

                $s_contact_name = filter_var($contact_name, FILTER_SANITIZE_STRING);
                $s_contact_email = filter_var($contact_email, FILTER_SANITIZE_EMAIL);
                $s_contact_message = filter_var($contact_message, FILTER_SANITIZE_STRING);

               $subject = contact_question;
               $message = $s_contact_message;
               $to = "contactform@Swiftcotradefx.com";
               $headers = "MIME-Version: 1.0" . "\r\n";
               $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
               $headers .= 'From: ' .$s_contact_name . "\r\n";

               if(mail($to, $subject, $message, $headers))  {
                   header("location: ../mail-sent.html");
                   exit();
         }
         else {
              header("location: ../BB/index.php");
                   exit();
         }    
                                 }
 

