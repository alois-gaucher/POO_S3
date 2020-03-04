<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


require 'html.php';
// Instanciation
$doc = new HTML('La Programmation Objet');
// Appels des méthodes
$doc->ajoutTitre('La POO', 2);
$doc->ajoutParagraphe('La POO c\'est formidable');
$doc->ajoutParagraphe('Les étudiants en redemandent');
$doc->ajoutParagraphe('surtout en MMI 2ème année');
$doc->ajoutSaut();
$doc->ajoutTitre('Les TDs', 2);
$doc->ajoutParagraphe('Les étudiants adorent écrire du code PHP');
$doc->ajoutParagraphe('Incroyable mais vrai');
echo $doc->affiche();
?>