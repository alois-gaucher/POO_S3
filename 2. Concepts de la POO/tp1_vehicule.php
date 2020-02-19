<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

require ('vehicule.php');

// Création du 1er véhicule
$vehicule1 = new Vehicule();
$vehicule1->setMarque('RENAULT');
$vehicule1->setPuissance(90);
$vehicule1->setKilometrage(15000);

// Création du 2nd véhicule
$vehicule2 = new Vehicule();
$vehicule2->setMarque('PEUGEOT');
$vehicule2->setPuissance(110);
$vehicule2->setKilometrage(20000);

//Récupère les caractéristiques du véhicule
echo $vehicule1->getCaracteristiques();
//Modifie la puissance du véhicule
$vehicule1->setPuissance(110);
//Récupère les caractéristiques du véhicule
echo $vehicule1->getCaracteristiques();
//Modifie le kilométrage du véhicule
$vehicule1->setKilometrage($vehicule1->getKilometrage()+3500);
//Récupère les caractéristiques du véhicule
echo $vehicule1->getCaracteristiques();
//Modifie le kilométrage du véhicule
$vehicule2->setKilometrage($vehicule2->getKilometrage()+1500);
//Récupère les caractéristiques du véhicule
echo $vehicule2->getCaracteristiques();
?>