<?php
if(isset($_POST['submit']))
{
$uname = $_POST['name'];
$upass = md5($_POST['password']);
$uemail = $_POST['email'];
$urole = 2;
$status = 0;
//preparing the sql
$sql  = "INSERT INTO users(username , password, email, role, status) VALUES('$uname', '$upass', '$uemail', '$urole' , '$status')";
//make a connection to db
include('connection.php');
//make a query mysqli_query()
$qry = mysqli_query($conn, $sql) or die("Data Insertion Error");
if($qry)
{
    header('Location: selectusers.php?msg=User Added Successfully');
}
//close a connection mysqli_close()
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Users</title>
</head>
<body>
<form method="POST" action="" name="userReg">
    <fieldset>
    <legend>USer Registration</legend>
        <input type="text" name="name" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>
        <input type="email" name="email" placeholder="you@example.com"/>
        <input type="submit" name="submit" value="Register"/>
</form>
    
</body>
</html>