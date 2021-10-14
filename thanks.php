<?php
$email = $_POST["user_email"];

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
  echo 'Thank you ' . 
htmlspecialchars($_POST["user_firstname"]) . ' ' .
htmlspecialchars($_POST["user_lastname"]) . ' for conctacting us about your ' . 
htmlspecialchars($_POST["animalSubject"]) .
'. We will contact you by your telephone number :' . 
htmlspecialchars($_POST["user_phone"]) . ' or by your mail : ' . 
($_POST["user_email"]) . ' soon as possible. Here your message : ' .
($_POST["user_message"]);
}
else{
 echo 'Invalide email,try again';
}






?>

