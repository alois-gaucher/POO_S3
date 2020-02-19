<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

require('vehicule.php');

// Création du 1er véhicule
$vehicule1 = new Vehicule('RENAULT', 90, 15000);
echo $vehicule1->getCaracteristiques();

//Création de la voiture
$voiture1 = new Voiture('Mercedes', '650', '10000', 'berline');
echo $voiture1->lire_type();
echo $voiture1->getCaracteristiques();
echo $voiture1->setKilometrage(12000);
echo $voiture1->getCaracteristiques();

//Création du bus
$bus1 = new Bus('Mercedez Benz', '800', '103820', 130, 6);
echo $bus1->lire_places();
echo $bus1->getCaracteristiques();

?>