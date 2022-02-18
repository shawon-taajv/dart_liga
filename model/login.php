<?php

/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/6/2022
 * Time: 12:23 PM
 */
require_once 'pdo_connect.php';

class login
{
    protected $id, $username, $password, $role;

    public function __construct()
    {
        $this->db = new Connection(); // creating the object of Connection class
        $this->db = $this->db->dbConnect(); // creating the instance of dbConnect method
    }

    public function setId($id){$this->id = $id;}
    public function getId(){return $this->id;}

    public function setUsername($username){$this->username = $username;}
    public function getUsername(){return $this->username;}

    public function setPassword($password){$this->password = $password;}
    public function getPassword(){return $this->password;}

    public function setRole($role){$this->role = $role;}
    public function getRole(){return $this->role;}

    public function addUser(){
        $command = $this->db->prepare("INSERT INTO users VALUES (:id, :username, :password)");
        $command->execute(array(
            ':id'=>$this->getId(),
            ':username'=>$this->getUsername(),
            ':password'=>$this->getPassword()
        ));
        return $command ? true : false;
    }

    public function updateAdmin(){
        $command = $this->db->prepare("UPDATE users SET username = :username, password = :password WHERE id = :id");
        $command->execute(array(
            ':id'=>$this->getId(),
            ':username'=>$this->getUsername(),
            ':password'=>$this->getPassword()
        ));
        return $command ? true : false;
    }

    public function updatePassword(){
        $command = $this->db->prepare("UPDATE users SET password = :password WHERE username = :username");
        $command->execute(array(
            ':password'=>$this->getPassword()
        ));
        return $command ? true : false;
    }

    public function loginAction(){
        $command = $this->db->prepare("SELECT * FROM users as lg WHERE lg.username = :username");
        $command->execute(array(
            ':username'=>$this->getUsername()
        ));
        $result = $command->fetch(PDO::FETCH_OBJ);
        $dbpass =  $result->password;
        $plaintext_password  = '1234';
        $verify = password_verify($plaintext_password, $dbpass);
        $returnresult=array("username" =>$result->username,"password" =>$result->password);
        if($verify){
            $returnresult += [ "id" => $result->id ];
            $returnresult += [ "role" => $result->role ];
        }else{
            echo 'Wrong';
        }
        return array_values($returnresult);
    }

    public function loginCheck(){
        $command = $this->db->prepare("SELECT * FROM users as lg WHERE lg.username = :username AND lg.password = :password");
        $command->execute(array(
            ':username'=>$this->getUsername(),
            ':password'=>$this->getPassword()
        ));
        return $command->fetch(PDO::FETCH_OBJ);
    }
}