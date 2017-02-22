<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pendu</title>
    <meta name="description" content="Pendu en PHP">
    <meta name="author" content="Anthony Beaumecker">
</head>
<body>
<div >
    <div>
        <h1>Trouve le mot en moins de 8 coups</h1>
    </div>
    <div>
        <p>Essai(s) restant(s) : <?= $remainingTrials;?> </p>
        <p>Indice&nbsp;:&nbsp;<?= $lettersCount; ?> lettres</p>
    </div>
    <div>
        <p>Réponse : <?=$replacementString;?></p>
    </div>
    <div class="triedLetters">
        <p>Lettre utilisé&nbsp;:&nbsp;<?=$triedLetters; ?></p>
    </div>
    <?php if($wordFound):?>
        <div><p> BRAVO tu as gagné&nbsp;<a href="index.php">Recommence</a></p></div>
    <?php elseif($remainingTrials==0): ?>
        <div>PERDU, tu feras mieux la prochaine fois.<a href="index.php">Recommence</a></div>
    <?php else : ?>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Légende Formulaire </legend>
            <div class="recherche">
                <label for="triedLetter">Choisi ta lettre</label>
                <select name="triedLetter" id="triedLetter">
                    <?php foreach($lettersArray as $letter => $status): ?>
                        <?php if($status): ?>
                            <option value="<?= $letter ?>"><?= $letter ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="serializedLetters" value="<?= $serializedLetters;?>">
                <input type="hidden" name="triedLetters" value="<?= $triedLetters;?>">
                <input type="hidden" name="wordsIndex" value="<?= $wordsIndex;?>">
                <input type="hidden" name="replacementString" value="<?= $replacementString;?>">
                <input type="hidden" name="lettersCount" value="<?= $lettersCount;?>">
                <input type="hidden" name="trials" value="<?=$trials;?>">
                <input type="submit" value="Essayer">
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>
<?php endif; ?>
