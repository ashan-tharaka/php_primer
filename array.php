<?php include 'includes/header.php'?>
    <h1>Arrays</h1>
    <?php
    
    $numbers=array(1,3,5,7,7,7);
    echo $numbers[2];
    $count=count($numbers);
    echo "<p>Size of array: $count</p>";
    $sum=0;
    for($x=0;$x<$count;$x++){
      $sum+=$numbers[$x];
    }
    echo "<p>The sum is $sum</p>";

    ?>
    

    <?php  require 'includes/footer.php'?>