<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


interface iFormulaire
{
    public function __construct($action, $method, $nom, $class = '');

    public function ajoutChampSimple($label, $type, $nom, $id = '', $class = '');

    public function ajoutChampSelect($label, $nom, $data, $id = '', $class = '');

    public function ajoutChampChoix($label, $type, $nom, $data, $id = '', $class = '');

    public function ajoutBoutonSubmit($label, $nom = '', $id = '', $class = '');

    public function genereFormulaireHTML();
}

?>