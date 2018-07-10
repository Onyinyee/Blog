<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "nhub";

	$postId = $_GET['id'];
	
	$conn = mysqli_connect($host, $username, $password, $database);
		
	$query = "DELETE FROM posts WHERE id = '$postId' ";

	$result = mysqli_query($conn, $query);

	if ($result) {
		header('location:index.php');

	}else{
		echo "Something went wrong";
	}

 ?>