<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Résultat du test
    </h1>
    <p>
    <?=$_POST["numero1"]?> est-il compris entre <?=$_POST["numero2"]?> et <?=$_POST["numero3"]?> ?
    Oui, <?=$_POST["numero1"]?> est compris entre <?=$_POST["numero2"]?> et <?=$_POST["numero3"]?>.
    </p>
</body>
</html>