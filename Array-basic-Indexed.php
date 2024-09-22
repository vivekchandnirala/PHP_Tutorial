<!-- Array in PHP Indexed -->
 <?php 
 $user = ["Vivek", "Chand", "Nirala","Ashok","Sunil","Manu","Vivu"];
 echo "length of the Array is ".count($user);
echo "<br/>";

 for($i=0 ; $i<count($user) ; $i++){
     echo $user[$i]."<br/>";
 }
 echo "<br/><br/>";

 foreach($user as $x){
    if($x == "Chand"){
        continue;
     }
     echo $x."<br/>";
    
 }

 echo "<br/><br/>";
 echo "Different Form of using Foreach";
 foreach($user as $y):
     echo $y."<br/>";
 endforeach;
 ?>