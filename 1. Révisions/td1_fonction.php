<?php
// Déclaration de la fonction
function affichage_footer($iut, $departement, $module){
    echo "<footer>";
        echo "<ul>";
            echo '<li>'.$iut.'</li>';
            echo '<li>'.$departement.'</li>';
            echo '<li>'.$module.'</li>';
        echo "</ul>";
    echo "</footer>";
}

// Appel de la fonction
affichage_footer("IUT de Troyes", "MMI", "M3203");
?>