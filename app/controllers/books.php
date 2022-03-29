<?php
require_once 'controller.php';
class Books extends Controller{
    public function __construct(){
        // $user=$this->model('Book');
        // $userName=$user->selects();
        // $this->view('about',$userName); 
    }
    function show(){
        $user=$this->model('Book');
        $userName=$user->selects();
        $this->view('about',$userName);
    }
    public function add_user(){
         $error = '';
        if(isset($_POST['add'])){
            $name = $_POST['name'];
            if(empty($name)){
                // global $error;
                $error = "UserName not is Empty";
                
            }
        }
        $this->view('about',$error);
    }
}
?>