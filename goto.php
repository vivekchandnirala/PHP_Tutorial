<!-- goto in PHP  -->
 <?php 
 for ($i = 0; $i <= 10 ; $i++) {
    echo $i. "<br>";
    if($i == 5){
        goto end;
    }
 }

 end:
 echo "Loop stopped at 5";
 ?>