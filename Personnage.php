<?php
// Présence du mot clé class + nom de la classe
class Personnage
{
// Declaration des attributs et méthodes ici.
    private $_nom = 'Inconnu';
    private $_force = 50;
    private $_experience = 1;
    private $_degats = 0;

    public function __construct($nom){
        $this->_nom = $nom;
        print("Le personnage ". $nom . " a été crée !");
    }

    public function definirForce($force){
        $this->_force = $force;
    }

    public function definirDegats($degats){
        $this->_degats = $degats;
    }
    public function afficherDegats()
    {
        return $this->_degats;
    }
    public function definirExperience($experience){
        $this->_experience = $experience;
    }

    public function parler()
    {
        print("Je suis un personnage");
    }


    public function frapper($adversaire)
    {
        // $adversaire->_degats = $adversaire->_degats + $this->_force;
        $adversaire->_degats += $this->_force;
        $this->gagnerExperience();
    }

    public function gagnerExperience()
    {
        $this->_experience++;
    }

    public function afficherExperience()
    {
        return $this->_experience;
    }


}
