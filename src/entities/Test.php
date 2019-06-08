<?php


namespace src\entities;

class  Test
{
    private $id;
    private $nomU;
    

    public function getId()
    {
        return $this->id;
    }
    
    public function getNomU()
    {
        return $this->nomU;
    } 


    //SETTERS
    public function setId($id)
    {
        if (is_int($id) && $id > 0){
            $this->_id = $id;
        }
    }

    public function setNomU($nomU)
    {
        if (is_string($nomU)) {
            $this->nomU = $nomU;
        }
    }


}
