<?php
class PersonnagesManager
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }
    public function setDb(PDO $db) : PersonnagesManager
    {
        $this->_db = $db;
        return $this;
    }
    public function add(Personnages $perso):bool
    {

    }
    public function delete(Personnages $perso):bool
    {

    }
    public function getOne(int $id)
    {
        $sth = $this->_db->prepare('SELECT id,nom,`force`, degats,niveau, experience, classe FROM personnages WHERE id= ?;');
        $sth-> execute(array($id));
        $ligne = $sth->fetch();
        $perso = new Personnage($ligne);
        return $perso;
    }
    public function getList():array
    {
        $listeDePersonnages = array();
        $request = $this->_db->query('SELECT id,nom,`force`, degats,niveau, experience, classe FROM personnages;');
        while($ligne = $request->fetch(PDO::FETCH_ASSOC))
         {
            switch ((int)$ligne['classe']) {
                case Personnage::MAGICIEN:
                    $perso = new Magicien($ligne);
                    break;
                case Personnage::ARCHER:
                    $perso = new Archer($ligne);
                    break;
                case Personnage::BRUTE:
                    $perso = new Brute($ligne);
                    break;
                
                default:
                    # code...
                    break;
            }
            //$perso = new Personnage($ligne);
             $listeDePersonnages[] = $perso;

         }
         return $listeDePersonnages;
    }
    public function update(Personnages $perso):bool
    {

    }
}
