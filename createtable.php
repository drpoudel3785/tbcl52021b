<?php
$sql = "
CREATE table IF NOT EXISTS category (
    id int not null primary key auto_increment,
    name varchar(50) not null,
    description varchar(50) not null,
    status tinyint(1)
);
";
include('connection.php');
$qry = mysqli_query($conn, $sql) or die(mysqli_error());
if($qry)
{
    echo "Table Created Succussfully";
}
?>