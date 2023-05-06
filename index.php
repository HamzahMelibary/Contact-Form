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
    <?php
        if(!empty($_POST["send"])) {
            $name = $$_POST["name"];
            $email = $$_POST["email"];
            $subject = $$_POST["subject"];
            $toEmail = "mr.hamzh@hotmail.com";
            $mailHeaders = "Name: " . $name . 
            "\r\n Email: " . $email .
            "\r\n subject: " . $subject . "\r\n";

            if(mail($toEmail, $name, $mailHeaders)) {
                $message = "Your information is Received Successfuly.";
            }
        }

?>



  <form action="emailContact" method="post">
    <div class="flex md:flex-row flex-col justify-center items-center md:w-2/3 mx-auto h-1/2 min-w-screen min-h-screen">
      <div class="bg-gray p-10 text-white w-full h-[500px] md:rounded-l-lg">
        <h1 class="text-2xl">Write us</h1>

        <div class="text-zinc-400 flex flex-col">
          <label for="" class="pt-4">Name</label>
          <input type="text" name="name" required class="bg-transparent border-b-2 border-zinc-600 focus:outline-none w-full">

          <label for="" class="pt-4">Email</label>
          <input type="email" name="email" required class="bg-transparent border-b-2 border-zinc-600 focus:outline-none w-full">

          <label for="" class="pt-4">Subject</label>
          <input type="textarea" name="subject" required class="bg-transparent border-b-2 border-zinc-600 focus:outline-none w-full">

          <input type="submit" name="send" value="submit" class="p-5 border text-white border-orange-500 w-1/2 mx-auto mt-5 hover:bg-gradient-to-r hover:from-orange-500 hover:to-orange-800">
          <?php if(!empty($message)){  ?>
            <div><?php echo $message; ?></div>
            <?php } ?>

        </div>
      </div>



      <div class="bg-black p-10 text-white w-full h-[500px] md:rounded-r-lg">
        <h1>Contact information</h1>

        <div class="text-sm">
          <p class="text-zinc-500	py-4">We're open for any suggestion or just have a chat</p>

          <div class="flex items-center py-4">
            <img src="/src/img/map.png" alt=""
              class="w-[40px] border-[13px]  border-black-light rounded-full bg-black-light">
            <p class="ml-4">address</p>
          </div>


          <div class="flex items-center py-4">
            <img src="/src/img/map.png" alt=""
              class="w-[40px] border-[13px]  border-black-light rounded-full bg-black-light">
            <p class="ml-4">phone</p>
          </div>


          <div class="flex items-center py-4">
            <img src="/src/img/map.png" alt=""
              class="w-[40px] border-[13px]  border-black-light rounded-full bg-black-light">
            <p class="ml-4">email</p>
          </div>

          <div class="flex items-center py-4">
            <img src="/src/img/map.png" alt=""
              class="w-[40px] border-[13px]  border-black-light rounded-full bg-black-light">
            <p class="ml-4">subject</p>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>

</html>