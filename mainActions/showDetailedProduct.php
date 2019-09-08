<?php include "../subActions/dbconnect.php";?>

<?php
if(isset($_POST["product_id"]))    
{ 
    $pid = $_POST["product_id"];

$query  = "SELECT * FROM Products WHERE ProductsID ='$pid'";
$result = mysqli_query($dbconnect, $query);

if (mysqli_num_rows($result)>0)
{
    while ($row = mysqli_fetch_array($result))
    {
        $pid =  $row["ProductsID"];
        $product_name = $row["ProductsName"];
        $product_price = $row["ProductsPrice"];
        $product_stock = $row["UnitsInstock"];
        $product_description = $row["Description"];
        $product_picture = $row["ProductsPicture"];
        
     echo "

  <div class='col-md-10'>
                <div class='panel panel-default'>
                  <div class='panel-heading'>$product_name</div>
                    <div class='panel-body' style=' height: auto; overflow: hidden;'><img class='img-responsive' src='$product_picture'/></div>
                     <div class='panel-heading'>$product_price 
                      <button style='float:right;' class='btn btn-info btn-xs'>Add To Cart</button>
                    </div>
                </div>    
        </div>
        ";
           
    }
}
}
?>




