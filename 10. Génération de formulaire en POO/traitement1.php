<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fichier de traitement de la séance 10</title>
</head>
<body>
<h1>Fichier "traitement1.php" du premier formulaire de la séance 10</h1>
<h2>Affichage des données saisies dans le formulaire</h2>
<ul>
    <?php
    echo '<li> Nom : '.$_POST['nom'].'</li>';
    echo '<li> Prénom : '.$_POST['prenom'].'</li>';

    if ($_POST['sexe'] === 'H') { $sexe = 'Homme'; }
    else {$sexe = 'Femme';}

    echo '<li> Sexe : '.$_POST['sexe'].'</li>';
    $villes = array(1 => 'Troyes', 2 => 'Dijon', 3 => 'Lille');
    echo '<li> Ville : '.$villes[$_POST['villes']].'</li>';
    ?>
</ul>
</body>
</html>