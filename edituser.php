<?php
require_once('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
</head>
<body>
<p> Welcome, <?php echo $_SESSION['uname']; ?> | <a href="logout.php">Logout</a> </p>

<hr/>
<?php
if(isset($_GET['eid']))
{
    $editid = $_GET['eid'];
    $sql = "SELECT * FROM users WHERE id=$editid";
    include_once('connection.php');
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($qry)
    {
        foreach($qry as $k)
        {
            $uid = $k['id'];
            $uname = $k['username'];
            $upass = $k['password'];
            $uemail = $k['email'];
            $urole = $k['role'];
            $ustatus= $k['status'];
        }
        ?>
        <form method="POST" action="edituserprocess.php" name="editUser">
        <fieldset>
        <legend>Edit <?php echo $uname; ?> </legend>
        <input type="hidden" name="id" value="<?php echo $uid;?>" />
        <input type="text" name="un" value="<?php echo $uname; ?>"/> <br/>
        <input type="text" name="password" placeholder="Leave blank if you dont want to chagne password"/> <br/>
        <input type="email" name="email" value="<?php echo $uemail; ?>"/> <br/>
        <select name="role" size=1>
          <option value="1" <?php if($urole==1) echo "selected"?>>Admin</option>
          <option value="2" <?php if($urole==2) echo "selected"?>>User</option>
          <option value="3" <?php if($urole==3) echo "selected"?>>Guest</option>
        </select>
        <br/>
        <input type="radio" name="status" value="1" <?php if($ustatus==1) echo "checked"?> >Active
        <input type="radio" name="status" value="0" <?php if($ustatus==0) echo "checked"?>>Deactive
        <br/>
       
        <input type="submit" name="submit" value="Update Record"/> <br/>
        </fieldset>
        </form>
        <?php
    }
}
else
{
    header("Location: selectusers.php");
}
?>
    
</body>
</html> 