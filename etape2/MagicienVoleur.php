<?php
final class MagicienVoleur extends Personnage implements Voleur{
    public function extraireDeLaPoche(Personnage $adversaire, int $montantExtrait){
        $adversaire->setPoche($adversaire->getPoche() - $montantExtrait);
        $this->setPoche($this->getPoche() + $montantExtrait);
    }
    public function courir(){

    }
    public function attaquer(Personnage $adversaire):Personnage{
        return $this;
    }
}