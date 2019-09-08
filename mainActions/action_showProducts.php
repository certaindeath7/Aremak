<?php include "../subActions/dbconnect.php" ?>  
<?php
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
                                  <div class ='panel-heading'>$product_price
                                    <button style ='float:right;' class ='btn btn-info btn-xs'>Add To Cart</button>
                                  </div>
                        </div>
                        </div>
                    ";
                }

            }
?>