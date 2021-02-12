<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Table</title>
</head>
<body>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" name="priceTable">
    <input type="text" name="num" value="<?php if(isset($_POST['num'])) { echo $_POST['num']; } ?>" plaeholder = "Enter Price?"/>
    <input type="submit" name="sumbit" vlaue="Get Pice Table"/>
</form>
<?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     if(filter_var($_POST['num'], FILTER_VALIDATE_INT))
     {
     $price = $_POST['num'];
    echo "<table border=1>";
    for($i=1;$i<=10;$i++)
        {
        echo "<tr>";
        echo "<td>". $i*$price."</td>";
        echo "</tr>";
        }
    echo "</table>";
     }
     else
     {
         echo "Pls enter the valid number";
     }
 }
 ?>

    
</body>
</html>