<?php

final class Brute extends Personnage
{
    public function attaquer(Personnage $adversaire): Personnage
    {
        $adversaire->_degats += $this->_force;
        print("<br/>".$adversaire->getNom() . ' a été frappé par ' . $this->getNom() . ' --> Dégats de ' . $adversaire->getNom() . ' = ' . $adversaire->getDegats() . ' points de dégats <br/>');
        parent::winExperience();
        return $this;
    }
}
