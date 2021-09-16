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

    }
    public function getList():array
    {

    }
    public function update(Personnages $perso):bool
    {

    }
}
