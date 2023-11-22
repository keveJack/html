<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="formulaire">
        <form action="action.php" method="get">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" class="form-control" placeholder="Ecrire votre Nom">
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Ecrire votre Prenom">
            <label for="numeroderue">Numéro de rue:</label>
            <input type="number" name="numeroderue" id="numeroderue" class="form-control" placeholder="Ecrire votre numero de rue">
            <label for="nomdelavoie">Nom de la voie:</label>
            <input type="text" name="nomdelavoie" id="nomdelavoie" class="form-control" placeholder="Ecrire votre Nom de la voie">
            <label for="codepostal">Code postal:</label>
            <input type="number" name="codepostal" id="codepostal" class="form-control" placeholder="Ecrire votre code postal">
            <label for="ville">ville:</label>
            <input type="text" name="ville" id="ville" class="form-control" placeholder="Ecrire votre Nom de votre ville">
            <label for="datedenaissance">Date de naissance:</label>
            <input type="date" name="datedenaissance" id="datedenaissance" class="form-control">
            <label for="villedenaissance">Ville de naissance:</label>
            <input type="text" name="villedenaissance" id="villedenaissance" class="form-control" placeholder="Ecrire votre ville de naissance">
            <button>Envoyer</button>
        </form>
    </div>
</body>

</html>