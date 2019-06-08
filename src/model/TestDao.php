<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 12:18
 */
namespace src\model;
use config\Model;
class TestDao extends Model
{
    public function insert($user)
    { 
       // $db= $this->getBdd(); 
        //$sql=$db->prepare( "INSERT INTO `user` ( `nomU`, `prenomU`, `pwd`) VALUES (:nom, :prenom,  :pwd)");
        //$sql->bindValue(':nom', $user->getNomU());
        ///$sql->bindValue(':prenom', $user->getPrenomU());
        //$sql->bindValue(':pwd', $user->getPwd());
        //$sql->execute();
            return "user ajouté";
    }

    public function findAll()
    {
        //$db= $this->getBdd();
        //$sql=$db->query(  "SELECT * FROM `user`")->fetchAll();
       
        return "Liste des Utilisateur";
    }

    public function findOne($id)
    {}

    public function update($id)
    {}
    public function delete($id)
    {}
}