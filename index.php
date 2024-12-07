<?php
    // session_start();
    // $_SESSION['user'] = "Marly";
    // echo $_SESSION['user'];

    //session_unset();
    //session_destroy();
    //var_dump($_SESSION['user']);

    setcookie('user','user',time()+(86400*7));

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contac</title>
</head>
<body >
    <center>
    <h2>FORMULAIRE</h2>
    <form action="action.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom"><br><br>

        <label for="email">Prenom :</label>
        <input type="text" name="prenom"><br><br>

        <label for="email">Classe :</label>
        <input type="text" name="classe"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    </center>

</body>
</html>
