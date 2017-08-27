<!-- PHP-->

<?php 
$to = 'sknelson111@gmail.com' ; 
$from = $_REQUEST['Email'] ; 
$name = 'New Applicant' ; 
$headers = "From: $from"; 
$subject = "Web Contact Data"; 

$fields = array(); 
$fields{"Email"} = "Email"; 

$body = "We have received the following information:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); } 

if($from == '') {print "You have not entered an email, please go back and try again";} 
else { 
$send = mail("sknelson111@gmail.com", $subject, $body, $headers); 
if($send) 
{print "All's good!  We'll keep you informed.";}
}
}
?>