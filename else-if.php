<!-- Else If Condition In PHP -->
 <?php 
 $marks = 4;

 if($marks >= 90) {
     echo "Grade: A";
 }elseif($marks>50){
     echo "Grade: B";
 }elseif($marks>30){
     echo "Grade: C";
 }else{
     echo "Grade: F";
 }
 
 ?>