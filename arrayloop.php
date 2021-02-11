<?php

//Escape Sequence
echo 'Hi It\'s me Dharma'."<br/>";
$price=10.60;
echo "The Price for the item is \$$price"."<br/>";
//string functions
//string functions
/*
strlen() //the length of the string
str_word_count() //Counting number of words in string
strrev() //Reverse of the string
md5() //md5 encryption
sha1() //sha1 encryption
ucfirst() // Upper case for first letter
ucwords() // Initial letter capatilize for every words
strtolower() // Lowercase for  strings
strtoupper() // Uppercase for string
trim() // space remove from first and last of the string
*/
$password = "Pas";
if(strlen($password)>=6 && strlen($password)<=16 )
{
    echo "Password length ok";
}
else
{
    echo "Password must be beteweeen 6-16 character";
}

$stroy ="This is a text stroy whichh is managed by someone else. We are going to learn PHP and MySQL. ";

echo "<br>";
echo str_word_count($stroy)."<br>";

$password="Admin@123";
echo "Encrypted md5 password is: ". md5($password) ."<br/>";
echo "Encrypted sha1 password is: ". sha1($password) ."<br/>";


$encpass = "0e7517141fb53f21ee439b355b5a1d0a";
if(md5($password) == $encpass)
{
    echo "Password Match";
}
else{
    echo "Password Not Match";
}
echo "<br>";
$college = "The British college.";
echo ucfirst($college)."<br/>";
echo lcfirst($college)."<br/>";
echo strtoupper($college)."<br/>";
echo strtolower($college)."<br/>";
echo ucwords($college)."<br/>";


$text = "        hello is this    ";
echo trim($text)."<br>";
//substr — Return part of a string
echo substr($college, 3)."<br>";
echo substr($college, 0, 3)."<br>";
echo substr($college, -6)."<br>";


//array
 /*
    1. Index Array
    2. Associative Array
    3. Multidimensional Array
*/

$colors = array ("Red" , "Green", "Blue", "Black", "White");
echo $colors[3]."<br>";
for($i=0; $i<count($colors);$i++)
{
    echo  $colors[$i]."<br>";
}
$colors[] = "magenta"; 
echo "<hr>";
for($i=0; $i<count($colors);$i++)
{
    echo  $colors[$i]."<br>";
}
echo "<hr>";

foreach ($colors as $k=>$v)
{
    echo "The key is" .$k. " And The Value is ". $v . "<br/>";
}
//loop
  /* 
  1. For loop
  2. While Loop
  3. Do While Loop
  4. foreach Loop
  */

echo "<hr>";
  //Associative Array
  $persons = array("ram"=>22, "Sita"=>23, "shyam"=>24, "Gita"=>25);
  foreach ($persons as $n=>$a)
{
    echo "The Name is " .$n. " And age is ". $a . "<br/>";
}

//MUltidimensional Array
$persons = array("ram"=> array("Age"=>21, "College"=>"TBC", "Father"=>"Hari"),
                  "Sita"=>array("Age"=>22, "College"=>"Triton", "Father"=>"Mahindra"),
                  "shyam"=>array("Age"=>23, "College"=>"Trinity", "Father"=>"Janak"),
                  "Gita"=>array("Age"=>24, "College"=>"Texas", "Father"=>"Prashant")
                );

                foreach($persons as $k => $v)
                {
                    echo "Name is: ".$k. " <br/>";
                    foreach($v as $items => $values)
                    {
                        echo $items. " = " . $values . "<br/>";
                    }
                    echo "<hr/>";
                }