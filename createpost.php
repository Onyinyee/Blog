<?php 
	//Database connection variables
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "nhub";
	
		//Insert data
		

	//Form Data

	$postTitle = $_POST["post_title"];
	$postBody = $_POST["post_body"];

	//Connecting to the database
	$conn = mysqli_connect($host, $username, $password, $database);


		
		$sql = "INSERT INTO posts(post_title, post_body) VALUE('$postTitle', '$postBody')";

		//Check if post was made succesfully
		if($conn->query($sql) === TRUE){
			echo"Yay! you were able to make your post.";
		}else{
			echo "Error" . $sql . "<br>" . $conn->error;
		}
	
	$conn->close();
?>