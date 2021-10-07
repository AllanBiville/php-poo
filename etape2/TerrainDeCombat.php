<?php
class TerrainDeCombat
{
    public function lancerUnCombat(Personnage $perso1, Personnage $perso2)
    {
        $perso1->frapper($perso2);
    }
}
