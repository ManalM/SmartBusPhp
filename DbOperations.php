<?php
 class DbOperations{

        private $con;

        function __construct(){

            require_once 'DbConnect.php';

            $db = new DbConnect();

            $this->con = $db->connect();

        }

        /*CRUD -> C -> CREATE */

public function getStudent($user){
  $stmt = $this->con->prepare("SELECT child_name FROM drivers_student where id_driver = ?");
  $stmt->bind_param("s",$user);
  $stmt->execute();
  return $stmt->get_result()->fetch_assoc();
}
public function getStudentInfo($username){
    $stmt = $this->con->prepare("SELECT child_name,name,address,phone,health FROM parent_table WHERE child_name = ?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
        public function userLogin($username, $pass){
            $password = md5($pass);
            $stmt = $this->con->prepare("SELECT id FROM user WHERE username = ? AND password = ?");
            $stmt->bind_param("ss",$username,$pass);
            $stmt->execute();
            $stmt->store_result();
            return $stmt->num_rows > 0;
        }

        public function getUserByUsername($username){
            $stmt = $this->con->prepare("SELECT * FROM user WHERE username = ?");
            $stmt->bind_param("s",$username);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

    
public function getDriver($childName){
  $stmt = $this->con->prepare("SELECT username FROM `drivers_student` WHERE child_name=?");
  $stmt->bind_param("s",$childName);
  $stmt->execute();
  return $stmt->get_result()->fetch_assoc();
}

    }
?>
