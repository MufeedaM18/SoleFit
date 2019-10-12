
<?php 
	//session_start();
	$db = mysqli_connect('localhost', 'root', 'adminpassword', 'solefit');

	// initialize variables
	$disease = "";
	$cause = "";
	$prevent = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$disease = $_POST['disease'];
		$cause = $_POST['cause'];
		$prevent = $_POST['prevent'];

		mysqli_query($db, "INSERT INTO diseases (disease,cause,prevent) VALUES ('$disease', '$cause','$prevent')"); 
		$_SESSION['message'] = "Disease saved"; 
		header('location: drAD.php');
	}

//update
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$disease = $_POST['disease'];
	$cause = $_POST['cause'];
	$prevent = $_POST['prevent'];

	mysqli_query($db, "UPDATE diseases SET disease='$disease', cause='$cause',prevent='$prevent' WHERE id=$id");
	$_SESSION['message'] = "Disease updated!"; 
	header('location: drAD.php');
}

//delete
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM diseases WHERE id=$id");
	$_SESSION['message'] = "Disease deleted!"; 
	header('location:drAD.php');
}



