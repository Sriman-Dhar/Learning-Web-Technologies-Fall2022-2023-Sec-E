<?php 

    $username = $_POST['UserName'];
    $password = $_POST['password'];

        if (strlen($username)>=2 && ctype_alnum($username) || is_numeric($username) || preg_match('[_-]', $username)) {

            if (strlen($password)>=8 && preg_match('(@#$%)', $name)) {
         
             if ($username == "admin" && $password == "admin") 
             {
                 echo "<h1>WELCOME USER</h1>";
             }else{
         
                 echo "XXXXX not found XXXXX";
         
             }
         
            }
         
            else
            {
                echo "invalid password";
            }
         
         } else 
         {
             echo "invalid input type";
         }
    
?>