<?php


$servername = "localhost";
$user = "root";
$password = "";
$dbname = "Aremak";

//create connection
$conn = mysqli_connect($servername, $user, $password, $dbname);

if(!$conn)
{
    die("Connection error: ".mysqli_connect_error());
}
?>