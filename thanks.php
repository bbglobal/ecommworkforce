<?php

//Load Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 

require("admin/conn.php");
if (isset($_GET['contact'])) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'ecommboosters.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'info@ecommworkforce.com';                     //SMTP username
        $mail->Password   = 'EcommwF@321.';                               //SMTP password
        $mail->SMTPSecure =  'ssl';   //Enable implicit TLS encryption
        $mail->Port       = 465;    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('info@ecommworkforce.com', 'EWF');
        $mail->addAddress('info@ecommworkforce.com', 'EcommWorkForce');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "{$_GET['subject']}";
        $mail->Body    = "Dear {$_GET['name']}, <br/> {$_GET['email']}, <br/> {$_GET['comment']}";

        $mail->AltBody = "Dear {$_GET['name']}, <br/> {$_GET['email']}, <br/> {$_GET['comment']}";

        $mail->send();
        $sent = "Success";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else if (isset($_GET['demo'])) {



    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'ecommboosters.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'info@ecommworkforce.com';                     //SMTP username
        $mail->Password   = 'EcommwF@321.';                               //SMTP password
        $mail->SMTPSecure =  'ssl';   //Enable implicit TLS encryption
        $mail->Port       = 465;    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('info@ecommworkforce.com', 'EWF');
        $mail->addAddress('info@ecommworkforce.com', 'EcommWorkForce');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Demo";
        $mail->Body    = "Dear {$_GET['name']}, <br/> {$_GET['email']}";

        $mail->AltBody = "Dear {$_GET['name']}, <br/> {$_GET['email']}";

        $mail->send();
        $sent = "Success";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>EcommWrokForce - Thanks</title>
</head>

<body>

    <style>
        * {
            box-sizing: border-box;
            /* outline:1px solid ;*/
        }

        body {
            background: #ffffff;
            background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e1e8ed', GradientType=0);
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }

        .wrapper-1 {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .wrapper-2 {
            padding: 30px;
            text-align: center;
        }

        h1 {
            font-family: 'Kaushan Script', cursive;
            font-size: 4em;
            letter-spacing: 3px;
            color: #fd8600;
            margin: 0;
            margin-bottom: 20px;
        }

        .wrapper-2 p {
            margin: 0;
            font-size: 1.3em;
            color: #aaa;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .go-home {
            color: #fff;
            background: #fd8600;
            border: none;
            padding: 10px 50px;
            margin: 30px 0;
            border-radius: 30px;
            text-transform: capitalize;
            box-shadow: 0 0 5px 0 #fd870033, 0 5px 10px 0 #fd860033, 0 10px 20px 0 #fd860033, 0 20px 40px 0 #fd86001a;
        }

        .footer-like {
            margin-top: auto;
            background: #D7E6FE;
            padding: 6px;
            text-align: center;
        }

        .footer-like p {
            margin: 0;
            padding: 4px;
            color: #fd8600;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .footer-like p a {
            text-decoration: none;
            color: #fd8600;
            font-weight: 600;
        }

        @media (min-width:360px) {
            h1 {
                font-size: 4.5em;
            }

            .go-home {
                margin-bottom: 20px;
            }
        }

        @media (min-width:600px) {
            .content {
                max-width: 1000px;
                margin: 0 auto;
            }

            .wrapper-1 {
                height: initial;
                max-width: 620px;
                margin: 0 auto;
                margin-top: 50px;
                box-shadow: 0 0 5px 0 #fd870033, 0 5px 10px 0 #fd860033, 0 10px 20px 0 #fd860033, 0 20px 40px 0 #fd86001a;
            }

        }
    </style>
    <div class=content>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <h1>Thank you !</h1>
                <p>Thanks for choosing us. </p>
                <p>Our Team Expert will contact you soon.</p>
                <a href="index.php">
                    <button class="go-home">
                        go home
                    </button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>