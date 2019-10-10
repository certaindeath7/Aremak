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

 .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
        background-color: #555;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color:#555;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
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
        s
        <!-- navbar-->
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><img src="https://img.icons8.com/windows/32/000000/home.png">Home</a></li>
            <li><a href="product.php"><img src="https://img.icons8.com/windows/32/000000/camera.png">Products</a></li>
           <li><a href="cart.php" ><img src="https://img.icons8.com/pastel-glyph/32/000000/shopping-cart--v1.png">Cart</a></li>
            <li><a href="wishlist.php" ><img src="https://img.icons8.com/ios/32/000000/wish-list.png">Wishlist</a></li>  
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"  class="fa fa-fw fa-user"><img src="https://img.icons8.com/windows/32/000000/person-male.png">
                <span class="caret"></span>
              </a>
              
             <!-- dropdown menu-->
              <ul class="dropdown-menu">
                <li><a href ="signupPage.php" >Sign Up</a></li>
                <li><a href ="loginPage.php" >Login</a></li>
              </ul>
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

    <div class="signup-form">
    <form action="../mainActions/action_signup.php" method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
         <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="UserName" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>
        
        <div class="form-group">
            <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number" required="required">
        </div>
        
        <div class="form-group">
        	<input type="text" class="form-control" name="address" placeholder="Address" required="required">
        </div>
        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" >Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="loginPage.php" style="color:#555;">Sign in</a></div>
</div>
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>    


</body>
</html>