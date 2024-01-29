<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/Exception.php";
require "phpmailer/src/SMTP.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

    $custommsg = "
    <html>
    <head>
    <style>
        div {
            background-color: blue;
            color: white;
            padding: 30px;
            border-radius: 8px;
        }
        .message{
            color: yellow;
        }
        h3{
            text-align: center;
        }
    </style>
    </head>
    <body>
    <div>
        <h3>EL-NUR</h3>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, quas unde aliquam explicabo nemo libero nisi consectetur ea enim illum.
        </p>
        <p class='message'>$message</p>
        <p>Best regards,</p>
        <p>Techienuru</p>
    </div>
    </body>
    
    </html>
    ";


    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "ibrahimnurudeenshehu1447@gmail.com"; //SMTP Username
    $mail->Password = "tbmbznxctivbddye"; //Your gmail app password
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->setFrom("$email"); //Gmail of sender and name of sender
    $mail->addReplyTo($email); //Gmail of sender and name of sender
    $mail->addAddress("ibrahimnurudeenshehu1447@gmail.com");// REciever of the gmail
    $mail->isHTML(true);
    $mail->Subject = $subject; //Subject of the message
    $mail->Body = $custommsg; //Message to send
    $result = $mail->send();

    if ($result) {
        header("location:email-outcome.php");
        die();
    } else {
        echo "
            <script>
                window.alert('Email not sent');
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./PHP logo.png" type="image/x-icon">
    <title>Send Email</title>
    <style>
        body {
            background-color: blue;
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 100vh;
            min-height: 100vh;
        }

        .wrapper {
            background-color: white;
            padding: 50px;
        }

        .wrapper>h1 {
            text-align: center;
        }

        .wrapper>form>input,
        textarea {
            display: block;
            width: 100%;
            margin: 0px 0px 20px 0px;
            padding: 10px;
        }

        .wrapper>form>input[type="submit"] {
            width: auto;
            padding: 8px;
            margin: 20px 0 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>CONTACT US</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="email" name="email" placeholder="Your email....">
            <input type="text" name="subject" placeholder="Subject.....">
            <textarea name="message" placeholder="Your message..." cols="50" rows="10"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
</body>

</html>