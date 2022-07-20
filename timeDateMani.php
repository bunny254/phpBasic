<?php require "includes/header.php"?>
<h1>Get Current Time and Date </h1>
<?php
$datenow=getdate();
echo "Today's Date: ".$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'<br/>';

echo time()
?>
