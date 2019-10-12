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

    <title>SoleFit</title>

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
                    <li id="home">
                        <a class="page-scroll" href="#"><i class="fa fa-home" aria-hidden="true"></i>
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
                    <li>
                        <a class="page-scroll" href="../Dietplan/dietplans.php"><i class="fa fa-spoon" aria-hidden="true"></i>
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

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Hi <?php echo $_SESSION['username']; ?> . You are in!</div>
                <div class="intro-heading" id="blink">Stop Wishing. <br> Start Doing.</div>
                <a href="#services" class="page-scroll btn btn-xl animated swing">It's time to kill some fat.</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><i class="fa fa-smile-o" aria-hidden="true"></i> We help you to..</h2> <br> <br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Create Your Diet-Plan</h4>
                    <p class="text-muted">Make your own perfect healthy diet plan according to your height, weight, body-mass-index (BMI) and other health attributes..</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-refresh  fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Swap Your Junk Foods</h4>
                    <p class="text-muted">Compare the nutriets present in your food items, give up your unhealthy food items and swap them with their healthy alternatives.. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Stay Fit &amp; Healthy</h4>
                    <p class="text-muted">Change your unhealthy habits, Read health related articles, fitness tips, differet lifestyles, Find health and fitess centers, and smile with a fully fit heart...</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Did You Know Section -->
    <section id="about" data-parallax="scroll" data-image-src="img/women.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Did you know?</h2>
                    <h3 class="section-subheading text-muted">  </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/obese.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">30% of world population are either obese or overweight.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>2.1 billion people – nearly 30% of the world’s population – are either obese or overweight, according to a new, first-of-its kind analysis of trend data from 188 countries. No country has successfully reduced obesity rates in 33 years.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/Food-habits.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Unhealthy eating habits outpaces healthy eating patterns in most world regions.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Worldwide, consumption of healthy foods such as fruit and vegetables has improved during the past two decades, but has been outpaced by the increased intake of unhealthy foods including processed meat and sweetened drinks in most world regions.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/water.jpeg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Water is your real life saver.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Drinking atleast five glasses of water a day can reduce your chances of suffering from a heart attack by 40%. Drink enough water to ensure you're always at your best.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/exercise.jpeg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Exercise makes a huge difference.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Exercising regularly can increase your lifespan by keeping your DNA healthy and young.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image animated infinite tada">
                                <h4>Be The
                                    <br>Best Version
                                    <br>of You!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

   
   
   
   
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
<!--                    <h3 class="section-subheading text-muted">This is the team behind SoleFit Project.</h3>-->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/3.jfif" class="img-responsive img-circle animated infinite jello" alt="">
                        <h4>Ashwin Joy</h4>
<!--                        <p class="text-muted">Lead Designer</p>--> <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.instagram.com/ashwinjoy7/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/ashwin.joy.12"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/ashwinjoy/"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/0.jfif" class="img-responsive img-circle animated infinite jello" alt="">
                        <h4>Ashna</h4>
<!--                        <p class="text-muted">Lead Marketer</p>--> <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.instagram.com/an_uu_uz/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/ashna.anu3"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/ashnaanu/"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/0%20(2).jfif" class="img-responsive img-circle animated infinite jello" alt="">
                        <h4>Mufeeda M</h4>
<!--                        <p class="text-muted">Lead Developer</p>--> <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.instagram.com/mufikohli18/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/Mufeeda18"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/mufeeda-m-870014159/"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">SoleFit is a web application made with PHP and MySQL as a part of Industrial Design Studio Project at <a href="http://ucet.ac.in">University College of Engineering, Thodupuzha.</a> </p>
                </div>
            </div>
        </div>
    </section>
   
   
   
   
 
   
   
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">&copy; 2018 Sole-Fit</span>
                </div>
                <div class="col-md-4">
                    
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

  

<!--    Parallex scripts-->
    <script src="js/parallax.js"></script>

    
    
    <!-- Theme JavaScript -->
    <script src="js/script.js"></script>
 
    
    
    

</body>

</html>
