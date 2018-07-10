<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "nhub";
	
	?>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="Create.php">Create post</a></li>
    </ul>
  </div>
</nav>
	<div class="container" style="padding-top: 70px;">
		<div class="well well-sm">All Post</div>
	</div>
	<div class="container">
	<?php
	$conn = mysqli_connect($host, $username, $password, $database);
	if ($conn->connect_error) {
		die("Error...you've upset the delicate balance of my house keeper" . $conn->connect_error);
		# code...
	}else {
		$posts = "SELECT id, post_title, post_body FROM posts";

		$result = $conn->query($posts);

		if($result->num_rows > 0){
			while ($row = $result ->fetch_assoc()){
				?>
				<div class="panel panel-success">
  					<div class="panel-heading">
  					<?php 
  					echo "<h4>" . $row["post_title"] . "</h4>";
  					 ?> 	
  					</div>
  					<div class="panel-body">
  					<?php 
  					echo "<p>" . $row["post_body"] . "</p>";
  					 ?> 	
  					</div>
  					<div class="panel-footer">
  						<a class="btn btn-primary" href="edit_post.php?id=<?php echo $row['id']; ?>">Edit this post</a>
  						<a class="btn btn-danger" href="Delete_post.php?id=<?php echo $row['id']; ?>">Delete this post</a>
  						<a class="btn btn-success" href="read_post.php?id=<?php echo $row['id']; ?>">Read this post</a>
  					</div>
				</div>
				<?php 


			}
			}else{

				?>
			<div class="panel panel-danger">
			  <div class="panel-heading">Panel Heading</div>
			  <div class="panel-body">No Post found</div>
			</div>
			<?php 

			}}

		$conn->close();

			?>
	</div>
</body>
</html>