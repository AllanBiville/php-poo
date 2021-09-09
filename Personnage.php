<?php

class Personnage
{
//############################################//
    private $_nom = 'Inconnu';
    private $_force = 50;
    private $_experience = 1;
    private $_degats = 0;
//############################################//
    public function __construct($nom, $force = 50, $degats = 0)
    {
        $this->setNom($nom);
        $this->setForce($force);
        $this->setDegats($degats);
        $this->setExperience(1);
        print("<br/>Le personnage " . $nom . " a été crée !<br/>");
    }
    public function __toString(){
        return $this->getNom();
    }
//############################################//
    public function setNom($nom)
    {
        if (!is_string($nom)) {
            trigger_error('Il faut du texte !', E_USER_WARNING);
            return;
        }
        $this->_nom = $nom;
    }
    public function getNom()
    {
        return $this->_nom;
    }
//############################################//
    public function setForce($force)
    {
        if (!is_int($force)) {
            trigger_error("Il faut un nombre !", E_USER_WARNING);
            return;
        }
        if ($force > 100) {
            trigger_error("Il faut un nombre inférieur à 100 !", E_USER_WARNING);
            return;
        }
        $this->_force = $force;
    }
    public function getForce()
    {
        return $this->_force;
    }
//############################################//
    public function setDegats($degats)
    {
        if (!is_int($degats)) {
            trigger_error("Il faut un nombre !", E_USER_WARNING);
            return;
        }
        if ($degats > 100) {
            trigger_error("Il faut un nombre inférieur à 100 !", E_USER_WARNING);
            return;
        }
        $this->_degats = $degats;
    }
    public function getDegats()
    {
        return $this->_degats;
    }
//############################################//
    public function setExperience($experience)
    {
        if (!is_int($experience)) {
            trigger_error("Il faut un nombre !", E_USER_WARNING);
            return;
        }
        if ($experience > 100) {
            trigger_error("Il faut un nombre inférieur à 100 !", E_USER_WARNING);
            return;
        }
        $this->_experience = $experience;
    }
    public function getExperience()
    {
        return $this->_experience;
    }
    public function winExperience()
    {
        $this->_experience++;
        print("<br/>" . $this->getNom()." a gagné 1 points d'expérience ! <br/>");
    }
//############################################//
    public function parler()
    {
        print("Je suis un personnage");
    }

    public function frapper(Personnage $adversaire)
    {
        // $adversaire->_degats = $adversaire->_degats + $this->_force;
        $adversaire->_degats += $this->_force;
        print('<br/>'. $adversaire->getNom() . ' a été frappé par ' . $this->getNom() . ' --> Dégats de ' . $adversaire->getNom().' = ' . $adversaire->getDegats(). ' points de dégats<br/>');
        $this->winExperience();
    }





}
