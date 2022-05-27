<?php
// PHP script goes here

/*
    Creating variables 
    $<variable-name>
    We don't need to informa the data type in php
*/

$str = "Hello and Welcome";
$num = 5;
$float = 7.6;

echo "<h1>string:  $str </h1>";
echo "<h2>number: $num </h2>";
echo "<h3>float: $float </h3>";

// Creating a array in PHP using the array() function
$laptop_brands = array("HP", "Lenovo", "Asus", "MacBook");
// The var_dump() function dumps information about one or more variables.
echo var_dump($laptop_brands);
echo "<br><br>";
echo "$laptop_brands[0], $laptop_brands[1], $laptop_brands[2], $laptop_brands[3]";

foreach($laptop_brands as $key => $element) {
    echo "<h1>$key - $element </h1>";
}

// Creating/Defining a constant variable using the define(<variable-name>, <value>) function
define("laptops", "Hp, Lenovo and Asus"); // String
echo laptops;

// If Else Elseif
define("laptops_arr", ["Hp", "Lenovo", "Asus"]); // Array
echo "<br>";
echo var_dump(laptops_arr);
echo "<br>";
echo laptops_arr[1];

$t = date("H:m");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
  echo $t;
}

// User defined functions
echo "<br><br>";

function familyName($fname) {
    echo "$fname <br>";
}

$names = array("Jani", "Hege", "Stale", "Kai Jim", "Borge");

foreach($names as $ele){
    familyName($ele);
}

?>