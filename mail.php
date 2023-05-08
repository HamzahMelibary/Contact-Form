<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <script src="/src/file.js"></script>
  <title>contact form</title>
</head>

<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != '') {
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $from = 'info@amalibary-establishment.sa';
      $customerSubject = "Thank you for contacting us";

      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
  // Create email headers
    $headers .= 'From: '.$from."\r\n".
    'Reply-To: '."reply@amalibary-establishment.sa"."\r\n" .
    'X-Mailer: PHP/' . phpversion();
  
      $recipient = "hamzah@pace.sa";
      $recipient2 = $email;
      $body = "";
  
      $body .= "From: ".$name. "<br>";
      $body .= "Email: ".$email. "<br>";
      $body .= "Subject: ".$subject. "<br>";
      $body .= "Message: ".$message. "<br>";

  
      mail($recipient, $subject, $body, $headers)
      or die("Error!");
      mail($recipient2, $customerSubject, $body, $headers)
      or die("Error!");

      $message_sent = true;
    }
  }
  
?>

<body>

<?php 
if($message_sent):
?>

<div class="flex flex-col justify-center text-white items-center mx-auto bg-gradient-to-r from-black-light from-60% to-gray min-h-screen min-w-screen">
        <img src="/src/img/check.png" width="150px" alt="">
        <h1 class=" p-3 text-3xl">Thank you for contact us</h1>
        <p>Your submission has been received.</p>
        <button class="p-5 border  border-orange-500 w-1/4 mx-auto mt-5 hover:bg-gradient-to-r hover:from-orange-500 hover:to-orange-           800"><a href="/index.html">Back to Contact form page</a></button>
        </div>

<?php
esle:
?>

<?php
endif;
?>