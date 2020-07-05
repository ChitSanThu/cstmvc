<?php
Class Home extends Controller{
    public function __construct()
    {   
        $this->userModel=$this->model("UserModel");
    }
    public function index(){
        $data=$this->userModel->getAllUser();
        $this->view('home/index',$data);
    }
}