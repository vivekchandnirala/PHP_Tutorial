<!-- Logical Condition in PHP -->
 <?php 

 $a = 10;
 $b = 20;
 $c = 50;

 if($a ==10 && $b ==20 && $c ==50){
     echo "All condition are true";
 }else if($a ==10 || $b ==30){
     echo "At least one condition is true";
 }else if($a ==10 xor $b ==30){
     echo "At least one condition is false";
 }else if($a!=50){
     echo "Condition is false";
 }else{
     echo "No condition is met";
 }
 ?>