
<?php 
$strings = ["apple","banana","cherry","apple","date","banana","fig","grapes","cherry"];
$newarray = array_unique($strings); // From this it will Remove Duplicates
sort($newarray);  // From this set in Alphabetical order

echo "Second string: ".$newarray[1]."<br/><br/>";

echo "Second-to-last String: ".$newarray[count($newarray)-2];

?>