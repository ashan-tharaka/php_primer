<?php include 'includes/header.php'?>
<h1>For Loop</h1>

    <?php
    $sum=0;
    for($count=1;$count<=10;$count++){
        $sum+=$count;
      
    }
    echo "The sum is ".$sum."<br>";
    ?>
<?php  require 'includes/footer.php'?>