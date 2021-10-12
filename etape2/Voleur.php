<?php
interface Voleur{
    public function extraireDeLaPoche(Personnage $adversaire, int $montantExtrait);
    public function courir();
}