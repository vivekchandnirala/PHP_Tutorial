<!-- Parametric Function in PHP  -->
 <?php 
 function sum($a, $b) {
    echo $a+$b;
    echo "<br>";
}

sum(10, 20);
sum(100,89);

function user($name,$color){
    echo "<h1 style='color:red'>Hello $name, your favorite color is $color</h1>";
    echo "<br>";
}

user("Vivek","Blue");
 ?>