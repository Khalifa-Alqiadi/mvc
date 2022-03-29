<?php


class validation{


  function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

 function validateNmae($name):bool{
    if(strlen($name)>0 && strlen($name)<20)
    {return true;}
    else
    {return false;}
 }
 function validateEmail($email):bool{
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {return true;}
    else
    {return false;}
 }
 function validatePassword($password):bool{
    if(strlen($password)>0 &&strlen($password) < 20)
    {return true;}
    else
    {return false;}
 }
 function matchPass($password1, $password2):bool{
    if($password1 == $password2)
    {return true;}
    else
    {return false;}
 }
}

?>