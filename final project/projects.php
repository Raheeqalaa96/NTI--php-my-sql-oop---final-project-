<?php
include_once "Operation.php";
include_once "Database.php";
ob_start();

class projects extends Database implements Operation 
{
    private $userID;
    private $projectID;
    private $feasibility_plan;
    private $budget;
    private $execution_time;
    private $profet_value;
    private $typeOfBeneficiariess;
    private $discription;
    private $states;
    private $category_id;
    private $projectName;


    public function getusertid(){
        return $this->userID;
    }
    
    public function getprojectID(){
        return $this->projectID;
    }    
    public function getfeasibility_plan(){
        return $this->feasibility_plan;
    }
    public function getbudget(){
        return $this->budget;
    }
    public function getexecution_time(){
        return $this->execution_time;
    }
    public function getprofet_value(){
        return $this->profet_value;
    }
    public function gettypeOfBeneficiariess(){
        return $this->typeOfBeneficiariess;
    }
    public function getdiscriptiond(){
        return $this->discription;
    }
    public function getcategory_id(){
        return $this->category_id;
    }
    public function getstates(){
        return $this->states;
    }
    public function getprojectName(){
        return $this->projectName;
    }


    public function setuserid($value){
        $this->userID=$value;
  }
 
public function setfeasibility_plan($value){
    $this->feasibility_plan=$value;
}
public function setbudget($value){
    $this->budget=$value;
}
public function setexecution_time($value){
    $this->execution_time=$value;
}
public function setprofet_value($value){
    $this->profet_value=$value;
}
public function settypeOfBeneficiariess($value){
    $this->typeOfBeneficiariess=$value;
}
public function setdiscription($value){
    $this->discription=$value;
}
public function setstates($value){
    $this->states=$value;
}
public function setcategory_id($value){
    $this->category_id=$value;
}
public function setprojectName($value){
    $this->projectName=$value;
}

    public function Add(){  
     return parent::RunDML("insert into project values (Default,'".$this-> getusertid()."','".$this->getfeasibility_plan()."','".$this->getbudget()."','".$this-> getexecution_time()."','".$this->getprofet_value()."','".$this->gettypeOfBeneficiariess()."','".$this->getdiscriptiond()."','".$this->getstates()."','".$this->getcategory_id()."','".$this->getprojectName()."')");
  
    } 

    public function Update(){
        
    } 
    public function Delete(){ 
       
    }
    public function UpdateProjectByID($value){
        return parent::RunDML("update project set  states='taken' where project_id='".$value."'");
    }
    public function DeleteProjectByID($value){ 
        return parent::RunDML("delete from project  where project_id='".$value."'");
    }
    public function GetAll(){
        return parent::GetData("select * from project");
    }
    public function GetProductCategory($dno){
        return parent::GetData("select * from project where category='".$dno."'");
    }
    public function GetLast(){
        return parent::GetData("select * from project order by project_id desc limit 4");
    }

    public function  GetByCategory($dno)
    {
        return parent::GetData("select * from project where category_id='".$dno."'");
    }
    public function  GetByid($dno)
    {
        return parent::GetData("select * from project where project_id='".$dno."'");
    }

    public function  GetByName($value)
    {
        return parent::GetData("select * from project where project_name='".$value."'");
    }

    public function  GetByUserID()
    {
        return parent::GetData("select * from project where user_id='".$_SESSION["id"]."'");
    }
}


?>