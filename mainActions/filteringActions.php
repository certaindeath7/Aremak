<?php include "../subActions/dbconnect.php"; ?>

<?php
    session_start();
    // if the category is set, categorize the items 
    if(isset($_POST["action"]))
    {   
        
            if(isset( $_POST["category"]))
            {
             
                $category_array = $_POST["category"];
                // combine all elements of an array to a string
                $category_filter = implode("','", $category_array);
                $query ="SELECT * FROM Products WHERE CategoryName IN ('".$category_filter."')";
                $_SESSION['query'] = $query;
                $results = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($results))
                {           $product_id = $row["ProductsID"];
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
            
            else if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
            {
                 $category_array = $_POST["minimum_price"];
                // combine all elements of an array to a string
                $category_filter = implode("','", $category_array);
                $query ="SELECT * FROM Products WHERE ProductsPrice BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'";
                $results = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($results))
                {           $product_id = $row["ProductsID"];
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
                                    <<button style ='float:right;' onclick='sendToCart($product_id)' >Add To Cart</button>
                                    <button style ='float:right;' onclick='sendToWishlist($product_id)' >Add to Wishlist</button> 
                                  </div>
                                </div>
                                </div>
                        ";
                }
            }
        
        //else display al the products
            else
            {
                $category_sql = "SELECT * FROM Products ORDER BY RAND() LIMIT 0,9";

            //Execute sql to the created connection
            $results = mysqli_query($conn, $category_sql);


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
                                  <button style ='float:right;' onclick='sendToWishlist($product_id)' >Add to Wishlist</button> 
                                  </div>
                        </div>
                        </div>
                    ";
                }

            }
            }
    }
mysqli_close($conn);
 ?>





