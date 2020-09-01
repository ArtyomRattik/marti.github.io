<html>
<head>
<style>
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: grey;
}
li {
	float: left;
}
li a {
	display: block;
	color: white;
	text-align: center;
	padding: 15px;
	text-decoration: none;
}
li a: hover {
	background-color: black;
}
.column-right{ float: right; width: 50%; text-align: left}
.column-left{ float: left; width: 50%; text-align: center}
</style>
</head>
<body>

<nav class="navbar">
	<div class="container">
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<div class="column-left">
					<li><a class="navbar-brand" href="index.php">Project name</a></li>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="mytrades.php">My Trades</a></li>
					<li><a href="inventory.php">Inventory</a></li>
				</div>
				<div class="column-right">
					<li><a href="profile.php">Profile</a></li>
				</div>

			</ul>
		</div>
	</div>
</nav>

</body>
</html>
