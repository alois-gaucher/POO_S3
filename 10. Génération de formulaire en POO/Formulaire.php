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
    protected $contenu;

    /**
     * Formulaire constructor.
     * @param $action
     * @param $methode
     * @param $nom
     * @param $contenu
     */
    public function __construct($action, $methode, $nom)
    {
        $this->action = $action;
        $this->methode = $methode;
        $this->nom = $nom;

        $form = '<form action="'.$action.'" method="'.$methode.'" name="'.$nom.'" id="'.$nom.'">';
        $this->contenu .= $form;
    }

    public function ajoutChampSimple($libelle, $type, $nom)
    {
        if ($type == 'email'){
            $champsimple = '<div class="md-form"><i class="fas fa-envelope prefix"></i><input type="'.$type.'" name="'.$nom.'" id="'.$nom.'" class="form-control validate"><label for="'.$nom.' "data-error="wrong" data-success="right">'.$libelle.'</label></div>';
        }
        else {
            $champsimple = '<div class="md-form"><input type="'.$type.'" name="'.$nom.'" id="'.$nom.'" class="form-control"><label for="'.$nom.'">'.$libelle.'</label></div>';
        }
        $this->contenu .= $champsimple;

    }

    public function ajoutChampSelect($libelle, $nom, $choix)
    {
        $champselect = '<select class="browser-default custom-select" name="'.$nom.'" id="'.$nom.'"><option selected>'.$libelle.'</option>';
        foreach ($choix as $value) {
            $champselect .= '<option value="'.$value.'">'.$value.'</option>';
        };
        $champselect .= '</select>';
        $this->contenu .= $champselect;
    }

    public function ajoutChampChoix($libelle, $type, $nom, $choix)
    {
        if ($type == 'checkbox') {
            $champchoix = '<div class="custom-control custom-checkbox custom-control-inline" name="'.$nom.'" id="'.$nom.'">';
            foreach ($choix as $data) {
                $champchoix .= '<input type="checkbox" class="custom-control-input" value="'.$data.'" name="'.$nom.'">';
                $champchoix .= '<label class="custom-control-label" for="'.$data.'">'.$data.'</label>';
            };
            $champchoix .= '</div>';
        }

        else if ($type == 'radio')
        {
            $champchoix = '<div class="custom-control custom-radio" name="'.$nom.'" id="'.$nom.'">';
            foreach ($choix as $data) {
                $champchoix .= '<input type="radio" class="custom-control-input" value="'.$data.'" name="'.$nom.'">';
                $champchoix .= '<label class="custom-control-label" for="'.$data.'">'.$data.'</label>';
            };
            $champchoix .= '</div>';
        }

        $this->contenu .= $champchoix;
    }

    public function ajoutChampDate($libelle, $nom) {
        $champdate = '<div class="md-form">';
        $champdate .= '<input type="date" name="'.$nom.'" id="'.$nom.'" class="form-control">';
        $champdate .= '<label for="jour">'.$libelle.'</label>';
        $champdate .= '</div>';
        $this->contenu .= $champdate;
    }

    public function ajoutBoutonSubmit($label)
    {
        $boutonsubmit = '<button class="btn btn-primary btn-sm btn-rounded" type="submit">'.$label.'</button>';
        $this->contenu .= $boutonsubmit;
    }

    public function genereFormulaireHTML()
    {
        $this->contenu .= '</form>';
        return $this->contenu;
    }
}