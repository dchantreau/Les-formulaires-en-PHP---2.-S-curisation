<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
     <form  action="/thanks.php"  method="Post">

    <div>
      <label  for="name">Nom :</label>
      <input  type="text" id='name' name="user_lastname" placeholder="Pitt">
    </div>

    <div>
    <label  for="firstname">Prénom :</label>
      <input  type="text" id='firstname' name="user_firstname" placeholder="Brad">
    </div>

    <div>
      <label  for="courriel">Email: </label>
        <input  type="email" id = 'courriel' name="user_email" placeholder="BradPitt@gmail.com" >
    </div>

    <div>
      <label  for="phone">Numéro de téléphone :</label>
      <input  type="number" id ='phone' name="user_phone" placeholder="0659006982">
    </div>

    <div>
    <label for="subject" >Choisissez votre sujet:</label>
    <select id="animals" name="animalSubject" >
      <option value="chat">Chat</option>
      <option value="chien">Chien</option>
      <option value="poisson rouge">Poisson rouge</option>
      <option value="serpent">Serpent</option>
    </select>
    </div>

    <div>
      <label  for="sms" >Message :</label>
      <textarea id = "sms" name="user_message" placeholder="Veuillez écrire votre message ici..."></textarea>
    </div>

    <div  class="button">
      <button type="Valider">Envoyez votre message</button>
    </div>
  </form>
  </body>
</html>


<?php

if(isset($GET['user_email']) && !empty($_GET['user_email'])){
if(filter_var($_GET['user_email'],FILTER_VALIDATE_EMAIL)){
  echo 'The email is valid';
}
else{
 echo 'Invalide email,try again';
}}
?>
