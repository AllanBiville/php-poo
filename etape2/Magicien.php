<?php

final class Magicien extends Personnage
{
    private $_magie;

    public function attaquer(Personnage $adversaire): Personnage
    {
        $adversaire->_degats += $this->_magie;
        print("<br/>".$adversaire->getNom() . ' a été frappé par ' . $this->getNom() . ' --> Dégats de ' . $adversaire->getNom() . ' = ' . $adversaire->getDegats() . ' points de dégats <br/>');
        parent::winExperience();
        return $this;
    }

}

