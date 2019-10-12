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

<?php  include('php_code_fs.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM foods WHERE id=$id");

		if ($record){
			$n = mysqli_fetch_array($record);
		
			
            $food = $n['food'];
            $carbohydrate = $n['carbohydrate'];
            $protien = $n['protien'];
            $fat = $n['fat'];
            $calorie = $n['calorie'];
            $type = $n['type'];

		}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Sole-Fit | Admin</title>
     
      <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   
       <link rel="stylesheet" href="css/animate.css">
       

      <link rel="stylesheet" href="css/drAD.css">

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
                <a class="navbar-brand page-scroll animated infinite bounce" href="#page-top">Sole-Fit</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li id="home">
                        <a class="page-scroll" href="../admin.php"><i class="fa fa-home" aria-hidden="true"></i>
                                        <?php  if (isset($_SESSION['username'])) : 
                                               echo $_SESSION['username'];
                                            else :    
                                                echo "Login";
                                            endif
                                        ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="blogAD.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 Blog</a>
                    </li>
                    <li id="drf">
                        <a class="page-scroll" href="#"><i class="fa fa-coffee " aria-hidden="true"></i>
 FoodSwaps</a>
                    </li>
                    
                     <li >
                        <a class="page-scroll" href="drAD.php"><i class="fa fa-user-md " aria-hidden="true"></i>
 Dr.Fit</a>
                    </li>
                    
                     
                  <li>     
                                      <a href="../../Registration/index.php?logout='1'"  style="color:red; "><i class="fa fa-smile-o" aria-hidden="true"></i>Log Out</a> 
                       
                  </li>
                        
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
   

<br>
<br>
<br>

       
        
         



<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM foods"); ?>

<table class="t1">
	<thead>
		<tr>
			<th>Food</th>
			<th>Carbohydrate</th>
			<th>Protien</th>
			<th>Fat</th>
			<th>Calorie</th>
			
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['food']; ?></td>
			<td><?php echo $row['carbohydrate']; ?></td>
			<td><?php echo $row['protien']; ?></td>
			<td><?php echo $row['fat']; ?></td>
			<td><?php echo $row['calorie']; ?></td>
			<td>
				<a href="fsAD.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="php_code_fs.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>



	<form method="post" action="php_code_fs.php" >
		<div class="input-group">
<!--		// newly added field-->
    <input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Food</label>
			<input type="text" name="food" value="<?php echo $food; ?>">
		</div>
		<div class="input-group">
			<label>Carbohydrate</label>
			<input type="text" name="carbohydrate" value="<?php echo $carbohydrate; ?>">
		</div>
		<div class="input-group">
			<label>Protien</label>
			<input type="text" name="protien" value="<?php echo $protien; ?>">
		</div>
		<div class="input-group">
			<label>Fat</label>
			<input type="text" name="fat" value="<?php echo $fat; ?>">
		</div>
		<div class="input-group">
			<label>Calorie</label>
			<input type="text" name="calorie" value="<?php echo $calorie; ?>">
		</div>
		
		
		<div class="input-group">
			<?php if ($update == true): ?>
	        <button class="mybtn btn" type="submit" name="update" style="background: #f63;" >Update</button>
            <?php else: ?>
	        <button class="mybtn btn" type="submit" name="save" style="background: #f63;" >Save</button>
            <?php endif ?>
		</div>
	</form>




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
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/jquery.twentytwenty.js"></script>
	<script src="js/jquery.event.move.js"></script>
	
	<script src="js/typeAhead.js"></script>
	<script src="js/typeAheadScript.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>
