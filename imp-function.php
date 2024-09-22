<!-- Some Important Functions which is Inbuilt -->

<?php 
$name = "Vivek Chand Nirala";
echo strlen($name); //It tell the length of the string
echo "<br/>";

$var = 10;
echo var_dump($var); // var_dump tells the Data Type
echo "<br/>";

//to Print the Date
echo date("d-m-Y"); // It will print the current date
echo "<br/>";


// To check the DataType 
$st = "PHPExcel";
echo is_string($st);  // It will print the 1 if the $st is a string otherwise it will print 0
echo "<br/>";

$num = 10;
echo is_int($num); // It will print the 1 if the $num is a integer otherwise it will print 0

// to print the Random Number

echo rand(); // It will print a random number between 0 and 1000
echo "<br/>";

// Whenever we use die(); or exit() function, then the Code will not move from forward
?>