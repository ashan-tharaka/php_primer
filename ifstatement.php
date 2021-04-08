<?php include 'includes/header.php'?>
<body>
    <?php
    
    echo '<h2>If Statement</h2>';
    $marks=24;
    if($marks>=50){
        echo "<h1 style='color:blue'>You have Passed</h1>";

    }
    else if($marks<50){
        echo "<h1 style='color:red'>You Have Failed</h1>";
    }

    ?>
    <?php
    echo "ashan";
    ?>
<?php  require 'includes/footer.php'?>