<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $subject = $_POST['phone'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "awart_d@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.html");
}


 ?>