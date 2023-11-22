<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="formulaire">
    <form action="action.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" class="form-control" placeholder="Ecrire votre Nom">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Ecrire votre Prenom">
    <label for="datedenaissance">Date de naissance:</label>
    <input type="date" name="datedenaissance" id="datedenaissance" class="form-control" >
    <label for="villedenaissance">Ville de naissance:</label>
    <input type="text" name="villedenaissance" id="villedenaissance" class="form-control" placeholder="Ecrire votre ville de naissance">
    

    <button>Envoyer</button>
    <input type="reset" value="Reset" />
    </form>
    </div>
</body>


</html>