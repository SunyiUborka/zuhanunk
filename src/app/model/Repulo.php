<?php


namespace app\model;

class Repulo{
   
private $id;
private $tipus;
private $ut;    
private $erkezik;
private $indul;





public function getId()
{

return $this->id;

}

public function getTipus() {

   return $this->tipus; 
}

public function getUt() {

    return $this->ut; 
 }


public function getErkezett() {

return $this->erkezik;

}

public function getIndul() {

    return $this->indul;
    
    }




}

?>