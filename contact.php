<?php
if (isset($_POST["submit"])){
  $name = ($_POST["name"]);
  $emailFrom = ($_POST["email"]);
  $phone = ($_POST["phone"]);
  $message = ($_POST["message"]);

  $emailTo = "thorhenry20@gmail.com";
  $headers = "From: ".$email;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($emailTo, $phone, $txt, $headers);
  header("Location: index.html?mailsend");
 
}