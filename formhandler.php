<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'jsubway1998@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                    "Subject: $subject.\n".
                        "User Message: $message .\n";

$to = 'jsubway1998@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$email_subect,$emal_body,$headers);

header("Location: contact.html");


?>