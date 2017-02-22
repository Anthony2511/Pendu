<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 22/02/2017
 * Time: 18:11
 */

// Creation d'un controller  en fonction du choix de l'utilisateur

if ($wordsArray = getWordsArray()) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $lettersArray = getLettersArray(); // on met les lettres dans le tableau de lettres
        $serializedLetters = serializeLetters($lettersArray);  // encoder une chaine puis lui génerer un valeur de stockage
        $wordsIndex = getWordIndex($wordsArray); // on créée une variable pour y stocker la liste de mots et en générer un aléatoirement

        $words = getWord($wordsArray, $wordsIndex); // variable pour stocker le mot en minuscule

        $lettersCount = strlen($words);// va calculer la longueur du mot

        $replacementString = getReplacementString($lettersCount); // variable pour stocker le mot en -

    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $serializedLetters = $_POST['serializedLetters']; // stocke la valeur
        $triedLetter = $_POST['triedLetter']; // stocke le nombre de lettres restantes
        $wordsIndex = $_POST['wordsIndex'];
        $replacementString = $_POST['replacementString'];
        $trials = $_POST['trials'];
        $lettersCount = $_POST['lettersCount'];

        $word = getWord($wordsArray, $wordsIndex); // stocke le mot en minuscule
        $lettersArray = unserializeLetters($serializedLetters); // on unseralized lorsque la lettre est trouvée
        $lettersArray[$triedLetter] = false;
        $serializedLetters = serializeLetters($lettersArray);

        $triedLetters .= $triedLetter;

        $letterFound = false;

        for ($i = 0; $i < $lettersCount; $i++) { // boucle pour remplacer le lettres par les -
            if (substr($word, $i, 1) === $triedLetter) { // si égale le mot vaut true
                $letterFound = true;
                $replacementString = substr_replace($replacementString, $triedLetter, $i,
                    1);/*dans replacemenstring le ieme carractère par triedletter*/
            }
        }
        if ($word === $replacementString) {
            $wordFound = 1;
        } else {
            if (!$letterFound) {
                $trials++;/*si j'ai trouver la lettre j'incremente le nombre d'essaie de 1*/
            }
        }
        $remainingTrials = 8 - $trials;
    }
}