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
  
  
      mail($recipient, $subject, $message, $mailHeader)
      or die("Error!");

      $message_sent = true;
    }
  }
  
?>

<body>


<?php 
if($message_sent):
?>
    <div class="text-white text-3xl mx-auto">
    <h1 class="">Thank you for contact us</h1>
    <button><a href="/index.html">Back to Contact form page</a></button>
    </div>
<?php
esle:
?>

<form action="mail.php" method="POST">
    <div class="flex md:flex-row flex-col justify-center items-center md:w-2/3 mx-auto h-1/2 min-w-screen min-h-screen">
      <div class="bg-gray p-10 text-white w-full h-[500px] md:rounded-l-lg">
        <h1 class="text-2xl">Write us</h1>

        <div class="text-zinc-400 flex flex-col">
          <label for="" class="pt-4">Name</label>
          <input type="text" name="name" required class="bg-transparent border-b-2 border-zinc-600 focus:outline-none w-full">

          <label for="" class="pt-4">Email</label>
          <input type="email" name="email" required class="bg-transparent border-b-2 border-zinc-600 focus:outline-none w-full">

          <label for="" class="pt-4">Subject</label>
          <input type="text" name="subject" required class="bg-transparent border-b-2 border-zinc-600 focus:outline-none w-full">

          <label for="" class="pt-4">Message</label>
          <input type="textarea" name="message" required class="bg-transparent border-b-2 border-zinc-600 focus:outline-none w-full">

          <input type="submit" value="Send" class="p-5 border text-white border-orange-500 w-1/2 mx-auto mt-5 hover:bg-gradient-to-r hover:from-orange-500 hover:to-orange-800">
        </div>
      </div>


<?php
endif;
?>