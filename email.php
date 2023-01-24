<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$message  = $_POST['message']


$email_from = 'jamaari@jamaari.com';
$email_subject = "New Message from customer";
$email_body = "Hey! you just got a message on your site from $name.\n";
"This is his message: $message\n";


$to = "jamaari@jamaari.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $vistor_email \r\n";
mail($to,$email_subject,$email_body,$headers);


function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>