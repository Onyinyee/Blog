<!DOCTYPE html>
<html>
<head>
	<title>Create Blog Post</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<?php 

		$host = "localhost";
		$username = "root";
		$password = "";
		$database = "nhub";

		$postId = $_GET['id'];

		$conn = mysqli_connect($host, $username, $password, $database);
	 ?>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="index.php">All post</a></li>
    </ul>
  </div>
</nav>
	<div class="container" style="padding-top: 70px;">
		<div class="well well-lg">
	<h1>Edit Blog Post</h1>
		</div>
	</div>

	<div class="container">
	<form  action="Update_post.php" method="POST">

		<?php 
			$post = "SELECT `*` FROM `posts` WHERE `id` = $postId LIMIT 1 ";
			$result = $conn->query($post);
			if (mysqli_num_rows($result)) {
				$row = mysqli_fetch_assoc($result) or die(mysqli_error());
	
			}

		 ?>
		<div class="form-group">
			<label>POST TITLE</label>
			<input type="text" name="post_title" class="form-control" value="<?php echo($row['post_title']); ?>" required="">
			
		</div>
		<div class="form-group">
			<label>POST BODY</label>
			<textarea class="form-control" name="post_body" required=""><?php echo($row['post_body']); ?></textarea>
			<input type="hidden" name="post_id" value="<?php echo($postId)?>">

		</div>
		<button type="submit" class="btn btn-lg btn-success pull-right">SUBMIT</button>
	</form>
	</div>
	<?php 

		$conn->close();
	 ?>

<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/bootstrap.js"></script>

</body>
</html>