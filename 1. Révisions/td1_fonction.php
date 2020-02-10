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
    $description =
        '<footer>
            <div>
                <p>'.$iut.'</p>
                <p>'.$departement.'</p>
                <p>'.$module.'</p>
            </div>
        </footer>';

    return $description;
}

// Appel de la fonction
affichage_footer("IUT de Troyes", "MMI", "M3203");
?>