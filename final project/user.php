<?php
include_once "Operation.php";
include_once "Database.php";
ob_start();
class user extends Database implements  Operation {

   private $userID;
   private $budget;
   private $Email;
   private $type;
   private $Name;
   private $Password;
   private $Phone;
   private $Country;
   
    
    public function getusertid(){
        return $this->userID;
    }
    public function getbudget(){
        return $this->budget;
    }
    public function getemail(){
        return $this->Email;
    }

    public function gettype(){
        return $this->type;
    }
    public function getname(){
        return $this->Name;
    }
    public function getpassword(){
        return $this->Password;
    }
    public function getphone(){
        return $this->Phone;
    }
   
    public function getcountry(){
        return $this->Country;
    }
    public function getidReqest(){
        return $this->idReqest;
    }
   


    public function setuserid($value){
          $this->userID=$value;
    }
    public function setbudget($value){
        $this->budget=$value;
   }
    public function setemail($value){
        $this->Email=$value;
   }
   public function settype($value){
    $this->type=$value;
}
    public function setname($value){
         $this->Name=$value;
    }
    public function setpassword($value){
          $this->Password=$value;
    }
    public function setphone($value){
          $this->Phone=$value;
    }
   
    public function setcountry($value){
          $this->Country=$value;
    }
    // public function setidRequest($value){
    //       $this->idRequest=$value;
    // }
   
    public function Add(){
        return parent::RunDML("insert into user values (Default,'".$this-> getbudget()."','".$this->getemail()."','".$this-> gettype()."','".$this-> getname()."','".$this->getpassword()."','".$this->getcountry()."','".$this->getphone()."')");
    }

    public function Update(){   //By ID
     return parent::RunDML("update user set name='".$this->getname()."',password='".$this->getpassword()."', phone='".$this->getphone()."',email='".$this->getemail()."',country='".$this->getcountry()."',type='".$this->gettype()."'  where id='".$_SESSION['id']."'");
  
    }
    public function Delete(){
        return parent::RunDML("delete from user  where id='".$_SESSION["id"]."'");
    }
    public function GetAll(){
        $rs=parent::GetData("select * from user");
        return $rs;
    }

    public function UpdatePW(){
        return parent::RunDML("update user set  Password='".$this->getpassword()."' where id='".$_GET["id"]."'");
    }

    public function Login(){
        $rs=parent::GetData("select * from user where (email='".$this->getemail()."' or phone='".$this->getphone()."')  and password ='".$this->getpassword()."'");
        return $rs;
    }
    public function GetByID(){
        $rs=parent::GetData("select * from user where id='".$_SESSION["id"]."'");
        return $rs;
    }
    public function GetByEmail(){
        $rs=parent::GetData("select * from user where email='".$this->getemail()."'");
        return $rs;
    }
    public function GetByIDD($value){
        $rs=parent::GetData("select * from user where id='".$value."'");
        return $rs;
    }

}

?>