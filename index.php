<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('headpart.php');?>
    <title>Site Layout</title>
</head>
<body>
    <div class="container">
       <div class="row">
           <?php include('banner.php');?>
       </div>

       <div class="row">
         <?php include('menu.php');?>
       </div>

       <div class="row">
          <?php include('sidebar.php');?>
           <div class="col-xl-8">
          Main Content
           </div>
       </div>

       <div class="row">
          <?php include('footer.php');?>
       </div>
    </div><!-- Conter-->
    
</body>
</html>