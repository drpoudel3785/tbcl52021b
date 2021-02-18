<?php
$uname = "user";
$upass = md5("user");
$uemail = "user@example.com";
$urole = 2;
$status =1;
//preparing the sql
$sql  = "INSERT INTO users(username , password, email, role, status) VALUES('$uname', '$upass', '$uemail', '$urole' , '$status')";
//make a connection to db
include('connection.php');
//make a query mysqli_query()
$qry = mysqli_query($conn, $sql) or die("Data Insertion Error");
if($qry)
{
    echo "Data Inserted Successfully";
}
//close a connection mysqli_close()
mysqli_close($conn);
?>