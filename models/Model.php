<?php

function getLettersArray()
{
    return [
        'a' => true,
        'b' => true,
        'c' => true,
        'd' => true,
        'e' => true,
        'f' => true,
        'g' => true,
        'h' => true,
        'i' => true,
        'j' => true,
        'k' => true,
        'l' => true,
        'm' => true,
        'n' => true,
        'o' => true,
        'p' => true,
        'q' => true,
        'r' => true,
        's' => true,
        't' => true,
        'u' => true,
        'v' => true,
        'w' => true,
        'x' => true,
        'y' => true,
        'z' => true,

    ];
}

function serializeLetters($lettersArray)
{

    return urlencode(serialize($lettersArray));

}

function unserializeLetters($serializedLetters)
{

    return unserialize(urldecode($serializedLetters)); // décode la variable passé en paramètres

}

function getWordsArray()
{ // function qui retourne un mot ou false
    return @file(SOURCE_NAME) ?: false;
}

function getWordIndex($wordsArray)
{ // function qui va contenir tous les mots et générer un aléatoirement
    return rand(0, count($wordsArray)); // grace a count, va compter l'ensemble des mots
}

function getWord($wordsArray, $wordsIndex)
{ // function qui va retourner le mot en minuscules
    return strtolower(trim($wordsArray[$wordsIndex]));
}

function getReplacementString($lettersCount)
{ // function qui va remplacer les lettres par des - avec comme paramètre la longueur du mot

    return str_pad('', $lettersCount,
        REPLACEMENT_CHAR);/*pour remplacer les lettres du mots par les - et grace a str_pad et s'arreter lorsque le mot a été trouvé */

}