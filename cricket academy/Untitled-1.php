<?php
    $name=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $message=$_POST['message'];

    $email_from="rajivgurav712@gmail.com";
    $email_subject="new form submission";
    $email_body="User name:$name.\n".
                    "User Email: $visitor_email.\n".
                        "User message: $message.\n";
                
    $to="rajivgurav712@gmail.com";
    $headers="From:$email_from \r\n";
    $headers="Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location:contactus.html");