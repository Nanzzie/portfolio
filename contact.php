<?php
    $name= $_POST['name'];
    $visitor_email= $_POST['email'];
    $message= $_POST['message'];

    $to= "nandinikarad2098@gmail.com";
    
    $email_subject= 'New FORM Submission';
    $email_body= "User Name:" . $name ."\n;
                    User Email:" . $visitor_email ."\n;
                      User Message:" . $message ;

    
    $headers= "$From: $email_from " ."\r\n".
   if($visitor_email!=NULL)
   {
    mail($to,$email_subject,$email_body,$headers);
   }

  //redirect
    header("Location: index.html");
?>












