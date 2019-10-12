
<?php 
	//session_start();
	$db = mysqli_connect('localhost', 'root', 'adminpassword', 'solefit');
    

    // Receives a string like 'Some Sample String'
	// and returns 'some-sample-string'
	function makeSlug(String $string)
	{
		$string = strtolower($string);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		return $slug;
	}

	// initialize variables
	$title = "";
	$slug = "";
	$body = "";
	$id = 0;
	$update = false;
    

	if (isset($_POST['save'])) {
		$title = $_POST['title'];
		$body = $_POST['body'];
        // create slug: if title is "The Storm Is Over", return "the-storm-is-over" as slug
		$slug = makeSlug($title);
        $image = $_FILES['image']['name'];
        $target = "img/" . basename($image);
        


		mysqli_query($db, "INSERT INTO posts (title,slug,image,body,published,created_at) VALUES ('$title', '$slug','$image','$body',1,now())"); 
        
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$_SESSION['message'] = "Failed to upload image";
  	   }
		$_SESSION['message'] = "Blog saved"; 
		header('location: blogAD.php');
	}

//update
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$body = $_POST['body'];
    $slug = makeSlug($title);
     $image = $_FILES['image']['name'];
    $target = "img/" . basename($image);

	mysqli_query($db, "UPDATE posts SET title='$title', slug='$slug',image='$image',body='$body',updated_at='now()'  WHERE id=$id");
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$_SESSION['message'] = "Failed to upload image";
  	   }
	$_SESSION['message'] = "Blog updated!"; 
	header('location: blogAD.php');
}

//delete
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM posts WHERE id=$id");
	$_SESSION['message'] = "Blog deleted!"; 
	header('location:blogAD.php');
}



