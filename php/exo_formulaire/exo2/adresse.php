<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?= htmlentities($_GET["numeroderue"]) ?>
        <?= htmlentities($_GET["nomdelavoie"]) ?>
        <?= htmlentities($_GET["codepostal"]) ?>
        <?= htmlentities($_GET["ville"]) ?>
    </p>
</body>

</html>