<?php
session_start();
if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == true) {
    echo "est deja connecté via session";
} else {
    if (isset($_POST['email']) && ($_POST['password']) && ($_POST['email'] == "thierry.bru@viaformation.fr" && ($_POST['password'] == "1234"))) {
        echo "connecté";
        $_SESSION['isConnected'] = true;
    } else {
        //echo "non connecté";
       header("Location:index.php");
        // $_SESSION['pseudo']= isset($_POST['firstName'])?$_POST['firstName']:$;
    }
}


?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>

    </p>

</body>

</html>