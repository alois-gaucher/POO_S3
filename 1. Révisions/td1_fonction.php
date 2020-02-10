<style>
    p {
        display: inline-block;
        padding-left: 30px;
        padding-right: 30px;
    }
</style>

<?php
// Déclaration de la fonction
function affichage_footer($iut, $departement, $module){
    echo "<footer>";
        echo "<div>";
            echo '<p>'.$iut.'</p>';
            echo '<p>'.$departement.'</p>';
            echo '<p>'.$module.'</p>';
        echo "</div>";
    echo "</footer>";
}

// Appel de la fonction
affichage_footer("IUT de Troyes", "MMI", "M3203");
?>