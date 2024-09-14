
<?php 
    // In PHP there are total 8 Types of DataType
    // 1. Integer
    // 2. Float (Double)
    // 3. String
    // 4. Boolean
    // 5. Array
    // 6. Object
    // 7. Resource
    // 8. NULL

    //var_dump();  function se us variable ka DataType pata kar skate hai
    
    $name = "Vivek Chand Nirala";
    echo var_dump($name);
    echo "<br>";

    $age = 21;
    echo var_dump($age);
    echo "<br>";

    $bool = TRUE;
    echo var_dump($bool);
    echo "<br>";

    $floatNumber = 10.10;
    echo var_dump($floatNumber);
    echo "<br>";

    $array = ["a", "b", "c", "d", "e",1,2,true];
    echo var_dump($array);  
    echo "<br>";
    
    $object = (object) ["name" => "Vivek", "age" => 21, "city" => "Delhi"];
    echo var_dump($object);
    echo "<br>";

    $resource = fopen("hello-world.php", "r");
    echo var_dump($resource);
    echo "<br>";

    $nullVariable = null;
    echo var_dump($nullVariable);
    echo "<br>";

?>