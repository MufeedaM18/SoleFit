<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../registration/login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Sole-Fit | DietPlans</title>
     
     
     
      <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


   
       <link rel="stylesheet" href="css/animate.css">

      <link rel="stylesheet" href="css/style.css">
      

</head>

<body>

    
    
     
   
   <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll animated infinite bounce" id="solefit" href="#page-top">Sole-Fit</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li id="home">
                        <a class="page-scroll" href="../Home/index.php"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../Blog/blog.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../FoodSwaps/foodswaps.php"><i class="fa fa-coffee " aria-hidden="true"></i>
 FoodSwaps</a>
                    </li>
                    <li id="diets">
                        <a class="page-scroll" href="#"><i class="fa fa-spoon" aria-hidden="true"></i>
 DietPlans</a>
                    </li>
                    
                     <li>
                        <a class="page-scroll" href="../Dr.Fit/drfit.php"><i class="fa fa-user-md " aria-hidden="true"></i>
 Dr.Fit</a>
                    </li>
                    
                     <li>
                        <a class="page-scroll" href="../Fitspots/fitspots.php"><i class="fa fa-hospital-o " aria-hidden="true"></i>
FitSpots</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll"  href="../Contact/contact.php"#contact><i class="fa fa-phone" aria-hidden="true"></i>
 Contact</a>
                    </li>
                    
                        
                    <li>     
                       <a class="page-scroll"  href="../Registration/index.php"><i class="fa fa-smile-o" aria-hidden="true"></i>
                                     <?php  if (isset($_SESSION['username'])) : 
                                               echo $_SESSION['username'];
                                            else :    
                                                echo "Login";
                                            endif ?>
                        </a>
                  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
      
       
        
         
          
           
             
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="bmi-calculator">
        <div class="result">
          <div class="result-text"> 
            <h1><span id="bmiValue">24.8 </span>kg/m2</h1><small id="bmid">Normal</small>
          </div>
        </div>
         <h2 class="text-center" style="font-size:22px;">GET YOUR DIET PLAN</h2>
               <div class="go text-center">
                  0.0 <a href="dplans/underweight.php" class="btn btn-primary" style="background:#0D6E91; border:none;">Underweight</a>
                  18.5 <a href="dplans/normal.php" class="btn btn-primary" style="background:#4DB852; border:none;">Normal</a>
                  24.9 <a href="dplans/overweight.php" class="btn btn-primary" style="background:#E24C2A; border:none;">Overweight</a>
                 29.9 <a href="dplans/obese.php" class="btn btn-primary" style="background:#FC3962; border:none;">Obese</a> ...
               </div>
               
        <div class="calculator">
          <h2 class="text-center calculator-title">What's Your BMI?</h2>
<!--          <hr class="calculator-hr"/>-->
    
          
          <div class="height">
           Height
            <input class="value_range" id="height" type="range" value="182" min="100" max="250" step="1"/>
            <div class="label-height field-text">0</div>
          </div>
          <div class="weight">
           Weight
            <input class="value_range" id="weight" type="range" value="82" min="0" max="250" step="1"/>
            <div class="label-weight field-text">0</div>
          </div>
  
          <div class="submit">
            <input class="submit" type="submit" id="submit" value="Calculate BMI"/>
            </div>
       
        <br>
        <br>
             
           
            
          
          
        </div>
      </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    






 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">&copy; 2018 Sole-Fit</span>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </footer>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    

     <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script  src="js/index.js"></script>

</body>

</html>
