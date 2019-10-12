
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SoleFit | Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/animate.css">
    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll animated infinite bounce" href="#page-top">Sole-Fit</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li  id="home">
                        <a class="page-scroll" href="#"><i class="fa fa-home" aria-hidden="true"></i>
                                        <?php  if (isset($_SESSION['username'])) : 
                                               echo $_SESSION['username'];
                                            else :    
                                                echo "Login";
                                            endif
                                        ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="power/blogAD.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="power/fsAD.php"><i class="fa fa-coffee " aria-hidden="true"></i>
 FoodSwaps</a>
                    </li>
                    
                     <li>
                        <a class="page-scroll" href="power/drAD.php"><i class="fa fa-user-md " aria-hidden="true"></i>
 Dr.Fit</a>
                    </li>
                    
                        
                  <li>     
                                      <a href="../Registration/index.php?logout='1'"  style="color:red; "><i class="fa fa-smile-o" aria-hidden="true"></i>Log Out</a> 
                       
                  </li>
                        
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
           
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Sole-Fit!</div>
                <div class="intro-heading" id="blink">Stop Wishing. <br> Start Doing.</div>
                <a href="#" class="page-scroll btn btn-xl animated swing">Admin Dashboard <i class="fa fa-table" aria-hidden="true"></i> </a>
    
               
            </div>
        </div>
    </header>

   


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

   
 
   
   
   

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

<!--    Parallex scripts-->
    <script src="js/parallax.js"></script>

    
    
    <!-- Theme JavaScript -->
    <script src="js/script.js"></script>
 
    
    
    

</body>

</html>
