<?php include 'includes/header.php'?>
    <h1>Functions</h1>
    <?php
    //define the function
    function writeMessage(){
        echo "ashan";

    }
//calling the function
    writeMessage();
    echo"<br>";

    function add($num1,$num2){
        echo $num1+$num2;

    }

    add("34","56");
    echo "<br>";
    $num=400;
    function changeNum($num){
        $num+=100;
        echo $num;
    }
changeNum($num);
echo "<br>";
function returnProduct($num1,$num2){
    $pro=$num1*$num2;
    return $pro;

}
$returnpro=returnProduct(12,10);
echo $returnpro;


    ?>
<?php  require 'includes/footer.php'?>