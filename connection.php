<?php
//mysqli_connect()
//mysqli PDO

$h = "localhost";
$u = "root";
$p = "";
$d = "l52021b";
$conn = mysqli_connect($h, $u, $p, $d) or die("Error While Connecting to Database");

//the code gives the output blank if connection is success otherwise you will get error 
?>