<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<?php
 $name = $_POST['ip'];
 $visitor_email = $_POST['vemail'];
 $naslov= $_POST['subject'];
 $message = $_POST['poruka'];

 $email_from = 'david.dapo.dd@gmail.com';

	

	$email_body = "Stigla je nova poruka od strane korisnika $name.\n".
                   " $naslov \n"
                            "Here is the message:\n $message".
                           
     $headers = "From: $email_from \r\n";

     $headers .= "Reply-To: $visitor_email \r\n";
 mail("david.dapo.dd@gmail.com",$naslov,$email_body,$headers)
?>
</body>
</html>