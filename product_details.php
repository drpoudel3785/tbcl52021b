<?php
//checking the user is following the hyperlink or not
if(isset($_GET['cat']) && isset($_GET['user']))
{
    $category = $_GET['cat'];
    $username = $_GET['user'];
}
else
{
    //redirect to product 
    header('Location: product.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$username?></title>
</head>
<body>
<?php
  echo "The Category is: ". $category . "<br/>";
  echo "The Username  is: ". $username . "<br/>";
  ?> 
</body>
</html>