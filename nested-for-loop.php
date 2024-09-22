<!-- Nested For Loop in PHP -->

<?php 
for ($i=1; $i<=3; $i++) {
    echo "<h$i>This is heading $i</h$i><br>";
    for ($j=1; $j<=3; $j++) {
        echo "<p>This is paragraph $i, $j</p>";
    }
}
?>