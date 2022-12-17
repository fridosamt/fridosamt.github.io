<?php

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];

  function filter_email_header($form_field) {
  return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
  }

  $email = filter_email_header($email);

 $mailTo = "fridolin.samtleben@posteo.de";
 $headers = "From: $email";
 $txt = "You have received an email from ".$name.".\n\n".$subject;


  $sent = mail($mailTo, $txt, $headers);


  if ($sent) {

?><html>
<head>
<title>thank you</title>
</head>
<body>
<h1>thank you</h1>
<p>thank you for your feedback!</p>
</body>
</html>

<?php

} else {
?><html>
<head>
<title>something went wrong</title>
</head>
<body>
<h1>something went wrong</h1>
<p>could not send your feedback. please try again.</p>
</body>
</html>
<?php
}
?>



 ?>
