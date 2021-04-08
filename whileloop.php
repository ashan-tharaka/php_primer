<?php include 'includes/header.php'?>
    <h1>While Loops</h1>
    <?php
    $grade=1;
    while($grade<=10){
        echo "<p>$grade</p>";
        $grade++;

    }
    ?>
    <h1>Do-While Loops</h1>
    <?php
    $grade=1;
    do{
        echo "<p>$grade</p>";
        $grade++;
    }while($grade<=10);
    ?>
<?php  require 'includes/footer.php'?>