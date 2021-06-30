<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'rohan.khosla540@gmail.com';
  $email_subject = 'Personal Website Contact';
  $email_body = 'Name: $name.\n'.
                  "Email: $visitor_email.\n\n".
                    "$message";




  $to = 'f20190734@goa.bits-pilani.ac.in';

  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers );

  header("Location: index.html");
?>
