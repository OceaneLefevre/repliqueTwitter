<?php 
require 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>    
    <form action="insert.php" method = "POST">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">

        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="pass">Mot de passe</label>
        <input type="password" name="pass" id="pass">

        <input type="submit" name="submit" value="Créer mon compte">
    </form>
</body>
</html>