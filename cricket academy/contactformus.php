<?php
 if(isset($_POST['submit_form']))
			{ 
          $name=$_POST['firstname']; 
          $lname=$_POST['lastname'];
       $email=$_POST['email']; 
        $msg=$_POST['message']; 
       $phone=$_POST['mobile']; 
       $FromName="Techno Smarter";
$FromEmail="rajivgurav712@gmail.com";
$ReplyTo=$email;
$toemail="rajivgurav712@gmail.com";
$subject="Techno Smarter Contact form"; 
$message='Name:-'.$name.'<br>Email :-' .$email.'<br> Phone No:-'.$phone.'<br> Message:-'.$msg;
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: ".$FromName." <".$FromEmail.">\n";
$headers .= "Reply-To: ".$ReplyTo."\n";
$headers .= "X-Sender: <".$FromEmail.">\n";
$headers .= "X-Mailer: PHP\n";
$headers .= "X-Priority: 1\n";
$headers .= "Return-Path: <".$FromEmail.">\n";
   if(mail($toemail, $subject, $message, $headers,'-f'.$FromEmail) ){
          $hide=1;
        
         echo "successfully send";
	      
	} else {
		echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
} 

			}
		
		?>