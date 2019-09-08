<?php

include "../subActions/dbconnect.php";
    
        $category_sql = "SELECT * FROM Category";

        //Execute sql to the created connection
        $results = mysqli_query($conn, $category_sql);

        if(mysqli_num_rows($results) > 0)
        {
            echo "<a href='#'><h4>Categories</h4></a>" ;
            
            while($row = mysqli_fetch_array($results)) // retrieve a single row and save it as an array
                
            {
                $category_id = $row['CategoryID'];
                $category_name= $row['CategoryName'];
                
                echo "<div class='col-4'>";
                    echo "<div class='list-group' id='list-tab' role='tablist' class='affix'>";
                
                            echo " <a class=\"list-group-item list-group-item-action active\" href \"#list-profile\" data-toggle =\"list\" role=\"tab\" aria-controls=\" $category_name\" onclick=\"loadDoc($category_id)\">$category_name</a>";
                    echo "</div>";
                echo "</div>";
                
                echo "<div class='col-8'>";
                
                    echo "<div class='tab-content' id='nav-tabContent'>";
                        echo "<div class='tab-pane fade show active' role='tabpanel' aria-labelledby='$category_name'>...</div>";
                    echo "</div>";
                 echo "</div>";
               
            }
           
        }
    

?>

