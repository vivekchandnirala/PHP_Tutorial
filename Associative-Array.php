<!-- Associative Array in PHP  -->
 <?php 
 $user = ["name"=>"Vivek",
            "age"=>"20",
            "gender"=>"Male",
            "city"=>"Gaya",
            "country"=>"India",
            "Phone"=>"123-456"
];

 foreach($user as $key => $value){
    echo $key." is ".$value. "<br>";
 }
 ?>