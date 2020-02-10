<?php
require ('vehicule.php');

$vehicule1 = new Vehicule('RENAULT', 90, 15000);
$vehicule2 = new Vehicule('PEUGEOT', 110, 20000);

$vehicule1->getMarque();
$vehicule1->setPuissance(110);
$vehicule1->setKilometrage($vehicule1->getKilometrage()+3500);

$vehicule2->setKilometrage($vehicule2->getKilometrage()+1500);
?>