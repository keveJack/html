<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="formulaire.php" method="post">
    <p>
        Bonjour <?=htmlentities($_POST["prenom"])?> 
        <?=htmlentities($_POST["nom"])?>
        ,vous êtes né le <?=$_POST["datedenaissance"]?>
        à <?=$_POST["villedenaissance"]?>
    </p>
   <button>reset</button>
    </form>
</body>
</html>