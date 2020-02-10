<?php
// Déclaration de la fonction
function affichage_footer($iut, $departement, $module){
        $html = '<footer>
            <div>
                <p>'.$iut.'</p>
                <p>'.$departement.'</p>
                <p>'.$module.'</p>
            </div>
        </footer>';
        return $html;
}
?>

<html>
    <style>
        p {
            display: inline-block;
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>
    <body>
    <?php echo affichage_footer("IUT de Troyes", "MMI", "M3203");?>
    </body>

</html>
