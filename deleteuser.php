<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Users</title>
</head>
<body>

<?php
if(isset($_GET['did']))
{
    $deleteid = addslashes(trim($_GET['did']));
    $sql = "DELETE FROM users WHERE id = $deleteid";
    include_once('connection.php');
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($qry)
    {
        header("Location: selectusers.php?msg=User $deleteid Deleted Successfully");
    }
}
else{
    header("Location: selectusers.php");
}
?>   
</body>
</html>