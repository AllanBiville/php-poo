<?php

final class Archer extends Personnage
{
    public function attaquer(Personnage $adversaire): Personnage
    {
        $adversaire->_degats += $this->_force;
        print("<br/>".$adversaire->getNom() . ' a été frappé par ' . $this->getNom() . ' --> Dégats de ' . $adversaire->getNom() . ' = ' . $adversaire->getDegats() . ' points de dégats <br/>');
        parent::winExperience();
        return $this;
    }
    public function insulter(){
        print("<br/>Je suis un archer, et je te dis que tu vises comme un pied mon gars");
    }
}
