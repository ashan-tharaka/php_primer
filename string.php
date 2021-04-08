<?php include 'includes/header.php'?>
    <h1>Strings</h1>
    <?php
    //concatenation strings
    $fname="ashan";
    $lname="tharaka";
    $name="ashan tharaka";
    echo $fname." ".$lname;
    echo "<hr>";
    //string transformation
    echo "<p>".ucfirst($fname)."</p>";
    echo "<p>".ucwords($name)."</p>";
    echo "<p>".strtoupper($name)."</p>";
    echo "<p>Repeat String:".strtoupper(str_repeat("a",5))."</p>";
    echo "<p>Length is :".strlen($name)."</p>";
    

    ?>
<?php require 'includes/footer.php'?>