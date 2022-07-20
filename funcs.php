<h1>Functions PHP</h1>
<?php
/*Defining a function */

function showMessage(){
    echo "Grace is such a vibe";
}
showMessage();
echo "<br/>";
showMessage();
echo "<br/>";
showMessage();
echo "<br/>";

function addNums($num1,$num2){
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: $sum";
}
addNums(100,50);
?>