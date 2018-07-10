<!DOCTYPE html>
<html>
<head>
	<title>Read a post</title>
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
      		<li class="active"><a href="Create.php">Create post</a></li>
    		</ul>
  			</div>
		</nav>
			<?php 
				//$sql = "SELECT `*` FROM `posts` WHERE id = '$postId' LIMIT 1";
			$sql = "SELECT posts.id, posts.post_title, posts.post_body, comments.comment FROM posts JOIN comments ON posts.id=comments.post_id WHERE post_id=$postId";
				$result = $conn->query($sql);
				if (mysqli_num_rows($result)) {
					$row = mysqli_fetch_assoc($result) or die("Error");
				

			 ?>
		<div class="container" style="padding-top: 70px;">
		<div class="well well-sm">
			<h3><?php echo $row['post_title']; ?></h3>
		</div>
	</div>
	<div class="container">
	<div class="panel panel-default">
		<div class="panel panel-body">
			<p><?php echo $row['post_body']; ?></p>
			<hr/>
			<h3>Comments</h3>
			<p><?php 
				foreach ($result as $comment => $val) {
				echo $val['comment'] . "<br/>" . "<hr>";
			}
				 ?></p>
		</div>
		<div class="panel panel-footer">
			<form method="POST" action="create_comment.php">	
			<div class="form-group">
				<label>Make Comment</label>
				<textarea name="comment" class="form-control"></textarea>
				<input type="hidden" name="post_id" value="<?php echo $postId; ?>">
			</div>
			<button class="btn btn-lg btn-success" type="submit">Submit Comment</button>
			</form>
		</div>
	</div>
	</div>
		<?php 

			}
			$conn->close();
		 ?>
</body>
</html>