<?php
/**
 * Copyright (c) Aloïs GAUCHER 2020.
 * https://alois-gaucher.fr/ - https://github.com/couquino
 */


interface iHumain
{
    public function travailler($nombreheures);
    public function reposer($nombrejours);
    public function sePresente();
}

abstract class Individu implements iHumain
{
    static $nombreindividus;
    private $nom;
    private $prenom;
    private $sexe;
    protected $revenu = 0;
    private $conges = 0;

    /**
     * Individu constructor.
     * @param $nom
     * @param $prenom
     * @param $sexe
     */
    public function __construct($nom, $prenom, $sexe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        if (is_string('H'))
        {
            $this->sexe = $sexe;
        }
        if (is_string('F'))
        {
            $this->sexe = $sexe;
        }
        else return 'ERROR';

        self::$nombreindividus++;
    }

    public function getNombreIndividus()
    {
        return self::$nombreindividus;
    }

    public function __destruct()
    {
        $this->nombreindividus = 0;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return int
     */
    public function getRevenu(): int
    {
        return $this->revenu;
    }

    /**
     * @param int $revenu
     */
    public function setRevenu(int $revenu): void
    {
        $this->revenu = $revenu;
    }

    /**
     * @return int
     */
    public function getConges(): int
    {
        return $this->conges;
    }

    /**
     * @param int $conges
     */
    public function setConges(int $conges): void
    {
        $this->conges = $conges;
    }

    // Incrémente la variable $revenu en fonction du nombre d'heures travaillées
    public function travailler($nombreheures)
    {
        $this->setRevenu($this->getRevenu() + 9.5 * $nombreheures);
        $html = 'L\'individu '.$this->getNom().' '.$this->getPrenom().' a travaillé '.$nombreheures.' heures. <br>';
        return $html;
    }

    // Incrémente la variable $conges en fonction du nombre de jours de congés
    public function reposer($nombrejours)
    {
        $this->setConges($this->getConges() + $nombrejours);
        $html = 'L\'individu '.$this->getNom().' '.$this->getPrenom().' s\'est reposé '.$nombrejours.' jours. <br>';
        return $html;
    }

    // Retourne une phrase simple comprenant le nom et le prénom de l'individu
    public function sePresente()
    {
        $html = 'Bonjour, je m\'apppelle '.$this->getNom().' '.$this->getPrenom().'. <br>';
        return $html;
    }

    // Réinitialise le revenu de l'individu
    public function RAZRevenu()
    {
        $this->setRevenu(0);
        $html = 'Les revenus ont été réinitialisés';
        return $html;
    }

    // Réinitialise les congés de l'individu
    public function RAZConges()
    {
        $this->setConges(0);
        $html = 'Les congés ont été réinitialisés';
        return $html;
    }

    // Retourne une phrase simple contenant le nom, le prénom ainsi que les revenus de l'individu
    public function DeclareSalaire()
    {
        $html = 'Je suis '.$this->getNom().' '.$this->getPrenom().' et j\'ai gagné '.$this->getRevenu().'€ Cette année. <br>';
        return $html;
    }

}

class Etudiant extends Individu
{
    static $nbetudiants;
    private $numetudiant;
    private $age;
    private $formation;
    private $resultat;

    public function __construct($nom, $prenom, $sexe, $numetudiant, $age, $formation)
{
    parent::__construct($nom, $prenom, $sexe);
    $this->numetudiant = $numetudiant;
    $this->age = $age;
    $this->formation = $formation;
    self::$nbetudiants++;
}

    /**
     * @return mixed
     */
    public function getNumetudiant()
    {
        return $this->numetudiant;
    }

    /**
     * @param mixed $numetudiant
     */
    public function setNumetudiant($numetudiant): void
    {
        $this->numetudiant = $numetudiant;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age.'<br>';
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        if (is_int($age))
        {
            $this->age = $age;
        }
        else
        {
            echo 'ERROR';
        }
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param mixed $formation
     */
    public function setFormation($formation): void
    {
        $this->formation = $formation;
    }

    /**
     * @return mixed
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * @param mixed $resultat
     */
    public function setResultat($resultat): void
    {
        $this->resultat = $resultat;
    }

    public function travailler($nombreheures)
    {
        if ($this->age >= 18)
        {
            $this->setRevenu($this->getRevenu() + (9.5 * $nombreheures));
            $html = 'L\'individu '.$this->getNom().' '.$this->getPrenom().' a travaillé '.$nombreheures.' heures. <br>';
        }
        else
        {
            $this->setRevenu($this->getRevenu() + ((9.5*0.8) * $nombreheures));
            $html = 'L\'individu '.$this->getNom().' '.$this->getPrenom().' a travaillé '.$nombreheures.' heures. <br>';
        }
        return $html;
    }

    public function evaluer($noteExamen)
    {
        if ($noteExamen >= 10)
        {
            $this->setResultat('Reçu(e) <br>');
        }
        else
        {
            $this->setResultat('Ajourné(e) <br>');
        }
        return $this->getResultat();
    }

}

final class Etudiant_MMI extends Etudiant
{
    private $option;

    public function __construct($nom, $prenom, $sexe, $numetudiant, $age, $formation, $option)
    {
        parent::__construct($nom, $prenom, $sexe, $numetudiant, $age, $formation);
        $this->option = $option;
    }

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param mixed $option
     */
    public function changerOption($option): void
    {
        $this->option = $option;
    }

    // Retourne le nom, le prénom et l'option de l'étudiant
    public function quelleOption()
    {
        $html = 'Bonjour, je m\'apppelle '.$this->getNom().' '.$this->getPrenom().', je suis en option '.$this->getOption().'. <br>';
        return $html;
    }

    // Retourne une phrase simple comprenant le nom et le prénom de l'individu
    public function sePresente()
    {
        $html = 'Bonjour, je m\'apppelle '.$this->getNom().' '.$this->getPrenom().'et je suis en MMI. <br>';
        return $html;
    }
}

?>