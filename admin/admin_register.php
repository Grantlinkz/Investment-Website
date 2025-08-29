<?php
setcookie("user", "user-login", time() + 3600, "/", "Swiftcotradefx.com", true, true);
header('Content-Type: text/html; charset=utf-8'); 
    include_once '../includes/dbh.inc.php';
    session_start();
    ob_start();
    
     if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
    
    if(isset($_GET['ref'])) {
        $username = $_GET['ref'];
    }
    else {
        $username = "";
    }
    

?>

<?php header('Content-Type: text/html; charset=utf-8'); ?> <!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="UTF-8">
<!--        <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <title>Sign Up |</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        
        <!-- CSS -->
        <link href="../css/stylesheet.css" rel="stylesheet" type="text/css"/>
        <link href="../fontawesome/css/all.css" rel="stylesheet" type="text/css"/>
        <script defer src="../fontawesome/js/all.js" type="text/javascript"></script>
        <script defer src="../fontawesome/js/brands.js" type="text/javascript"></script>
        <script defer src="../fontawesome/js/fontawesome.js" type="text/javascript"></script>
        <script defer src="../fontawesome/js/solid.js" type="text/javascript"></script>
        
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
        <!-- jQuery library -->
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
        <script src="js/calculator.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>
        
           <style>
             .bg-light {
            background: #091b27 !important;
        }
        
        footer {
            background: #1b1b1b;
        }

        .footer p {
            font-size: 16px;
            letter-spacing: 1px;
            color: #ccc;
        }
        </style>
    </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed">
            <a href="../index.php" class="navbar-brand"><img src="../BB/assets/images/logoIcon/logo.png" style="width: 200px; height: 64px;" alt="logo"> </a>
             <a href="admin_cpanel.php" style="color:white; text-decoration: none;">
                <i class="fas fa-home"></i> 
                <span  style="text-decoration: underline;">ADMIN SECTION</span>
            </a>
        </nav>
        <!-- first section  -->
       <section class="container-fluid sign-up-bg" style="margin-top: 0;">
        <div class="col-lg-5 col-md-12 col-form">

            <center>
                <a href="index.php"><img src="../BB/assets/images/logoIcon/logo.png" style="width: 200px;"></a>
            </center>


            <!-- ==================================this is the form section of the signup section ============================ -->
            <form class="form-main-sec" method="POST" action="" onsubmit="return validate()">
                         <?php
                if(isset($_POST['submit-info'])) {
    
                $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
                $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
                $sex = mysqli_real_escape_string($conn, $_POST['sex']);
                $email = mysqli_real_escape_string($conn, $_POST['email']); 
                $country = mysqli_real_escape_string($conn, $_POST['country']); 
                $username = mysqli_real_escape_string($conn, $_POST['username']); 
                $psw = mysqli_real_escape_string($conn, $_POST['psw']);
                $re_psw = mysqli_real_escape_string($conn, $_POST['re_psw']);
                $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']); 
                $referral = mysqli_real_escape_string($conn, $_POST['referral']);
                $account_type = mysqli_real_escape_string($conn, $_POST['account_type']);
                $btc_address = mysqli_real_escape_string($conn, $_POST['btc_address']);
                $current_time = strtotime("now");
                $date = date("jS M, Y h:ia", $current_time);
                $wallet_balance = 0.00;
                $email_verified = 1;

   $sql = "INSERT INTO user (first_name, last_name, sex, email, country, username, psw, re_psw, phone_no, referral, account_type, btc_address, wallet_balance, date_of_reg, email_verified)
    VALUES('$first_name', '$last_name', '$sex', '$email', '$country', '$username', '$psw', '$re_psw', '$phone_no', '$referral', '$account_type', '$btc_address', '$wallet_balance', '$date', '$email_verified')";
  $result = mysqli_query($conn, $sql);
    
   
    if($result) {
       echo "<center>
                    <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                            <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                            <strong> Registration Successful!</strong>
                     </div>
            </center>";
   }
   
   else {
        echo "<center>
                    <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                            <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                            <strong> Sign Up Failed!</strong>
                     </div>
            </center>";
   }
        
        
}


            ?>
        
                 <h4>CREATE AN ACCOUNT</h4>
            <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="firstname" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name: </label>
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="lastname" required>
            </div>
            <div class="form-group">
              <label for="sex">Sex: </label>
              <select class="form-control" id="sex" name="sex" required>
                   <option value="" disabled selected>--Select an option--</option>
                    <option> Male </option>
                    <option> Female </option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="country">Country: </label>
                <select name="country" size="1" class="form-control" required id="country" placeholder="Select Country" style="font-family: Montserrat, sans-serif; height: 3.25rem; border-radius: 0px;">
                  <option value="" disabled selected>--Select an option--</option>
                  <option style="font-family: Montserrat, sans-serif;">Afghanistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Albania</option> 
                  <option style="font-family: Montserrat, sans-serif;">Algeria</option> 
                  <option style="font-family: Montserrat, sans-serif;">American Samoa</option> 
                  <option style="font-family: Montserrat, sans-serif;">Andorra</option> 
                  <option style="font-family: Montserrat, sans-serif;">Angola</option> 
                  <option style="font-family: Montserrat, sans-serif;">Anguilla</option> 
                  <option style="font-family: Montserrat, sans-serif;">Antarctica</option> 
                  <option style="font-family: Montserrat, sans-serif;">Antigua and Barbuda</option> 
                  <option style="font-family: Montserrat, sans-serif;">Argentina</option> 
                  <option style="font-family: Montserrat, sans-serif;">Armenia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Aruba</option> 
                  <option style="font-family: Montserrat, sans-serif;">Australia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Austria</option> 
                  <option style="font-family: Montserrat, sans-serif;">Azerbaijan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bahamas</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bahrain</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bangladesh</option> 
                  <option style="font-family: Montserrat, sans-serif;">Barbados</option> 
                  <option style="font-family: Montserrat, sans-serif;">Belarus</option> 
                  <option style="font-family: Montserrat, sans-serif;">Belgium</option> 
                  <option style="font-family: Montserrat, sans-serif;">Belize</option> 
                  <option style="font-family: Montserrat, sans-serif;">Benin</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bermuda</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bhutan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bolivia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bosnia and Herzegowina</option> 
                  <option style="font-family: Montserrat, sans-serif;">Botswana</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bouvet Island</option> 
                  <option style="font-family: Montserrat, sans-serif;">Brazil</option> 
                  <option style="font-family: Montserrat, sans-serif;">British Indian Ocean Territory</option> 
                  <option style="font-family: Montserrat, sans-serif;">Brunei Darussalam</option> 
                  <option style="font-family: Montserrat, sans-serif;">Bulgaria</option> 
                  <option style="font-family: Montserrat, sans-serif;">Burkina Faso</option> 
                  <option style="font-family: Montserrat, sans-serif;">Burundi</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cambodia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cameroon</option> 
                  <option style="font-family: Montserrat, sans-serif;">Canada</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cape Verde</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cayman Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Central African Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">Chad</option> 
                  <option style="font-family: Montserrat, sans-serif;">Chile</option> 
                  <option style="font-family: Montserrat, sans-serif;">China</option> 
                  <option style="font-family: Montserrat, sans-serif;">Christmas Island</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cocos (Keeling) Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Colombia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Comoros</option> 
                  <option style="font-family: Montserrat, sans-serif;">Congo</option> 
                  <option style="font-family: Montserrat, sans-serif;">Congo, the Democratic Republic of the</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cook Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Costa Rica</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cote d'Ivoire</option> 
                  <option style="font-family: Montserrat, sans-serif;">Croatia (Hrvatska)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cuba</option> 
                  <option style="font-family: Montserrat, sans-serif;">Cyprus</option> 
                  <option style="font-family: Montserrat, sans-serif;">Czech Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">Denmark</option> 
                  <option style="font-family: Montserrat, sans-serif;">Djibouti</option> 
                  <option style="font-family: Montserrat, sans-serif;">Dominica</option> 
                  <option style="font-family: Montserrat, sans-serif;">Dominican Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">East Timor</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ecuador</option> 
                  <option style="font-family: Montserrat, sans-serif;">Egypt</option> 
                  <option style="font-family: Montserrat, sans-serif;">El Salvador</option> 
                  <option style="font-family: Montserrat, sans-serif;">Equatorial Guinea</option> 
                  <option style="font-family: Montserrat, sans-serif;">Eritrea</option> 
                  <option style="font-family: Montserrat, sans-serif;">Estonia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ethiopia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Falkland Islands (Malvinas)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Faroe Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Fiji</option> 
                  <option style="font-family: Montserrat, sans-serif;">Finland</option> 
                  <option style="font-family: Montserrat, sans-serif;">France</option> 
                  <option style="font-family: Montserrat, sans-serif;">France, Metropolitan</option> 
                  <option style="font-family: Montserrat, sans-serif;">French Guiana</option> 
                  <option style="font-family: Montserrat, sans-serif;">French Polynesia</option> 
                  <option style="font-family: Montserrat, sans-serif;">French Southern Territories</option> 
                  <option style="font-family: Montserrat, sans-serif;">Gabon</option> 
                  <option style="font-family: Montserrat, sans-serif;">Gambia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Georgia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Germany</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ghana</option> 
                  <option style="font-family: Montserrat, sans-serif;">Gibraltar</option> 
                  <option style="font-family: Montserrat, sans-serif;">Greece</option> 
                  <option style="font-family: Montserrat, sans-serif;">Greenland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Grenada</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guadeloupe</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guam</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guatemala</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guinea</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guinea-Bissau</option> 
                  <option style="font-family: Montserrat, sans-serif;">Guyana</option> 
                  <option style="font-family: Montserrat, sans-serif;">Haiti</option> 
                  <option style="font-family: Montserrat, sans-serif;">Heard and Mc Donald Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Holy See (Vatican City State)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Honduras</option> 
                  <option style="font-family: Montserrat, sans-serif;">Hong Kong</option> 
                  <option style="font-family: Montserrat, sans-serif;">Hungary</option> 
                  <option style="font-family: Montserrat, sans-serif;">Iceland</option> 
                  <option style="font-family: Montserrat, sans-serif;">India</option> 
                  <option style="font-family: Montserrat, sans-serif;">Indonesia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Iran (Islamic Republic of)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Iraq</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ireland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Israel</option> 
                  <option style="font-family: Montserrat, sans-serif;">Italy</option> 
                  <option style="font-family: Montserrat, sans-serif;">Jamaica</option> 
                  <option style="font-family: Montserrat, sans-serif;">Japan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Jordan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kazakhstan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kenya</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kiribati</option> 
                  <option style="font-family: Montserrat, sans-serif;">Korea, Democratic People's Republic of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Korea, Republic of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kuwait</option> 
                  <option style="font-family: Montserrat, sans-serif;">Kyrgyzstan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Lao People's Democratic Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">Latvia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Lebanon</option> 
                  <option style="font-family: Montserrat, sans-serif;">Lesotho</option> 
                  <option style="font-family: Montserrat, sans-serif;">Liberia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Libyan Arab Jamahiriya</option> 
                  <option style="font-family: Montserrat, sans-serif;">Liechtenstein</option> 
                  <option style="font-family: Montserrat, sans-serif;">Lithuania</option> 
                  <option style="font-family: Montserrat, sans-serif;">Luxembourg</option> 
                  <option style="font-family: Montserrat, sans-serif;">Macau</option> 
                  <option style="font-family: Montserrat, sans-serif;">Macedonia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Madagascar</option> 
                  <option style="font-family: Montserrat, sans-serif;">Malawi</option> 
                  <option style="font-family: Montserrat, sans-serif;">Malaysia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Maldives</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mali</option> 
                  <option style="font-family: Montserrat, sans-serif;">Malta</option> 
                  <option style="font-family: Montserrat, sans-serif;">Marshall Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Martinique</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mauritania</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mauritius</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mayotte</option> 
                   
                  <option style="font-family: Montserrat, sans-serif;">Micronesia, Federated States of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Moldova, Republic of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mexico</option><option style="font-family: Montserrat, sans-serif;">Monaco</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mongolia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Montserrat</option> 
                  <option style="font-family: Montserrat, sans-serif;">Morocco</option> 
                  <option style="font-family: Montserrat, sans-serif;">Mozambique</option> 
                  <option style="font-family: Montserrat, sans-serif;">Myanmar</option> 
                  <option style="font-family: Montserrat, sans-serif;">Namibia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Nauru</option> 
                  <option style="font-family: Montserrat, sans-serif;">Nepal</option> 
                  <option style="font-family: Montserrat, sans-serif;">Netherlands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Netherlands Antilles</option> 
                  <option style="font-family: Montserrat, sans-serif;">New Caledonia</option> 
                  <option style="font-family: Montserrat, sans-serif;">New Zealand</option> 
                  <option style="font-family: Montserrat, sans-serif;">Nicaragua</option> 
                  <option style="font-family: Montserrat, sans-serif;">Niger</option> 
                  <option style="font-family: Montserrat, sans-serif;">Nigeria</option> 
                  <option style="font-family: Montserrat, sans-serif;">Niue</option> 
                  <option style="font-family: Montserrat, sans-serif;">Norfolk Island</option> 
                  <option style="font-family: Montserrat, sans-serif;">Northern Mariana Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Norway</option> 
                  <option style="font-family: Montserrat, sans-serif;">Oman</option> 
                  <option style="font-family: Montserrat, sans-serif;">Pakistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Palau</option> 
                  <option style="font-family: Montserrat, sans-serif;">Panama</option> 
                  <option style="font-family: Montserrat, sans-serif;">Papua New Guinea</option> 
                  <option style="font-family: Montserrat, sans-serif;">Paraguay</option> 
                  <option style="font-family: Montserrat, sans-serif;">Peru</option> 
                  <option style="font-family: Montserrat, sans-serif;">Philippines</option> 
                  <option style="font-family: Montserrat, sans-serif;">Pitcairn</option> 
                  <option style="font-family: Montserrat, sans-serif;">Poland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Portugal</option> 
                  <option style="font-family: Montserrat, sans-serif;">Puerto Rico</option> 
                  <option style="font-family: Montserrat, sans-serif;">Qatar</option> 
                  <option style="font-family: Montserrat, sans-serif;">Reunion</option> 
                  <option style="font-family: Montserrat, sans-serif;">Romania</option> 
                  <option style="font-family: Montserrat, sans-serif;">Russian Federation</option> 
                  <option style="font-family: Montserrat, sans-serif;">Rwanda</option> 
                  <option style="font-family: Montserrat, sans-serif;">Saint Kitts and Nevis</option> 
                  <option style="font-family: Montserrat, sans-serif;">Saint LUCIA</option> 
                  <option style="font-family: Montserrat, sans-serif;">Saint Vincent and the Grenadines</option> 
                  <option style="font-family: Montserrat, sans-serif;">Samoa</option> 
                  <option style="font-family: Montserrat, sans-serif;">San Marino</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sao Tome and Principe</option> 
                  <option style="font-family: Montserrat, sans-serif;">Saudi Arabia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Senegal</option> 
                  <option style="font-family: Montserrat, sans-serif;">Seychelles</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sierra Leone</option> 
                  <option style="font-family: Montserrat, sans-serif;">Singapore</option> 
                  <option style="font-family: Montserrat, sans-serif;">Slovakia (Slovak Republic)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Slovenia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Solomon Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Somalia</option> 
                  <option style="font-family: Montserrat, sans-serif;">South Africa</option> 
                  <option style="font-family: Montserrat, sans-serif;">South Georgia and the South Sandwich Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Spain</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sri Lanka</option> 
                  <option style="font-family: Montserrat, sans-serif;">St. Helena</option> 
                  <option style="font-family: Montserrat, sans-serif;">St. Pierre and Miquelon</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sudan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Suriname</option> 
                  <option style="font-family: Montserrat, sans-serif;">Svalbard and Jan Mayen Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Swaziland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Sweden</option> 
                  <option style="font-family: Montserrat, sans-serif;">Switzerland</option> 
                  <option style="font-family: Montserrat, sans-serif;">Syrian Arab Republic</option> 
                  <option style="font-family: Montserrat, sans-serif;">Taiwan, Province of China</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tajikistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tanzania, United Republic of</option> 
                  <option style="font-family: Montserrat, sans-serif;">Thailand</option> 
                  <option style="font-family: Montserrat, sans-serif;">Togo</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tokelau</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tonga</option> 
                  <option style="font-family: Montserrat, sans-serif;">Trinidad and Tobago</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tunisia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Turkey</option> 
                  <option style="font-family: Montserrat, sans-serif;">Turkmenistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Turks and Caicos Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Tuvalu</option> 
                  <option style="font-family: Montserrat, sans-serif;">Uganda</option> 
                  <option style="font-family: Montserrat, sans-serif;">Ukraine</option> 
                  <option style="font-family: Montserrat, sans-serif;">United Arab Emirates</option> 
                  <option style="font-family: Montserrat, sans-serif;">United Kingdom</option> 
                  <option style="font-family: Montserrat, sans-serif;">United States</option> 
                  <option style="font-family: Montserrat, sans-serif;">United States Minor Outlying Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Uruguay</option> 
                  <option style="font-family: Montserrat, sans-serif;">Uzbekistan</option> 
                  <option style="font-family: Montserrat, sans-serif;">Vanuatu</option> 
                  <option style="font-family: Montserrat, sans-serif;">Venezuela</option> 
                  <option style="font-family: Montserrat, sans-serif;">Viet Nam</option> 
                  <option style="font-family: Montserrat, sans-serif;">Virgin Islands (British)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Virgin Islands (U.S.)</option> 
                  <option style="font-family: Montserrat, sans-serif;">Wallis and Futuna Islands</option> 
                  <option style="font-family: Montserrat, sans-serif;">Western Sahara</option> 
                  <option style="font-family: Montserrat, sans-serif;">Yemen</option> 
                  <option style="font-family: Montserrat, sans-serif;">Yugoslavia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Zambia</option> 
                  <option style="font-family: Montserrat, sans-serif;">Zimbabwe</option> 
                </select>
            </div>  
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="psw">Password:</label>
                <input type="password" class="form-control" id="psw" name="psw" placeholder="password" required>
                <div id="msg2" style="color: red;"></div>
            </div>
            <div class="form-group">
                <label for="psw">Re-Password:</label>
                <input type="password" class="form-control" id="re_psw" name="re_psw" placeholder="re-enter password" required>
                 <div id="msg" style="color: red;" class="mb-3"></div>
                            <script>
                                     var msg = document.getElementById('msg');
                                                                        var new_psw = document.getElementById('psw');
                                                                        var renew_psw = document.getElementById('re_psw');

                                                                        function validate() {
                                                                            if(new_psw.value.length < 6) {
                                                                             msg2.innerHTML = "<div> password must be more than 6 characters </div>";
                                                                             return false;
                                                                            }
                                                                         if(new_psw.value !== re_psw.value) {
                                                                             msg.innerHTML = "<div> password mis-matched </div>";
                                                                             return false;
                                                                         }
                                                                 }
                                                            </script>
            </div>
            <div class="form-group">
                <label for="psw">Phone Number:</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="phone number" required>
                 <small class="form-text text-muted">Enter country code before phone number</small>
            </div>
            <div class="form-group">
              <label for="refer_by">Referral: </label>
              <input type="text" class="form-control" id="referral" name="referral" placeholder="Refer by" value="<?php echo $username; ?>">
              <small class="form-text text-muted">Not Compulsory</small>
            </div>
            <div class="form-group">
              <span> Account type</span>
                <select class="form-control" name="account_type" id="account_type" required>
                    <option value="" disabled selected>--Select an option--</option>
                    <option> Bronze </option>
                    <option> Silver </option>
                    <option> Gold </option>
                    <option> Diamond</option>
                </select>  
            </div>
          <div class="form-group">
                <label for="psw">WALLET ADDRESS:</label>
                <input type="text" class="form-control" id="btc_address" name="btc_address" placeholder="Enter Wallet Address" required>
