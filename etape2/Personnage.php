<?php

abstract class Personnage
{
//############################################//
    protected $_id = 0;
    protected $_nom = 'Inconnu';
    protected $_force = 50;
    protected $_experience = 1;
    protected $_degats = 0;
    protected $_niveau = 0;

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    const MAGICIEN = 1;
    const ARCHER = 2;
    const BRUTE = 3;

    private static $_texteADire = " Qui veut se battre ?";
    private static $_nbreJoueurs = 0;
//############################################//
    public function __construct(array $ligne)
    {
        $this->hydrate($ligne);
        self::$_nbreJoueurs++;
        //print("<br/>Le personnage " . $this->getNom() . " a été crée !");
    }

    public function hydrate(array $ligne)
    {
        foreach ($ligne as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    // public function hydrate2(array $ligne)
    // {
    //     $this->setNom($ligne['nom']);
    //     $this->setForce($ligne['force']);
    //     $this->setDegats($ligne['degats']);
    //     $this->setExperience($ligne['experience']);
    //     $this->setNiveau($ligne['niveau']);
    // }

    public function __toString(): string
    {
        return '<br/>Joueur ' . $this->getNom() . ' / Force = ' . $this->getForce() . ' / Dégats = ' . $this->getDegats() . ' / Expérience = ' . $this->getExperience();
    }
    //############################################//
    public function setId(int $id): Personnage
    {
        if (!is_int($id)) {
            trigger_error('Il faut un nombre entier !', E_USER_WARNING);
            return $this;
        }
        $this->_id = $id;
        return $this;
    }
    public function getId(): int
    {
        return $this->_id;
    }
//############################################//
    public function setNom(string $nom): Personnage
    {
        if (!is_string($nom)) {
            trigger_error('Il faut du texte !', E_USER_WARNING);
            return $this;
        }
        $this->_nom = $nom;
        return $this;
    }
    public function getNom(): string
    {
        return $this->_nom;
    }
//############################################//
    public function setForce(int $force): Personnage
    {
        if (!is_int($force)) {
            trigger_error("Il faut un nombre !", E_USER_WARNING);
            return $this;
        }
        if ($force > 100) {
            trigger_error("Il faut un nombre inférieur à 100 !", E_USER_WARNING);
            return $this;
        }
        if (in_array($force, array(self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE))) {
            $this->_force = $force;
            return $this;
        } else {
            trigger_error('Force non correcte', E_USER_ERROR);
            return $this;
        }
    }
    public function getForce(): int
    {
        return $this->_force;
    }
//############################################//
    public function setDegats(int $degats): Personnage
    {
        if (!is_int($degats)) {
            trigger_error("Il faut un nombre !", E_USER_WARNING);
            return $this;
        }
        if ($degats > 100) {
            trigger_error("Il faut un nombre inférieur à 100 !", E_USER_WARNING);
            return $this;
        }
        $this->_degats = $degats;
        return $this;
    }
    public function getDegats(): int
    {
        return $this->_degats;
    }
//############################################//
    public function setExperience(int $experience): Personnage
    {
        if (!is_int($experience)) {
            trigger_error("Il faut un nombre !", E_USER_WARNING);
            return $this;
        }
        if ($experience > 100) {
            trigger_error("Il faut un nombre inférieur à 100 !", E_USER_WARNING);
            return $this;
        }
        $this->_experience = $experience;
        return $this;
    }
    public function getExperience(): int
    {
        return $this->_experience;
    }
    public function winExperience(): Personnage
    {
        $this->_experience++;
        print($this->getNom() . " a gagné 1 points d'expérience ! <br/>");
        return $this;
    }
//############################################//
    public function setNiveau(int $niveau): Personnage
    {
        if (!is_int($niveau)) {
            trigger_error('Il faut un nombre entier !', E_USER_WARNING);
            return $this;
        }
        $this->_niveau = $niveau;
        return $this;
    }
    public function getNiveau(): int
    {
        return $this->_niveau;
    }
//############################################//
    public static function parler()
    {
        print("<br/>Je suis un personnage n°" . self::$_nbreJoueurs . ' ' . self::$_texteADire);

    }

    abstract public function frapper(Personnage $adversaire): Personnage;
    
    public function getResultat()
    {
        print("<br/>Nom = " . $this->getNom() . " / Force = " . $this->getForce() . " / Dégats = " . $this->getDegats() . " / Expérience = " . $this->getExperience());
        //print($this->getNom()->$this->getForce()->$this->getDegats()->getExperience());
    }
}
