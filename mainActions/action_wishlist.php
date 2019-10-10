<?php include "../subActions/dbconnect.php"; ?>

<?php

session_start();

$uid = $_SESSION['uid'];

$query = "SELECT * FROM Products INNER JOIN Wishlist On Wishlist.ProductsID = Products.ProductsID WHERE Wishlist.UserID = $uid";


$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0)
{
    
    $totalPrice = 0;
    echo '
        <thead>
            <tr>
                <th scope ="col"> </th>
                <th scope ="col">Product</th>
                <th scope ="col"  class="text-right">Quantity</th>
                <th scope ="col"  class="text-right">Price</th>
                <th> </th>
            </tr>    
        </thead>
        <tbody>
    ';
    while($row = mysqli_fetch_array($result))
    {
        $product_id = $row["ProductsID"];
        $product_name = $row["ProductsName"];
        $product_price = $row["ProductsPrice"];
        $product_picture = $row["ProductsPicture"];
        $product_quantity = $row["Quantity"];
        
        $totalPrice += $product_price;
        
        // print each row in the table
        
        echo'
            
            <tr>
                <td><img src="'.$product_picture.'" class="img-responsive" style ="width:50px" alt="Image"></td>
                <td>'.$product_name.'</td>
                <td  class ="text-right">  '. $product_quantity.'</td>
                <td  class ="text-right"> $ '. $product_price.'</td>
                <td class="text-right">
                    <button class="btn btn-sm bt-danger"  onClick="delFromWishlist('.$product_id.')"><i class="glyphicon glyphicon-remove"></i></button>
                </td>
            </tr>
        </tbody>
            
        ';
    }
    
  
}
mysqli_close($conn);
?>