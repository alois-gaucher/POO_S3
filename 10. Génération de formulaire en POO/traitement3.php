<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fichier de traitement de la séance 10</title>
</head>
<body>
<h1>Fichier "traitement3.php" du troisième formulaire de la séance 10</h1>
<h2>Affichage des données saisies dans le formulaire</h2>
<ul>
    <?php
    echo '<li> Nom : '.$_POST['nom'].'</li>';
    echo '<li> Prénom : '.$_POST['prenom'].'</li>';
    echo '<li> Date de naissance : '.$_POST['datenaissance_jour'].'/'.$_POST['datenaissance_mois'].'/'.$_POST['datenaissance_annee'].'</li>';
    ?>
</ul>
</body>
</html>