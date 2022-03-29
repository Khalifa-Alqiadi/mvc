<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
require_once 'controller.php';
require_once 'validation.php';
class Users extends Controller 
{
   public $valid;

    public function __construct()
    {

        $this->valid = new validation();

        echo "<h1>inside users controller construct</h1>";
    }
    function index()
    {
        $this->view('index',);
       
    }
    function mvc(){
        $url = trim($_GET['url'], 'users');
        header("location: $url");
    }

    function add_user()
    {

        if(isset($_POST['submit']))
        {
            $userName= $this->valid->test_input($_POST['name']);
            $password=$this->valid->test_input($_POST['password']);
            $password2=$this->valid->test_input($_POST['password2']);
            $email=$this->valid->test_input($_POST['email']);
           
            
           if(
               $this->valid->validateNmae($userName) &&
               $this->valid->validateEmail($email) &&
               $this->valid->validatePassword($password) &&
               $this->valid->matchPass($password, $password2)
               ){
                // $type='success';
                $message="<div class='alert alert-success'>user created successful</div>";
                $this->redirectHome($message);
                // $this->view('feedback',array('type'=>$type,'message'=>$message));

            }
            $message= [];
            if($this->valid->validateNmae($userName)==false){
                $message []="User Name Error";
            }
            if($this->valid->validateEmail($email)==false){
                $message []="Email Error";
            }
            if($this->valid->validatePassword($password)==false){
                $message[]="password Error";
            }
            if($this->valid->matchPass($password, $password2) == false){
                $message[]="password not match";
            }
            $this->view('register', $message);
            
        }   
    }
    function register()
    {
        $this->view('register');
    }

    function list_all()
    { $users=$this->model("user");
        $result=$users->select();
        $this->view('users_table',$result);

    }

}
