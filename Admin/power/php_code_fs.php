
<?php 
	//session_start();
	$db = mysqli_connect('localhost', 'root', 'adminpassword', 'solefit');

	// initialize variables
	$food = "";
	$carbohydrate = "";
	$protien = "";
    $fat = "";
    $calorie = "";
    $type = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$food = $_POST['food'];
		$carbohydrate = $_POST['carbohydrate'];
		$protien = $_POST['protien'];
        $fat = $_POST['fat'];
        $calorie = $_POST['calorie'];
      
		mysqli_query($db, "INSERT INTO foods (food,carbohydrate,protien,fat,calorie) VALUES ('$food', '$carbohydrate','$protien','$fat','$calorie')"); 
		$_SESSION['message'] = "Food saved"; 
		header('location: fsAD.php');
	}

//update
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$food = $_POST['food'];
    $carbohydrate = $_POST['carbohydrate'];
    $protien = $_POST['protien'];
    $fat = $_POST['fat'];
    $calorie = $_POST['calorie'];
  
	mysqli_query($db, "UPDATE foods SET food='$food', carbohydrate='$carbohydrate',protien='$protien',fat='$fat',calorie='$calorie' WHERE id=$id");
	$_SESSION['message'] = "Food updated!"; 
	header('location: fsAD.php');
}

//delete
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM foods WHERE id=$id");
	$_SESSION['message'] = "Food deleted!"; 
	header('location:fsAD.php');
}



