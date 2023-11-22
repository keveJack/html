<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <!-- <form action="etat-civil.php" method="get">
        <button>Consulter l'état civil</button>
    </form> -->


    <a class="btn btn-primary" href="etat-civil.php?nom=<?= $_GET["nom"] ?>&prenom=<?= $_GET["prenom"] ?>&datedenaissance=<?= $_GET["datedenaissance"] ?>&villedenaissance=<?= $_GET["villedenaissance"] ?>">Consulter l'état civil</a>
    <a class="btn btn-secondary" href="adresse.php?numeroderue=<?= $_GET["numeroderue"]?>&nomdelavoie=<?= $_GET["nomdelavoie"]?>&codepostal=<?=$_GET["codepostal"]?>&ville=<?=$_GET["ville"]?>">Consulter l'adresse</a>
</body>

</html>