<?php

class Archer extends Personnage
{
    public function frapper(Personnage $adversaire): Personnage
    {
        $adversaire->_degats += $this->_force;
        parent::frapper($persoAFrapper);
        return $this;
    }
}
