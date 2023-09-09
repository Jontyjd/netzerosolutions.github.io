<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$csvData = "$name,$email,$message\n";


$csvFile = 'form-entries.csv';


file_put_contents($csvFile, $csvData, FILE_APPEND | LOCK_EX);


header('Location: index.html');
exit();
?>
