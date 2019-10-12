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

	<title>Sole-Fit | FoodSwaps</title>
     
      <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Cutive" rel="stylesheet">
       <link rel="stylesheet" href="css/animate.css">
       <link rel="stylesheet" href="css/theatre.css">
       
       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700'>
    <link rel="stylesheet" href='css/piechart.css'>
      

      <link rel="stylesheet" href="css/foodswaps.css">
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
                    <li id="food">
                        <a class="page-scroll" href="../FoodSwaps/foodswaps.php"><i class="fa fa-coffee " aria-hidden="true"></i>
 FoodSwaps</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../Dietplan/dietplans.php"><i class="fa fa-spoon" aria-hidden="true"></i>
 DietPlans</a>
                    </li>
                    
                     <li id="drf">
                        <a class="page-scroll" href="../Dr.Fit/drfit.php"><i class="fa fa-user-md " aria-hidden="true"></i>
 Dr.Fit</a>
                    </li>
                    
                     <li>
                        <a class="page-scroll" href="../Fitspots/fitspots.php"><i class="fa fa-hospital-o " aria-hidden="true"></i>
FitSpots</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll"  href="../Contact/contact.php"><i class="fa fa-phone" aria-hidden="true"></i>
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




<style>
    
    #swaps{
    background: url(img/cupcake.jpeg) no-repeat center center fixed;
    background-size: cover;
    height: 1350px;
    margin-top: 52px;
}
    
   
    @media (max-width: 400px){
        .pie-charts{
            margin-left: -40px;
            max-width: 300px;
        }
        .col-md-7 h3{
        margin-left: 40px;
    }
    }
    
    
</style>


<?php 
    
     $servername = "localhost";
                $username = "root";
                $password = "adminpassword";
                $dbname = "solefit";
                $conn = mysqli_connect($servername, $username, $password, $dbname); 
                           
                           
                             
            if(isset($_GET['swap'])) {
                $apple= $_GET['swap'];
                $sql = "SELECT * from foods where food='$apple'";
	            $result = mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($result) > 0){
		          while($rows = mysqli_fetch_assoc($result)){
        
    
    ?>
    
    
    


<div id="swaps" >
    <div class="row">
        <div class="col-md-5 text-center">
           
           
           <div class="wrapper">
              <div class="pie-charts">
                <div class="pieID--operations pie-chart--wrapper">
                 <h1 style="text-transform:uppercase;"><?php echo $rows["food"] ?></h1>
                  <h2>Nutrient Contents</h2>
                  <div class="pie-chart">
                    <div class="pie-chart__pie"></div>
                   
                    <h4>Calories per 100g : <span><?php echo $rows["calorie"] ?></span></h4> 
                      <?php echo "<br>" ?>
                    <ul class="pie-chart__legend">
                      <li><em>Carbohydrate</em><span><?php echo $rows["carbohydrate"] ?></span></li>
                      <li><em>Protien</em><span><?php echo $rows["protien"] ?></span></li>
                      <li><em>Fat</em><span><?php echo $rows["fat"] ?></span></li>
                     
                    </ul>
            
                  </div>
                </div>
              </div>
            </div>       
           
        </div>
        
                  
        

        
        <div class="col-md-7 text-center" style='padding-right:70px;text-align:justify; '>
            <?php
                $fat = $rows["fat"];
                $cal = $rows["calorie"];
                $fat = $fat * 9;
                $fatpercentage = ($fat * 100)/$cal;
                $fatpercentage = (int)$fatpercentage;
                
            
        
            if($fatpercentage > 35 ){
                echo "<h3 style='margin-top:70px; '> Your food contains $fatpercentage % fat which is not ideal. The ideal fat content should be less than 35% . Your food is unhealthy in terms of fat!! </h3>";
                
                 $mincal = $cal - 50;
                 $maxcal = $cal + 50;
                
                 $maxfat = (35 * $mincal)/900;
                 
                 $sql = "SELECT * from foods where calorie>$mincal&&calorie<$maxcal AND fat<$maxfat";
	             $result = mysqli_query($conn, $sql);
                 
                 
                if(mysqli_num_rows($result) > 0){
                    echo "<br><br><h3>We recommend you to try the following foods instead </h3><br>";
		          while($newrows = mysqli_fetch_assoc($result)){
                   echo "<h3>*";
                   $temp = $newrows["food"];
                   echo " $temp </h3>";
                  }
                }
                      
            }
                      
            else if($fatpercentage > 19 )
                echo "<h3 style='margin-top:70px; '> Your food contains $fatpercentage % fat which is not bad. The average fat content should be around 19% to 35% . Your food is healthy!! </h3>";
            else
                echo "<h3 style='margin-top:70px; '> Your food contains $fatpercentage % fat which is awesome. The average fat content should be around 19% to 35% . Your food is healthy!! </h3>";
                      
            ?>
            
        </div>
        
        <?php           
		      }
	       }  
            else
                echo "No results found.";
              }
	       ?>
    </div>
</div>






    




<br>
<br>


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
    
	<script src="js/typeAhead.js"></script>
	<script src="js/typeAheadScript.js"></script>
	<script src="js/theater.min.js"></script>
	<script src="js/theatreScript.js"></script>
<!--	pie chart js-->
	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://codepen.io/MaciejCaputa/pen/EmMooZ.js'></script>
     <script  src="js/pie.js"></script>


</body>

</html>
