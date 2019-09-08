<?php include "../subActions/dbconnect.php"; ?>
<?php


   
    $UserName = $_POST["username"];
    $FirstName = $_POST["first_name"];
    $LastName = $_POST["last_name"];
    $Password =password_hash ($_POST["password"], PASSWORD_DEFAULT);
    $Email = $_POST["email"];
    $PhoneNumber = $_POST["phone_number"];
    $Address = $_POST["address"];
    $query = "INSERT INTO UserTable (username, fname, lname, password, email, phonenumber, address) VALUES ('".$UserName."', '".$FirstName."','".$LastName. "', '".$Password. "' , '".$Email."', '".$PhoneNumber."', '".$Address."')";
    echo $query;
    $result = mysqli_query($conn, $query);
    
    //check if the execution was successful
    if(!$result)
    {
        echo "<p>something is wrong with ", $query, "</p>";
    }
    else
    {
        //display an operation sucessful message
        echo "<p> successfully added new record</p>";
    }



?>
