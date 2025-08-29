<?php
    function mailClient($first_name,$last_name,$email,$complete_signup){
            require 'PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email';
        $mail->SMTPAuth = true;
        $mail->Username = 'spec05264362_Swiftcotradefx';
        $mail->Password = 'admin@2022';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('noreply@Swiftcotradefx.com', 'noreply@Swiftcotradefx.com');
        $mail->addReplyTo('support@Swiftcotradefx.com', '');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Swiftcotradefx';
        $mail->Body =  "Hello ". $first_name.",
                    <br>
                    <h1 style='color: #fff !important; background: #be1558; padding: 5px; text-align: center'>Welcome to Swiftcotradefx</h1>
                    <br>
                    <p style='text-align: center'>Thank you for joining our community and signing up with the most flexible cryptocurrency company</p>
                    <p>You can get started by signing in your account from the website on your browser.
                    <hr>
                    <p style='text-align:center'>
                    Kindly note: Please be aware of phishing sites and always make sure you are visiting the official <a href='https://Swiftcotradefx.com'>Swiftcotradefx.com</a> website when entering sensitive data.
                    <hr>
              
            
                   ";
                
                
        if(!$mail->send()){
            
            // $error=$mail->ErrorInfo;
            // echo $error;
            return "success";
        }  else {
            // echo 'success';
            return "success";
        }               
        
    }


?>