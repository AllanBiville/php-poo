<?php

class Magicien extends Personnage
{
    private $_magie;

    public function frapper(Personnage $adversaire): Personnage
    {
        $adversaire->_degats += $this->_magie;
        parent::frapper($persoAFrapper);
        return $this;
    }
}

