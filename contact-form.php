<?php

$to      = "jlynn521@aol.com";
$subject = "New Contact Form Submission";
$message = Trim(stripslashes($_POST['Message']));
$from    = Trim(stripslashes($_POST['Email']));
$name    = Trim(stripslashes($_POST['Name']));

$validationOK = true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

$body  = "";
$body .= "Name: "    . $name    . "\n";
$body .= "Email: "   . $from    . "\n";
$body .= "Message: " . $message . "\n";

$success = mail($to, $subject, $body, "From: <$from>");

if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.php\">";
} else {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>
