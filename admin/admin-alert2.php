<?php
    function mailClient($first_name,$amount,$payment,$email){
            require '../PHPMailer/PHPMailerAutoload.php';
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
        $mail->Subject = $payment.' Approval';
        $mail->Body =  "Hello!". $first_name."!
                   <br>
                    <h1 style='color: #fff !important; background:  #FF9899; padding: 5px; text-align: center'>Swiftcotradefx</h1>
                    <br>
                    $$amount has been credited into your Swiftcotradefx Account as payment for $payment.
                   Kindly login to your account to view your transaction!.
                    <br>
                    Thank you for Trusting us.
                    <br>
                    Regards,
                    Swiftcotradefx
                    <br>
                    <br>
                    This is an automated response, please do not reply this message.
                     <br>
                    <hr>
                    <br>
                    <p style='text-align: center'>Email: support@Swiftcotradefx.com</p>
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