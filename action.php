<?php

    //echo("Donnes en cours de traitement");
    //var_dump($_POST);
   if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // $nom = htmlspecialchars($_POST['nom']); HJF
        // $prenom = htmlspecialchars($_POST['prenom']);
        // $classe = htmlspecialchars($_POST['classe']);

        // echo "Nom : ".$nom ."<br>";
        // echo "Prenom : ".$prenom."<br>";
        // echo "Classe : ".$classe."<br>";

        echo $_COOKIE['user'];

    }

    //session_start();
    //$_SESSION['user'] = "Marly";
    //echo $_SESSION['user'];





?>