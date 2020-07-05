<?php
Class Post extends Controller{
    public function __construct()
    {   
        echo "i am constructor of ".__CLASS__." class<br>";
    }
    public function index(){
        echo "i am  index method of ".__CLASS__." class";
    }
    public function show($data=[]){
        echo "i am show method";
        echo "<pre>".print_r($data,true)."</pre>";
    }
}