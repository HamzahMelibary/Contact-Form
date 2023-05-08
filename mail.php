<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != '') {
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
  
      $recipient = "hamzah@pace.sa";
      $mailHeader = "";
  
      $mailHeader .= "From: ".$name. "\r\n";
      $mailHeader .= "Email: ".$email. "\r\n";
      $mailHeader .= "Message: ".$message. "\r\n";
  
      mail($recipient, $subject, $message, $name, $email, $mailHeader)
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