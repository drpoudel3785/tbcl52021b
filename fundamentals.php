<?php

echo 'hello world' ."<br>";
echo "hello", " ", "world";
echo "<br/>";
$decision = TRUE;
//gettype is used for getting the variables data type
echo gettype($decision) . "<br/>";
$colors = array("red", "green", "yellow", "white", 1);
echo gettype($colors) . "<br/>";
//$Decision is not defined and we will get notice on output
//@ before your variable names will remove the warning and notice
echo @$Decision;

echo $decision . "<br/>";
echo "I am makiting mistake";

echo "<br/>";
echo print_r($colors);

echo "<br/>";
echo serialize($colors);

//php variables destroy by using the unset() , 
unset($decision, $color);
echo $decision;
echo "<br/>";
print_r($color);
echo "<br/>";

//constant can be define by define()
define("PI" , "3.1415");
define("HOST" , "localhost");
echo constant("HOST");
echo "<br/>";
$user = "admin";
$pass = "password1";

if($user == "admin" && $pass == "password")
{
    echo "Credential Match";
}
else {
    echo "Something Error";
}
echo "<br/>";
//getting current data
//https://www.w3schools.com/php/func_date_date.asp
echo date('Y/m/d h:i:s A');
echo "<br/>";

//defining the Asia/Kath time 
//https://www.php.net/manual/en/timezones.php
date_default_timezone_set('Asia/Kathmandu');
echo date('Y/m/d h:i:s A');
echo "<br/>";

//YOu can get the day and month by using date('d') and date('m')
//get the data
//if month is 12 and date between 22 to 25 say Merry Christmas
//otherwise if month is 12 date is between 10-21 say Christam is comming
// otherwise if month is 12 and date is greater than 26 say Christma OVer Happy new year
//otherwise say christmas will comming soon.

?>