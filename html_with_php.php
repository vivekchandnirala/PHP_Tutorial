<!-- HTML in PHP -->
<?php 
  echo "<h1 style='color:red'>My Name is Vivek</h1>";

  echo "<p style='font-size: 20px ; color: blue '>I am a software engineer</p>";
  $cg = "brown";
?>

<!-- PHP in HTML -->

<h2 style="color:Green">
    <?php 
        echo "I am in HTML Tag";
        $name = 'Lovely Professional University';

        echo "<br>";
        echo "<h3 style='color:Orange'>My College is ,$name</h3>";
    ?>
</h2>

<h3 style="color:<?php echo $cg?>">
    <p>
        This is Paragraph of H3 Tag
    </p>
</h3>