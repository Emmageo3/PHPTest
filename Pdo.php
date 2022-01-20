<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion a la base de données avec PDO</title>
</head>
<body>

    <h1>Connexion a la base de donnees</h1>
    
    <?php

        $servername = "localhost";
        $username = "root";
        $password = "";

        //on teste la connexion
        try{
            $conn = new PDO("mysql:host=$servername; dbname=test", $username, $password);
            //on definit le mode d'erreur de PDO sur exception
            
            echo "Connexion réussie !!!";
        }

        catch(PDOexception $e){
            echo "Erreur : " . $e->getMessage();
        }

    ?>
    
</body>
</html>