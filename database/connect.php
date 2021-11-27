<?php

// Establish a connection to the database

$host = "us-cdbr-east-04.cleardb.com";
$user = "b456ef4793ce2e";
$db_password = "fbe28244";
$db_name = "heroku_99b9a6b9c4e1bf8"; 


$conn = mysqli_connect($host, $user, $db_password, $db_name) or die ("could not connect");



?>