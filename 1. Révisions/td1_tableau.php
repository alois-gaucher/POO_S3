<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

// Déclaration d'un tableau 1 dimension
$tableau_notes = array(12, 14, 10);
echo '<br>';

// Valeur de la 1ère note directement grâce à l'indice
echo "Première note: ".$tableau_notes[0];
echo '<br>';

// Ajout la note de 15 dans le tableau $tableau_notes
array_push($tableau_notes, 15) ;

// Boucle de lecture
foreach ($tableau_notes as $value) {
    echo $value .'<br>';
}
echo 'Nombre de notes '. count($tableau_notes);
?>