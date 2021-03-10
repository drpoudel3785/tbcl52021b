<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
    //collecting data from form
    $username= $_POST['username'];
    $password=md5($_POST['password']);
    if(isset($_POST['remember']))
    {
        //setcookie()
        setcookie("uname",$username, time()+(60*60*24*7),"/");
        setcookie("upass",$_POST['password'], time()+(60*60*24*7),"/");
    }
    //sql statement
    $sql = "SELECT * FROM users WHERE username = '$username' && password='$password' && status=1";
    //include connnection
    include('connection.php');
    //making a query
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    //Counting the number of records
    $count =  mysqli_num_rows($qry);
    if($count==1)
    {
        //destroy previous session
        session_unset();
        session_regenerate_id();
        //declaring seesion
        $_SESSION['uname'] = $username;
        
       header("Location: selectusers.php");
    }
    else{
        echo "Login Failed";
    }
}
?>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>" name="login">
    <fieldset>
    <legend>Login</legend>
    <input type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE['uname'])) echo $_COOKIE['uname'];?>" /><br/>
    <input type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['upass'])) echo $_COOKIE['upass'];?>" /><br/>
    <input type="checkbox" name="remember" value="1"/>Remember Me<br/>
    <input type="submit" name="submit" value="Login" /><br/>
    </fieldset>
    </form>
</body>
</html>