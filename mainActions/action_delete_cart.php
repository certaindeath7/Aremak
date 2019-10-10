<?php include "../subActions/dbconnect.php"; ?>

<?php
session_start();
// get the id parameter from URL
$pid = $_REQUEST["pid"];
$uid = $_SESSION["uid"];
     
$query= 'DELETE FROM Carts WHERE ProductsID = '.$pid.' AND UserID = '.$uid;

$results = mysqli_query($conn,$query);

if($results){
    echo 'true';
} 

mysqli_close($conn);

?>   