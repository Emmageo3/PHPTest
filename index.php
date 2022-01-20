<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion a la base de données avec mysqli</title>
</head>
<body>

    <h1>Base de données</h1>

    <?php

        //on declare les variables de connexion
        $servername = "localhost";
        $username = "root";
        $password = "";

        //on cree la connexion 
        $conn = new mysqli ($servername, $username, $password);

        //on verifie la connexion
        if($conn->connect_error){
            die("Erreur : " . $conn->connect_error);
        }
        echo "Connexion réussie !!!"
    ?>
</body>
</html>