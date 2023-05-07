<?php
    $name = $$_POST["name"];
    $email = $$_POST["email"];
    $subject = $$_POST["subject"];
    $recipient = "mr.hamzh@hotmail.com";
    $mailHeader = "From: " . $name . 
    "\r\n Email: " . $email .
    "\r\n subject: " . $subject . "\r\n";

    mail($recipient, $subject, $message, $mailHeader)
    or die("Error!");

  echo'
  <!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <script src="/src/file.js"></script>
  <title>contact form</title>
</head>

<body class="bg-gradient-to-r from-orange-500 from-60% to-orange-800">
<h1 class="text-white text-3xl mx-auto">Thank you for contact us</h1>
<button><a href="/src/index.html">Back to Contact form page</a></button>
</body>
</html>';
?>