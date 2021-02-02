<?php
include_once "Operation.php";
include_once "Database.php";
ob_start();
class request extends Database implements  Operation {

    private $Id_request;
    private $date;
    private $state;
    private $project_id;

    public function getId_request(){
        return $this->Id_request;
    }
    public function getdate(){
        return $this->date;
    }
    public function getstate(){
        return $this->state;
    }
    
    public function getproject_id(){
        return $this->project_id;
    }

   public function setdate($value){
    $this->date=$value;
    }

public function setproject_id($value){
    $this->project_id=$value;
}
public function setstate($value){
    $this->state=$value;
}

//'date: Auto CURDATE()'

public function Add(){
    return parent::RunDML("insert into request values (Default,Now(),'".$this-> getstate()."','".$_SESSION["id"]."','".$this-> getproject_id()."')");
 
}



public function GetByID(){
    $rs=parent::GetData("select * from request where user_id='".$_SESSION["id"]."'");
    return $rs;
}

public function Updatestate($value){
    return parent::RunDML("update request set  state='taken' where id_request='".$value."'");
}


public function Update(){   
   
   }

public function Delete(){}
public function GetAll(){
    $rs=parent::GetData("select * from request");
    return $rs;
}





}