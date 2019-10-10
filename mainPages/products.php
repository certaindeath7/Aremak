<?php
    include ("../subActions/dbconnect.php");
    include ("../mainActions/showDetailedProduct.php");
?>
<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>  
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Online Camera Shop">
  <meta name="keywords" content="Camera,CSS,XML,JavaScript">
  <meta name="author" content="Tran Phuc Duc Nguyen">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- Load an icon library -->    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      .container {
    padding: 80px 120px;
  }
/* Add a dark background color with a little bit see-through */ 
.navbar {
  margin-bottom: 0;
  background-color: #2d2d30;
  border: 0;
  font-size: 12px !important;
  letter-spacing: 4px;
  opacity: 0.9;
}
      
/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
  color: #d5d5d5 !important;
    
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
  color: #fff !important;
}
.navbar-brand img {
          width: 32px;
          height: 32px;
            
      }


/* The active link */
.navbar-nav li.active a {
  color: #fff !important;
  background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
  border-color: transparent;
}

/* Dropdown */
.open .dropdown-toggle {
  color: #fff ;
  background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
  color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
  background-color: #555 !important;
}
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }  
  </style>
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
    <!-- navbar section -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="index.php" id="logo"><img src="../Images/Logo/advancedWebLogo.png"></a>
        </div>
        
        <!-- navbar-->
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?$uname=$_SESSION['username']"><img src="https://img.icons8.com/windows/32/000000/home.png">Home</a></li>
            <li><a href="products.php"><img src="https://img.icons8.com/windows/32/000000/camera.png">Products</a></li>
            <li><a href="cart.php" ><img src="https://img.icons8.com/pastel-glyph/32/000000/shopping-cart--v1.png">Cart</a></li>
            <li><a href="wishlist.php" ><img src="https://img.icons8.com/ios/32/000000/wish-list.png">Wishlist</a></li>  
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"  class="fa fa-fw fa-user"><img src="https://img.icons8.com/windows/32/000000/person-male.png">
                    <span class="caret"></span>
                </a>
               <?php
                    if(isset($_SESSION["username"]))
                    { ?>
                        <a><?php echo $_SESSION["username"]; ?></a>
                        <ul class="dropdown-menu">
                            <li><a href='' onclick="logout()">Log Out</a></li>            
                        </ul>
                        <script>
                            function logout()
                            {
                                $.get("logout.php", function(data, status){});
                            }
                        </script>
                  
                
                    <?php }
                else{ ?>
                         <!-- dropdown menu-->
                      <ul class="dropdown-menu">
                         <li><a href ="signupPage.php" >Sign Up</a></li>
                        <li><a href ="loginPage.php" >Login</a></li>
                      </ul>
                    <?php } ?>  
            </li>
            <li><a href="#"><span id="glyphicon glyphicon-search"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- carousel and hero banner-->
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Aremak</h1>      
        <p>Keep calm & Shoot in Raw</p>
      </div>
    </div>   
<!--slider wrapper-->
<?php
    include("../subActions/carousel.php");
?>
<!-- breadcrumps-->    
<?php
    include "../subActions/breadcrumps.php";
?>


<div class="container-fluid">
<div class="row">

<!-- show all categories-->    
        <div class="col-sm-3">  
            
                <div class="list-group">
                <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort by
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#!" onclick="sortBy(1)">Name</a></li>
                                <li><a href="#!" onclick="sortBy(2)">Price</a></li>
                            </ul>
                        </div>
            </div>
            
            <div class="list-group">
                    <h3>Category</h3>
                    <div style="height: 400px; overflow-y: auto; overflow-x: hidden; ">
                    <?php
                        $query ="SELECT DISTINCT(CategoryName) FROM Products ORDER BY CategoryID ";

                        $results = mysqli_query($conn, $query);

                        $row = mysqli_fetch_array($results);
                        foreach( $results as $row) // it goes all the row available in the category table to print out the category name 
                        {
                        ?>
                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" class="common_selector category" name="category" value ="<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName']; ?></label>
                        </div>
                        <?php
                        }

                        ?>   
                </div>  
             
                </div>
            
        
        </div> 
<!-- show all products randomly limited by 6 items-->    
        <div class="col-sm-9">    

        <!-- display single product within the page-->    
            <div class="row data_filtering">
                
            </div>
            
        </div>
   
</div><br>
</div>

<!-- style for loading symbol-->    
<style>
#loading
{
 text-align:center; 
 background:no-repeat center; 
 height: 150px;
}
</style>
    
<!-- javascript file-->
<!-- this function will fetch data from products table and fetch it on the web page-->
<script>   

//functions to help sort the products by name and price-    
function sortBy(choice){
                $.ajax({
             
             url:"../mainActions/sorting_action.php",
             method:"POST",
             data:{choice: choice},
             success:function(data) // return data
         {
             $('.data_filtering').html(data); // data will be displayed in class ="data_filtering"
         }
         });
}
    
    function sendToCart(pid)
    {
       window.location.href="../mainPages/cart.php?pid=" +pid+ "&quantity=1";
    }
    
     function sendToWishlist(pid)
    {
        window.location.href="../mainPages/wishlist.php?pid=" +pid+ "&quantity=1";
    }
 $(document).ready(function(){
     data_filtering();
    
     function data_filtering()
     {
         //once this function's called it will call the loading icon
        
         
         var action ='fetch_data';
       
         
          //this fuction returns all the checkbox value of all selected category
         var category = get_filter('category');
         var categoryID = get_filter('categoryID');
         var minimum_price = $('#hidden_minimum_price').val();
         var maximum_price = $('#hidden_maximum_price').val();
         $.ajax({
             
             url:"../mainActions/filteringActions.php",
             method:"POST",
             data:{action:action, category:category, minimum_price:minimum_price, maximum_price:maximum_price, categoryID:categoryID},
             success:function(data) // return data
         {
             $('.data_filtering').html(data); // data will be displayed in class ="data_filtering"
         }
         });
     }
     
      function get_filter(class_name)
     {
         var filter =[]; // store all the names of categorys in an "filter" array
         
         //able to access all the attribute of selected check box of a specific category
         $('.'+class_name+':checked').each(function(){
             filter.push($(this).val()); // store value of checked box and store it in "filter" valuable
         })
         return filter;
     }
     
     
     // category checkbox
     $('.common_selector').click(function(){
         // everytime a category's ticked cit will called the funciton data_filtering()

        data_filtering();
    });
     
 });
    

    
</script>





</body>
    
<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="70" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
</footer>
</html>