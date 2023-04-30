<?php 

require "connect.php";

$requete = $database -> prepare ("INSERT INTO creationCompte (Nom, Pseudo, Email, Mot de passe) VALUES(:formNom, :formPseudo, :formEmail, :formMotdepasse)" );

$requete -> execute (

    [
        "formNom" => $_POST ['creationCompte'],
        "formPseudo" => $_POST ['creationCompte'],
        "formEmail" => $_POST ['creationCompte'],
        "formMotdepasse" => $_POST ['creationCompte'],
    ]
);


?>