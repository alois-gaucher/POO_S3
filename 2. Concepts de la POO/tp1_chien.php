<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

require ('chien.php');

$chien1 = new Chien();
$chien1->setRace('Husky');
$chien1->setAge(2);
$chien1->setPoids(17);

//Affichage des caractéristiques du chien
echo $chien1->getCaracteristiques();

echo 'Ajoutons du poids';
$chien1->ajouterPoids(29);
echo $chien1->getCaracteristiques();

echo 'Ajoutons de l\'âge';
$chien1->ajouterAge(3);
echo $chien1->getCaracteristiques();