<?php include "../subActions/dbconnect.php"; ?>
<?php
session_start();



if(isset($_SESSION["query"]))
{
        
     $sorting_array = $_POST["choice"];
    
    if($sorting_array == 1)
    {
        $sql = $_SESSION["query"] .'ORDER BY ProductsName';
        
        $results = mysqli_query($conn, $sql);


            if(mysqli_num_rows($results) > 0)
            {
                while($row = mysqli_fetch_array($results)) // retrieve a single row and save it as an array

                {
                    $product_id = $row["ProductsID"];
                    $product_name = $row["ProductsName"];
                    $product_price = $row["ProductsPrice"];
                    $product_stock = $row["UnitsInstock"];
                    $product_description = $row["Description"];
                    $product_picture = $row["ProductsPicture"];
                    echo "       
                    <div class='col-sm-4'>
                        <div class ='panel panel-info'>
                            <div class='panel-heading'>$product_description</div>
                            <div class='panel-heading'>$product_name</div>
                                <div class ='panel-body' style='height : 200px; text-align:center;  overflow: hidden;'>
                                            <a href='detailedProducts.php?pid=".$product_id."'><img src='$product_picture' class='ime-thumbnail each_product'  style='height : 200px;'></a>
                                            
                                        </div>
                                  <button style ='float:right;' onclick='sendToCart($product_id)' >Add To Cart</button>
                                  <button style ='float:right;' onclick='sendToWishlist($product_id)' >Add To Wishlist</button> 
                                  </div>
                        </div>
                        </div>
                    ";
                }

            }
        

              
    }
    else
    {
        $sql = $_SESSION["query"] .'ORDER BY ProductsPrice';
        
        $results = mysqli_query($conn, $sql);


            if(mysqli_num_rows($results) > 0)
            {
                while($row = mysqli_fetch_array($results)) // retrieve a single row and save it as an array

                {
                    $product_id = $row["ProductsID"];
                    $product_name = $row["ProductsName"];
                    $product_price = $row["ProductsPrice"];
                    $product_stock = $row["UnitsInstock"];
                    $product_description = $row["Description"];
                    $product_picture = $row["ProductsPicture"];
                    echo "       
                    <div class='col-sm-4'>
                        <div class ='panel panel-info'>
                            <div class='panel-heading'>$product_description</div>
                            <div class='panel-heading'>$product_name</div>
                                <div class ='panel-body' style='height : 200px; text-align:center;  overflow: hidden;'>
                                            <a href='detailedProducts.php?pid=".$product_id."'><img src='$product_picture' class='ime-thumbnail each_product'  style='height : 200px;'></a>
                                            
                                        </div>
                                  <div class ='panel-heading'>$product_price
                                    <button style ='float:right;' onclick='sendToCart($product_id)' >Add To Cart</button> 
                                    <button style ='float:right;' onclick='sendToWishlist($product_id)' >Add To Wishlist</button> 
                                  </div>
                        </div>
                        </div>
                    ";
                }

            }
    }
}
?>