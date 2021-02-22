<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get All Users</title>
</head>
<body>
<a href="insusers.php">Add Users</a>
<?php
  //selecting all users
  $s = "SELECT * FROM users ORDER BY id DESC";
  //connection to db
  include("connection.php");
  //execute query
  $q = mysqli_query($conn, $s) or die(mysqli_error());
  //Counting the number of records which will math the sql query
  $count = mysqli_num_rows($q);
   if($count>=1)
   { 
      /* while($r = mysqli_fetch_array($q))
       {
           echo $r['id']. " ";
           echo $r['username']. " ";
           echo $r['password']. " ";
           echo $r['email']. " ";
           echo $r['role']. " ";
           echo $r['status']. " ";
           echo "<br/>";
       }
       */
if(isset($_GET['msg']))
{
    echo "<h2>". $_GET['msg'] ."</h2>";
}
       echo "<table border=1>";
       echo "<tr>";
       echo "<th>ID</th>";
       echo "<th>Username</th>";
       echo "<th>Password</th>";
       echo "<th>Email</th>";
       echo "<th>Role</th>";
       echo "<th>Status</th>";
       echo "<th>Actions</th>";
       echo "</tr>";

       $q = mysqli_query($conn, $s) or die(mysqli_error());
       while($rw = mysqli_fetch_assoc($q))
       {
           echo "<tr>";
           echo "<td>". $rw['id']. "</td>";
           echo "<td>". $rw['username']. " </td>";
           echo "<td>". $rw['password']. "</td> ";
           echo "<td>". $rw['email']. "</td> ";
           echo "<td>". $rw['role']. "</td> ";
           echo "<td>". $rw['status']. "</td> ";
           echo "<td>
           <a href=edituser.php?id=".$rw['id'].">EDIT</a> | 
           <a href=deleteuser.php?id=".$rw['id'].">DELETE</a>
           </td>";
           echo "</tr>";
       } 
       echo "</table>";
   } //count
else
{
    echo "No Records Found";
}
?>
</body>
</html>
