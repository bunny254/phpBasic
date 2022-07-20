<?php require "includes/header.php"?>
<h1>STRING OPERATIONS in PHP</h1>
<?php
$name='allan'.' ';
$sentence="allan is a pastor";
echo strtoupper($name).'<br/>';
echo ucfirst($name).'<br/>';
echo str_word_count($name).'<br/>';
echo 'Repeat Word'." ".str_repeat($name,3).'<br/>'; 
echo 'Repeat Word'." ".strtoupper(str_repeat($name,3)).'<br/>';
echo trim(" KIM ").'<br/>';
echo str_replace("pastor","hoe",$sentence)  
?>