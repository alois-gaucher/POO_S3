<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

//----------------------------------------------------
// fichier : seance3_exo3.php
// ---------------------------------------------------
// Notion d'encapsulation : protection des propriétés
// de l'objet.
// IUT de Troyes - MMI 2ème année
//----------------------------------------------------
// appel de la classe
require 'connexion_sql.php';
// création d'une première instance
$connexion1=new Connexion_SQL('127.0.1.1','test','root','');
echo $connexion1->lire_connexion();

// Création d'une deuxième instance
$connexion2=new Connexion_SQL('serveur','test','root','');// serveur n'est pas une @ip valide
echo $connexion2->lire_connexion();

?>