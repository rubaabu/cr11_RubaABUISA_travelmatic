<?php
$servername = "localhost";
$username = "root"; 
$password = "" ; 
$dbname = "cr11_rubaabuisa_travelmatic";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error());
}

?>