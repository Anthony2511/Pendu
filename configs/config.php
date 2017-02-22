<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 22/02/2017
 * Time: 18:02
 */

define('SOURCE_NAME', 'datas/world.txt');
define('REPLACEMENT_CHAR', '_'); // remplacer les lettres du mots par des _

$remainingTrials = 8; // variables qui stocke le nombre d'essais
$replacementString = '';  // variable pour remplacer un caractère
$lettersCount = 0; // variable définissant la longueur du mot à trouver
$trials = 0;
$triedLetters = ''; // variable qui va trier les lettres restantes
$error = ''; // variable en cas d'errors
$wordFound = 0; // vairables lorsque le mot est trouvé