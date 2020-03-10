<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */

class Formulaire
{
    protected $action;
    protected $methode;
    protected $nom;

    /**
     * Formulaire constructor.
     * @param $action
     * @param $methode
     * @param $nom
     */
    public function __construct($action, $methode, $nom)
    {
        $this->action = $action;
        $this->methode = $methode;
        $this->nom = $nom;

        $form = '<form action="'.$action.'" method="'.$methode.'" name="'.$nom.'" id="'.$nom.'">';
    }

    public function ajoutChampSimple($libelle, $type, $nom)
    {
        if ($type = 'email'){
            $chamsimple = '<div class="md-form"><i class="fas fa-envelope prefix"></i><input type="'.$type.'" id="'.$nom.'" class="form-control validate"><label for="'.$nom.' "data-error="wrong" data-success="right">'.$libelle.'</label></div>';
        }
        else {
            $chamsimple = '<div class="md-form"><input type="' . $type . '" id="' . $nom . '" class="form-control"><label for="' . $nom . '">' . $libelle . '</label></div>';
        }
    }

    public function ajoutChampSelect($libelle, $nom, $choix)
    {
        $champselect = '<select class="browser-default custom-select" name="'.$nom.'" id="'.$nom.'"><option selected>'.$libelle.'</option>';
        foreach ($choix as $key->$value) {
            $champselect += '<option value="'.$value.'">'.$value.'</option>';
        };
        $champselect += '</select>';
}
}