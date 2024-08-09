<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "Study Buddy";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
// check connection
if(!$conn) {
     die("Please try again.");
}

echo "Connected Successfully";

?>