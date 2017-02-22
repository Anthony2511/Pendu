<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le pendu</title>
</head>
<body>
    <section>
        <h1 aria-level="1">Trouve le mot en moins de 8 coups</h1>
    </section>
    <div>
        <p>Essais restants : ?</p>
        <p>Indices : ? lettres</p>
    </div>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Légende du formulaire</legend>
        </fieldset>
    </form>
<select name="" id="">
    <?php foreach ($as as $lettre => $statut): ?>
        <?php if ($statut) : ?>
            <option value=""><?= $lettre; ?></option>
        <?php endif; ?>
    <?php endforeach; ?>
</select>
</body>
</html>