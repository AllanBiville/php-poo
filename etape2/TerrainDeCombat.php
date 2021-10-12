<?php
class TerrainDeCombat
{
    public function lancerUnCombat(Personnage $perso1, Personnage $perso2)
    {
        $perso1->attaquer($perso2);
        $perso1->insulter();
        $perso2->insulter();
        if ($perso1 instanceof Voleur){
            $perso1->extraireDeLaPoche($perso2,30);
        }
       
    }
}
