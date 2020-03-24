<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP Noté</title>
</head>
<body>
<h1>TP Noté : Sujet F - 24/03/2020 à 11h00</h1>

<?php
include('Spectacle.php');
include('SpectacleVivant.php');
include('Theatre.php');
include('Acteur.php');
?>
<h2>1. Création d'un Spectacle</h2>
<?php
$spectacle = new SpectacleVivant('Muse au Stade de France', 2019, 'Concert', 'Test');
echo $spectacle->informationsSpectacle();
?>


<h2>2. Création d'un spectacle de type théatre</h2>

<?php
$theatre = new Theatre('L\'avare', 1980);
echo $theatre->informationsSpectacle();
?>
<h2>3. Ajout des acteurs au spectacle théatre</h2>

<?php
$acteur1 = new Acteur('De funes', 'Louis', 'Harpagon');
$acteur2 = new Acteur('Galabru', 'Michel', 'Maître Jacques');

$theatre->addActeur($acteur1);
$theatre->addActeur($acteur2);
echo $theatre->informationsSpectacle();

?>
<h2>4. Modification d'un acteur d'un spectacle</h2>
<?php
$theatre->modifierRoleActeur('Galabru', 'Maître Jacques, Cuisinier d\'Harpagon');
echo $theatre->informationsSpectacle();
?>

<h2>5. Suppression d'un acteur </h2>
<?php
$theatre->supprimerActeur('Galabru');
echo $theatre->informationsSpectacle();
?>

<h2>6. Nombre d'oeuvre</h2>
<?php
echo Spectacle::getNbSpectacle().' spectacles ont été crées.';
?>

<h2>7. Modification d'un Spectacle</h2>
<?php
$spectacle->ModifierNom('Muse, concert à Bercy');
echo $spectacle->informationsSpectacle();
?>

</body>
</html>
