<?php include "../subActions/dbconnect.php"; ?>

<?php
    session_start();

if(isset($_SESSION['uid']))
{
    if(isset($_REQUEST['pid']))
    {
        
         $uid = $_SESSION['uid'];
         $pid = $_REQUEST['pid'];
         $quantity = $_REQUEST['quantity'];
        
        //check data from cart prevent duplicated adding
        $cart_sql = "SELECT * FROM Wishlist WHERE UserID = ".$uid." AND ProductsID = ".$pid;
        
        $results = mysqli_query($conn,$cart_sql);
        //if data is exit, update qty
        if(mysqli_num_rows($results) > 0){

            $row = mysqli_fetch_array($results);
            $qtyAdd = $row["Quantity"];
            $quantity += $qtyAdd;

            $update_sql = 'UPDATE Wishlist SET Quantity = '.$quantity.' WHERE UserID = '.$uid.' AND ProductsID = '.$pid;

            $results = mysqli_query($conn,$update_sql);

            if(mysqli_num_rows($results) > 0){
                echo 'Update successfully';
            }
        }
        
        else{
            $add_quey = 'INSERT INTO Wishlist (UserID, ProductsID, Quantity) VALUES ('.$uid.', '.$pid.', 1)';
            $results = mysqli_query($conn, $add_quey);
            if(mysqli_num_rows($results)>0)
            {
                echo'success';
            }
        }
            
        
    }
     
}
mysqli_close($conn);
?>