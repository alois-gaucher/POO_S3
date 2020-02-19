<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

include('animal.php');

//créer l’instance $bestiole de la classe animal :
//Nom : ‘Une drôle de bête’, Age : 1, Age théorique maximum : 10, état : ‘vivant’
echo '<style>p {color: red; font-weight: bold;}</style>';

echo '<p>Bestiole</p><br>';
$bestiole = new Animal('Une drôle de bête', 1, 10);
// Appeler la méthode : mange(‘fruits’)
$bestiole->mange('fruits');
// Appeler la méthode : mange(‘légumes’)
$bestiole->mange('légumes');
// Appeler la méthode : lire_regime()
$bestiole->lire_regime();
// Appeler la méthode : lire_informations()
$bestiole->lire_informations();
// Appeler la méthode : vieillir(4)
$bestiole->vieillir(4);
// Appeler la méthode : lire_informations()
$bestiole->lire_informations();
// Appeler la méthode : vieillir(6)
$bestiole->vieillir(6);
// Appeler la méthode : lire_informations()
$bestiole->lire_informations();

echo '<p>Chien</p><br>';
$chien1 = new Chien('Chien', 1, 18, 'Médor');
$chien1->lire_informations();
$chien1->seNomme();
$chien1->mange('viande');
$chien1->mange('croquettes');
$chien1->lire_regime();
$chien1->vieillir(4);
$chien1->lire_informations();
?>