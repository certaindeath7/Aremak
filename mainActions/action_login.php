<?php include "../subActions/dbconnect.php"; ?>
<?php

    
     
    $UserName = $_POST["username"]; 
    $Password = $_POST["password"];
   
    $query = "SELECT Password, UserName FROM UserTable Where username ='".$UserName."' LIMIT 1";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result);
        if(password_verify($Password, $row["Password"]))
        {    
            session_start();
            $_SESSION["username"] = $row["UserName"];
            
            // if the entered name is the same as the username's row then move to homepage
            header('Location: ../mainPages/index.php?uname=$_SESSION["username"]');
        }
        else
        {
            echo 'Invalid password';
        }
    }
mysqli_close($conn);



?>
