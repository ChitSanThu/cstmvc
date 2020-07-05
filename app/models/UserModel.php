<?php 
class UserModel{
    private $db;
    
    public function __construct()
    {
        $this->db=new Database();

    }
    public function getAllUser(){
        $this->db->query("SELECT * FROM users");
        return $this->db->multiSet();
    }
}