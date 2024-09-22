<!-- Operators in PHP -->
 <?php
// Athematic operator
$a = 20;
$b = 10;
echo "Athematic operator";
echo "<br>";
echo "Addition $a + $b is ", $a+$b;
echo "<br>";   
echo "Subtraction $a - $b is ", $a-$b;
echo "<br>";
echo "Multiplication $a * $b is ", $a*$b;
echo "<br>";
echo "Division $a / $b is ", $a/$b;
echo "<br>";echo "<br>";

// Assignment operator

$x = 100;
$y = 50;
echo "Assignment operator";
echo "<br>";

echo "Value of X after x+=y is ", $x+=$y;
echo "<br>";
echo "Value of X after x-=y is ", $x-=$y;
echo "<br>";
echo "Value of X after x*=y is ", $x*=$y;
echo "<br>";
echo "Value of X after x/=y is ", $x/=$y;
echo "<br>";echo "<br>";


// Comparison Operators

echo "Comparison operator";
echo "<br>";
echo "Is $x greater than $y? ",var_dump( $x>$y);
echo "<br>";
echo "Is $x less than $y? ", var_dump( $x<$y);
echo "<br>";
echo "Is $x equal to $y? ", var_dump( $x==$y);
echo "<br>";
echo "Is $x not equal to $y? ", var_dump($x!=$y);
echo "<br>";
echo "Is $x greater than or equal to $y? ", var_dump($x>=$y);
echo "<br>";
echo "Is $x less than or equal to $y? ", var_dump($x<=$y);
echo "<br>";
echo "Is $x greater than or equal or less than $y? ", var_dump($x<=>$y);
echo "<br>";echo "<br>";


//Increment and decrement Operators

$z = 10;
echo "Increment operator";
echo "<br>";
echo "Value of Z after ++z is ", ++$z;
echo "<br>";
$z = 10;

echo "Value of Z after z++ is ", $z++;
echo "<br>";


echo "Decrement operator";
$z = 10;

echo "Value of Z after --z is ", --$z;
echo "<br>";
echo "Value of Z after z-- is ", $z--;
echo "<br>";echo "<br>";

//String and String Operators

$str1 = "Hello";
$str2 = "World";

echo "String operator";
echo "<br>";

echo "Concatenate $str1 and $str2 is ", $str1.$str2;
echo "<br>";
echo "Length of $str1 is ", strlen($str1);


?>