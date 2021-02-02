<?php
include_once "Operation.php";
include_once "Database.php";

class category extends Database implements Operation 
{
    private $userID;
    private $Name;

    public function Add(){      
    }
    public function Update(){
        
    } 
    public function Delete(){
        
    }
    public function GetAll(){
        return parent::GetData("select * from category"); 
    }
    public function GetByName($value) {
        return parent::GetData("select * from category where category_name ='".$value."'");
    }
}


?>