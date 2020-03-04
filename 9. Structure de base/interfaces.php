<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

interface iSql {

}

interface iHumain {
    public function sePresente();
}

interface iLivre {
    public function __construct($titre, $auteur, $nbpages);
    public function addAuteur($auteur);
    public function afficheLivre();
}

interface iBD {
    public function addDessinateur($artistes);
}