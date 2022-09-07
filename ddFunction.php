<?php 

function dd($data){
    echo '<pre>';
    var_dump($data);
    echo "</pre>";
    die();
}
const weight=100;
dd(weight);

?>

