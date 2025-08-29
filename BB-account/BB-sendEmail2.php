<?php
//  require_once '../includes/dbh.inc.php';
    function mailClient($name,$withdraw_amt_btc,$email){
            require '../PHPMailer/PHPMailerAutoload.php';
            include '../includes/dbh.inc.php';

            $to = "support@Swiftcotradefx.com";
            $subject = 'Request for withdrawal via bitcoin';
            $msg = "$name with the email address $email is requesting to make withdrawal of $withdraw_amt_btc via bitcoin payment through this wallet address provided $btc_address";
            $headers = "From: $email";

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
            $mail->Header = $headers;
            // $mail->Subject = 'WITHDRAWAL REQUEST APPROVAL';
            $mail->Subject = $subject;
            // $mail->Body =  "Hello $name;!
            $mail->Body =  "Hello $msg;!
                   <br>
                    <h1 style='color: #fff !important; background:  #FF9899; padding: 5px; text-align: center'>Swiftcotradefx</h1>
                    <br>
                    Your request to withdrawal $$withdraw_amt_btc from your  investment Account has been received.
                    <br><br>
                    Thank you for Trusting us with your  investment.
                    <br><br>
                    Regards,
                    <br>
                   Swiftcotradefx.com
                    <br>
                    <br>
                    This is an automated response, please do not reply this message.
                    
                     <br>
                    <hr>
                    <br>
                    <p style='text-align: center'>Email: support@Swiftcotradefx.com</p>
                      
                    <br>";
                
                
        if(!$mail->send()){
            
            // $error=$mail->ErrorInfo;
            // echo $error;
            return "success";
        }  else {
            // echo 'success';
            return "success";
        }               
        
    }

