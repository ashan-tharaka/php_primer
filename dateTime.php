<?php include 'includes/header.php'?>
    <h1>Date and Time</h1>
    <?php
    $datenow=getdate();
    echo $datenow['mday'];
  echo "<br>";
    echo $datenow['mon'];
    echo"<br>";
    echo $datenow['year'];
    echo"<br>";
    echo "Today's date is: ".  $datenow['mday'].'/'.   $datenow['mon'].'/'.  $datenow['year'];
    echo"<br>";
    echo time();
    ?>
<?php  require 'includes/footer.php'?>