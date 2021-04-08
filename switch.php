<?php include 'includes/header.php'?>
<h1>Switch Statement</h1>
    <?php
    $grade='B';
    switch($grade){
        case 'A':
            echo "You Are Super Star";
            break;
        case 'B':
            echo "You Are good";
            break;
        case 'C':
            echo "You are not bad.";
            break;
            default:
            echo "You should work";
            break;
    }
    ?>
<?php  require 'includes/footer.php'?>