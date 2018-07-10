<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "nhub";

	$postId = $_POST['post_id'];
	$comment = $_POST['comment'];

	$conn = mysqli_connect($host, $username, $password, $database);

	if (!$conn) {
		die("Error...Connection Failed");
		# code...
	}else{
		$sql = "INSERT INTO comments(post_id, comment) VALUES('$postId', '$comment')";
		if ($conn->query($sql) === TRUE) {
			header("location:read_post.php?id=" .htmlspecialchars($postId));
			# code...;
		}else{
			echo "Error:" . $sql ."<br>" . $conn->error;
		}
	}

 ?>