<?php

class User
{
private  $name;
private $email;
public $role;

    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setRole($role): void
    {
        $this->role = $role;
    }

    public function isAdmin(){
        if ($this->role == 1){
            return "Admin";
        }
        else if ($this->role== 2){
            return "người dùng nhập bình thường";
        }
    }
    public function getInfo(){
        return "Name: ".$this->name. " Email: " .$this->email."Role: ".$this->role;
    }

}