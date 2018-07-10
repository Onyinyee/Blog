<?php 

	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "nhub";

	$postId = $_POST['post_id'];
	$postTitle = $_POST['post_title'];
	$postBody = $_POST['post_body'];

	$conn = mysqli_connect($host, $username, $password, $database);

	if (!$conn) {
		die("Oops...Error connecting to database");
	 }else{
		//Insert data

		
		$sql = "UPDATE posts(post_title, post_body) VALUE('$postTitle', '$postBody')";
		$sql = "UPDATE posts SET post_title = '$postTitle', post_body = '$postBody' WHERE id = '$postId'"; 

		//Check if post was made succesfully
		if($conn->query($sql) === TRUE){
			header("location:index.php");
		}else{
			echo "Error" . $sql . "<br>" . $conn->error;
		}
	}

 ?>