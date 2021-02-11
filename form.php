<?php
//error_reporting(0);
//error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <form name="loginFrm" method="POST" action="">
      <input type="text" name="username" placeholder="you@domain.com"/>
      <input type="text" name="password" placeholder="Password"/>
      <input type="submit" name="submit" value="Login"/>
   </form>


   <?php
   //getting the data from the form
   //$_GET $_POST  $_REQUEST
   if(isset($_POST['submit']))
   {    
    $uname = trim($_POST['username']);
    $upass = trim($_POST['password']);
    $uname1 = filter_var($uname, FILTER_SANITIZE_EMAIL);
    $password1 = filter_var($upass, FILTER_SANITIZE_STRING);
    echo $uname1 ."<br>"; 
    echo $password1 ."<br>"; 
    if(filter_var($uname1, FILTER_VALIDATE_EMAIL))
    {
        if($uname1 == '' || empty($upass))
        {
            echo "Please fill all the fileds";
        }
        else{    
        echo "<pre> Ther username is ". $uname1. " password is ". $upass. "</pre>";
        }   
    }
    else{
    echo "Please enter username in email format.";
    }
   }
   ?>
</body>
</html>