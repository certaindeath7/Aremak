<?php include "../subActions/dbconnect.php"; ?>

<?php
session_start();
// get the id parameter from URL

$uid = $_SESSION["uid"];
     
$query= 'DELETE FROM Carts WHERE UserID = '.$uid;

$results = mysqli_query($conn,$query);

if($results){
    echo 'true';
} 

mysqli_close($conn);

?> 