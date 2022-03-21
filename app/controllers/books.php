<?php
require_once 'controller.php';
class Books extends Controller{
    public function __construct(){
        $user=$this->model('Book');
        $userName=$user->selects();
        $this->view('index',$userName); 
    }
    function show(){
        $user=$this->model('Book');
        $userName=$user->selects();
        $this->view('index',$userName);
    }
}
?>