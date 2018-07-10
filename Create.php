<!DOCTYPE html>
<html>
<head>
	<title>Create Blog Post</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
	<h1>Create Blog Post</h1>
		</div>
	</div>

	<div class="container">
	<form  action="createpost.php" method="POST">
		<div class="form-group">
			<label>POST TITLE</label>
			<input type="text" name="post_title" class="form-control" required="">
			
		</div>
		<div class="form-group">
			<label>POST BODY</label>
			<textarea class="form-control" name="post_body" required=""></textarea>

		</div>
		<button type="submit" class="btn btn-lg btn-success pull-right">SUBMIT</button>
	</form>
	</div>

<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/bootstrap.js"></script>

</body>
</html>