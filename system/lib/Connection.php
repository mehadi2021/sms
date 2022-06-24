<?php 
abstract class Connection
{
 Private $host="localhost";
 Private $username="root";
 Private $password="";
 Private $dbname="mehadi";

 Protected $db;
   function __construct() 
  {
   $this->CreateConnection();
  }
  public function CreateConnection()
  {
   try{
    $this->db=new PDO("mysql:dbname=".$this->dbname.";host=".$this->host,$this->username,$this->password);
   }
   catch(PDOException $ex)
   {
     echo $ex->getMessage();
   }
  }
 
  
}

?>