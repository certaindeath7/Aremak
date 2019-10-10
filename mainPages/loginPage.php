<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

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
.login-form {
		width: 340px;
    	margin: 50px auto;
    
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
        
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
         background-color: #555;
    }



  </style>
</head>
<body>
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
            <li><a href="product.php"><img src="https://img.icons8.com/windows/32/000000/camera.png">Products</a></li>
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
                        <li>
                            <a href ="<?php session_destroy(); ?>">Log out</a>
                        </li>
                    </ul> 
                <?php }        
                else if(isset($uname))
                    {?>
                        <a> <?php echo $_SESSION["username"]; ?></a>
                        <ul class="dropdown-menu">
                        <li>
                            <a href ="<?php session_destroy(); ?>">Log out</a>
                        </li>
                    </ul> 
                    }

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
    
<!-- Login form-->    
   <div class="login-form">
    <form action="../mainActions/action_login.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="username" name="username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="password" name="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right" style="color:#555">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="signupPage.php">Create an Account</a></p>
</div>
    
    <script>
        
    </script>

    
</body>
</html>