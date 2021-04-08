<?php include 'includes/header.php'?>



<h1>Home</h1>

<br>
<?php
echo 'hello php';
echo '</br>';
echo 'second line';
echo '</br>';

?>
<?php
//variable
$name="ashan tharaka";
$age=20;
echo $name;
echo '<h1>My Name Is: '.$name.'</h1>';
echo '<h2>My Age Is: '.$age.'</h2>';
echo "ashan";

?>
<br>
<button type="button" class="btn btn-dark">Click Me</button>
<button type="button" class="btn btn-danger">Click Me</button>
<a href="https://www.heroku.com" class="btn btn-success" target="_blank">Heroku.com</a>
<?php  require 'includes/footer.php'?>