<!--                 <small class="form-text text-muted">Enter country code before phone number</small>-->
            </div>
             <center>
                 <button type="submit" class="btn btn-primary btn-submit" id="submit" name="submit-info">Submit</button>
             </center>
            </form>
            
        </div>
        <!-- end col -->
           
       </section>
       <!-- end main section  -->
       <!-- two column section for the signup page in the address -->
       <div style=" padding: 20px; "></div>
       <script>
          /*
           var psw = document.getElementById('psw');
           var re_psw = document.getElementById('re_psw');
           
           function validate() {
            if(psw.value !== re_psw.value) {
                alert('password mismatched');
                return false;
            }
    }
        
          $(document).ready(function(){
            $('#submit').click(function(event){
              event.preventDefault(); // this line of code will stop the action from working in the form

              
              //getting the values from the forms using thier id's
              var first_name = $('#first_name').val();
              var last_name = $('#last_name').val();
              var sex = $('#sex').val();
              var email =  $('#email').val();
              var country = $('#country').val();
              var username=  $('#username').val();
              var psw=  $('#psw').val();
              var re_psw = $('#re_psw').val();
              var phone_no = $('#phone_no').val();
              var referral = $('#referral').val();
              var account_type = $('#account_type').val();
             

              //checking for empty fields
              if(!first_name || !last_name|| !sex || !email || !country  || !username || !psw || !re_psw || !phone_no || !referral || !account_type){
                swal({
                  text: "Please fill all fields",
                  icon: "error"
                }); //this is the end of the swal icon 
              }
              
              else if(psw != re_psw) {
                  
              }
         /*     
        else{

                $.ajax({
                  type: "POST",
                  url: "../includes/signup.inc.php",
                  data: {first_name: first_name, last_name: last_name, sex: sex, email: email, country: country, username: username, psw: psw, re_psw: re_psw, phone_no: phone_no, referral: referral, account_type: account_type},
                  success: function(data,request,setting){
                    swal({
                      text: data,
                    });
                    $('#message').hide();

                    $('#submit').prop('disabled',true); //this code will make sure that the user is not able to click the submit button more than once.

                  },
                  beforeSend: function(data, request,settings){
                    $('#message').html('<img src="../images/loading.gif" /> ');
                  } //end of beofre send section
                }); //end of ajax main code

              } //this is the end of the if validating if the flieds is empty


                

             });//this is the end of the submit function
              
            });// this the end of the jquery main function 
            */
           
       </script>

    