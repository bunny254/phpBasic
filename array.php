<?php require "includes/header.php"?>

<h1>ARRAYS in PHP</h1>
<?php
$fruits=array("banana", "apple", "orange");
print_r($fruits);
foreach ($fruits as $fruit) {
    echo "<br>$fruit";
}
?>