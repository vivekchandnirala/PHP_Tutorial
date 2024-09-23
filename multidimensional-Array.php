<!-- Multi-Dimensional Array In PHP  -->

<?php 
 $users = [
    [1,"Vivek","vivek@gmail.com","gaya"],
    [2,"Nirala","nirala@gmail.com","Bihar"],
    [3,"Sunil","sunil@gmail.com","fatehpur"]
 ];

 foreach($users as $user){
     echo "ID: ".$user[0]."<br>";
     echo "Name: ".$user[1]."<br>";
     echo "Email: ".$user[2]."<br>";
     echo "Country: ".$user[3]."<br><br>";
 }
?>