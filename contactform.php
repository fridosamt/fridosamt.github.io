<?php

if (isset($_POST["submit"])) {
  $fname = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];

 $mailTo = "fridolin.samtleben@posteo.de";
 $headers = "From: ".$email;
 $txt = "You have received an email from ".$fname.".\n\n".$subject;

  mail($mailTo, $txt, $headers);
  header("Location: index.php?mailsend");
}


 ?>
