<?php
    function mailClient($get_otp,$username){
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
        $mail->addAddress($username);
        $mail->isHTML(true);
        $mail->Subject = 'Swiftcotradefx';
        $mail->Body =  "$get_otp is your OTP Code";
                
                
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