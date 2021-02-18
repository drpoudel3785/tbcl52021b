<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting data from URL</title>
</head>
<body>
   <?php
       $cat = "music";
       $user = "Dharma";
       echo "<a href=product_details.php?cat=$cat&user=$user>$user</a> | ";
       //product array
       $products  = array ("music"=>"Somesh", "book"=>"Sita", "Films"=>"Ramesh");
   foreach($products as $k => $v)
   {
       echo "<a href=product_details.php?cat=$k&user=$v>$v</a> | ";
   }
   ?>
    
</body>
</html>