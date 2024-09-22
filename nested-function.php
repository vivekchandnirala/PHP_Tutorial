<!-- Nested Function in PHP  -->
 <?php 
 function test(){
     echo "Hello from outer function <br/>";
     function innerTest(){
         echo "Hello from inner function <br/>";
     }
     
 }
 test();
 innerTest();
 ?>