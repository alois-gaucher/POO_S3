<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Seance 10 - Génération de formulaires</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>
</head>
<body>
<?php
include('iFormulaire.php');
include('Formulaire.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php
                echo '<h1 class="title">Un premier formulaire</h1>';
                $form1 = new Formulaire('traitement1.php', 'post', 'form1');
                $form1->ajoutChampSimple('Nom', 'text', 'nom');
                $form1->ajoutChampSimple('Prénom', 'text', 'prenom');
                $form1->ajoutChampChoix('Sexe', 'radio', 'sexe', array('H' => 'Homme', 'F' => 'Femme'));
                $form1->ajoutChampSelect('Ville', 'ville', array(1 => 'Troyes', 2 => 'Dijon', 3 => 'Lille'));
                $form1->ajoutBoutonSubmit('Valider');
                echo $form1->genereFormulaireHTML();
            ?>
        </div>
        <div class="col-md-6">
            <?php
                echo '<h1>Un deuxième formulaire</h1>';
                $form2 = new Formulaire('traitement2.php', 'get', 'form2');
                $form2->ajoutChampSimple('Login', 'email', 'login', 'login', 'form-control');
                $form2->ajoutChampSimple('Mot de passe', 'password', 'password');
                $form2->ajoutBoutonSubmit('Se connecter');
                echo $form2->genereFormulaireHTML();
            ?>
        </div>
        <div class="col-md-3">
            <?php
                echo '<h1>Un troisième formulaire</h1>';
                $form3 = new Formulaire('traitement3.php', 'post', 'form3');
                $form3->ajoutChampSimple('Nom', 'text', 'nom');
                $form3->ajoutChampSimple('Prénom', 'text', 'prenom');
                $form3->ajoutChampDate('Date de naissance', 'datenaissance');
                $form3->ajoutBoutonSubmit('Enregistrer');
                echo $form3->genereFormulaireHTML();
            ?>
        </div>
    </div>
</div>

</body>
</html>