<?php
require_once('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
<?php
//there are there functions to kill the session
//unset()
//session_unset()
//session_destroy()

session_unset();
header("Location: login.php");
?>
    
</body>
</html>