<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != '') {
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $from = 'info2@amalibary-establishment.sa';

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
      $body .= "Message: ".$message. "<br>";
  
      mail($recipient, $subject, $body, $headers)
      or die("Error!");
      mail($recipient2, $subject, $body, $headers)
      or die("Error!");

      $message_sent = true;
    }
  }
  
?>

<body>

<?php 
if($message_sent):
?>
    <div>
    <h1 style="font-size:30px">Thank you for contact us</h1>
    <button><a href="/index.html">Back to Contact form page</a></button>
    </div>
<?php
esle:
?>

<?php
endif;
?>