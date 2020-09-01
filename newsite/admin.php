<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="veiwport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" conetnt="">
		<link rel="icon" href=/favicon.ico">
		<!-- 3 meta tags MUST come first in the head -->
		<title>Skin Swap</title>
		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/vootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">
	</head>
	
	<body>
	
	<?php 
		include('nav.php');
	?>
	
	<div class="container">
		<div class="starter-template">
			<form action="edit.php" method="POST" role="form">
				<legend>Admin's form</legend>
				<div class="form-group">
					<label for="">Mail</label>
					<input type="text" class="form-control" name="mail" placeholder="Type mail">
				</div>
				<button type="submit" class="btn btn-primary">Change mail</button>
			</form>
		</div>
	</div>
	
	<?php 
		include('footer.php');
	?>
	
	</body>
</html>
		