<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fichier de test de la séance 9</title>
</head>
<body>
<h1>Fichier de test du TP5</h1>

<?php
require 'interfaces.php';
require 'Humain.php';
require 'Artiste.php';
require 'Auteur.php';
require 'Dessinateur.php';
require 'Livre.php';
require 'BandeDessinee.php';
require 'Roman.php';
?>

<h2>Création de quelques auteurs</h2>
<?php
$artiste = new Artiste('Mozart', 'Wolfgang Amadeus', '27/01/1756', 'Compositeur', 'mozart.jpg');
echo $artiste->sePresente();
echo '#################################<br>';
$auteur = new Auteur('Corbeyran', 'Eric', '14/12/1964', 'corbeyran.jpg');
echo $auteur->sePresente();
$dessinateur = new Dessinateur('Guérineau', 'Richard', '18/11/1969', 'guerineau.jpg');
$auteurRoman = new Auteur('Conan Doyle', 'Arthur', '22/05/1859', 'doyle.jpg');
echo '#################################<br>';
echo $auteur->sePresente();
echo '#################################<br>';
echo $dessinateur->sePresente();
echo '#################################<br>';
echo $auteurRoman->sePresente()
?>
<h2>Création de livres</h2>
<?php
$bd = new BandeDessinees('Le chant des Stryges', 48);
$bd->addAuteur($auteur);
$bd->addAuteur($auteurRoman);
$bd->addDessinateur($dessinateur);
echo '#################################<br>';
echo $bd->afficheLivre();
$bd->supprimerAuteur($auteurRoman);
echo '#################################<br>';
echo $bd->afficheLivre();
$roman = new Roman('L\'étude en rouge', 136);
$roman->addAuteur($auteurRoman);
echo '#################################<br>';
echo $roman->afficheLivre();
?>
</body>
</html>