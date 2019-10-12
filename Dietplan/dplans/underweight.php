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

	<title>Sole-Fit | Underweight DietPlan</title>
     
     
     
      <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                        <a class="page-scroll" href="../../Home/index.php"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../../Blog/blog.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../../FoodSwaps/foodswaps.php"><i class="fa fa-coffee " aria-hidden="true"></i>
 FoodSwaps</a>
                    </li>
                    <li id="diets">
                        <a class="page-scroll" href="../dietplans.php"><i class="fa fa-spoon" aria-hidden="true"></i>
 DietPlans</a>
                    </li>
                    
                     <li>
                        <a class="page-scroll" href="../../Dr.Fit/drfit.php"><i class="fa fa-user-md " aria-hidden="true"></i>
 Dr.Fit</a>
                    </li>
                    
                     <li>
                        <a class="page-scroll" href="../../Fitspots/fitspots.php"><i class="fa fa-hospital-o " aria-hidden="true"></i>
FitSpots</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll"  href="../../Contact/contact.php"#contact><i class="fa fa-phone" aria-hidden="true"></i>
 Contact</a>
                    </li>
                    
                        
                    <li>     
                       <a class="page-scroll"  href="../../Registration/index.php"><i class="fa fa-smile-o" aria-hidden="true"></i>
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
       
     
        <div class="header dphead text-center">
            
         <h1> Diet Plan -  <br>
            Underweight </h1>
            
        </div>   
         
              
             <div class="row dp">
                 <div class="col-md-6 dpcol text-center">
                     <h2>Diet Plan 1</h2>
                     
                         <h3>Early morning</h3>
                            -soaked almonds. <br>
                            -one glass milk(2 tsp skimmed milk powder). <br>
                            -2 bananas
                              <br>
                            <h3>Before Breakfast</h3> 
                            1 cup of tea or coffee with full-cream milk, 2 t of sugar and 2 biscuits.<br>
                            
                           <h3>Breakfast</h3> 
                            -Fruit or fruit juice (1 orange or 1 glass of orange juice). <br>
                            -Cereal with milk and sugar .<br>
                            -one bowl of oats. <br>
                            -two boiled eggs<br>


                          <h3>Mid-morning</h3>  
                            -Milky drink. <br>
                             Or <br>
                             -Fruit juice with snack. <br>

                             -roasted almonds. <br>
                             -dry fruits <br>

                           <h3> Lunch</h3>
                            -sprout salad. <br>
                            Or <br>
                            -chicken Soup (1/2 cup). <br>

                            -Vegetable or salad with dressing (1/2 cup of cooked vegetables or ½ cup of salad with 1 T of salad dressing or mayonnaise). <br>
                            -rice/pulav/biriyani(chicken) one cup. <br>
                            -chapathi 2 with with chicken or meat<br>

                           <h3> Afternoon</h3>
                            -any fruit like apple, melon fruit... <br>
                             - add cucumber or carrot slices. <br>

                            <h3> Evening</h3>
                            -Sandwiches with filling of chicken or meat(2 slices of whole-wheat bread ). <br>
                            Or <br>
                            -Cake or biscuits (1 slice of cheese cake or 2-3 chocolate digestive biscuits). <br>
                            -Tea with milk and sugar (1 cup of tea with full-cream milk and 2 t of sugar) <br>

                            <h3>Mid evening</h3>
                            -dry fruits. <br>
                            -roasted almonds. <br>
                            -bread and cheese. <br>
                            
                           <h3> Dinner</h3>
                            -Fruit juice (1 glass). <br>

                            -Vegetable or salad with dressing (1/2 cup of cooked vegetables or ½ cup of salad with 1 T of salad dressing or mayonnaise). <br>
                            -chapathi 2 with ghee or butter. <br>
                            Or <br>
                            -rice/pulav/biriyani 1 cup <br>
                            
                            <h3>Bedtime</h3>
                            Milk drink
                             <br><br><br>
                 </div>
                 
                 <div class="col-md-6 text-center dpcol">
                     <h2>Diet Plan 2 (Vegetarian)</h2>
                     
                     <h3>Early morning</h3>
                            -soaked almonds. <br>
                            -one glass milk(2 tsp skimmed milk powder). <br>
                            -2 bananas
                             <br>

                          <h3>Before breakfast</h3>
                          1 cup of tea or coffee with full-cream milk, 2 t of sugar and 2 biscuits. <br>
                          
                           <h3>Breakfast</h3> 
                            -Fruit or fruit juice (1 orange or 1 glass of orange juice). <br>
                            Or <br>
                            -Cereal with milk and sugar. <br>

                            -one bowl of oats <br>
                            -one boiled banana <br>


                          <h3>Mid-morning</h3>  
                           -Milky drink <br>
                            Or <br>
                            -Fruit juice with snack. <br> 

                            -roasted almonds <br>

                           <h3> Lunch</h3>
                            -sprout salad. <br>
                            Or <br>
                            -Veg Soup (1/2 cup). <br>
                            -Vegetable or salad with dressing (1/2 cup of cooked vegetables or ½ cup of salad with 1 T of salad dressing or mayonnaise). <br>
                            -rice/veg pulav/veg biriyani one cup. <br>
                            Or <br>
                            -chapathi 2 with ghee or butter <br>

                           <h3> Afternoon</h3>
                            -any fruit like apple, melon fruit... <br>
                             

                            <h3> Evening</h3>
                           -Sandwiches with filling (2 slices of whole-wheat bread ) <br>
                            Or <br>
                            -Cake or biscuits (1 slice of cheese cake or 2-3 chocolate digestive biscuits). <br>

                            -Tea with milk and sugar (1 cup of tea with full-cream milk and 2 t of sugar) <br>

                          <h3>Mid evening</h3>
                            -dry fruits. <br>
                            -roasted almonds. <br>
                            -bread and cheese. <br>
                          
                           <h3> Dinner</h3>
                            -Fruit juice (1 glass). <br>

                            -Chapathi 2 with ghee or butter. <br>
                            Or <br>
                            -rice/veg pulav/veg biriyani 1 cup <br>
                            -Vegetable or salad with dressing (1/2 cup of cooked vegetables or ½ cup of salad with 1 T of salad dressing or mayonnaise). <br>
                             <h3>Bedtime</h3>
                            Milk drink
                         <br><br><br>
                 </div>
             </div>
           
             







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

</body>

</html>
