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
    <label for="contenu">Votre tweet</label>
    <textarea name = contenu id = contenu cols = "50" rows = "5"></textarea>
</form>


</body>
</html>