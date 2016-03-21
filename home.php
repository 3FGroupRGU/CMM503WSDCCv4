<?php 
 include("check.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
	<link rel="stylesheet" href="layout.css" type="text/css" />
	<link rel="stylesheet" href="menu.css" type="text/css" />
</head>

<body>
<div id="header">
	<h1>Ginger Bugginess Fault Tracker</h1>
</div>
<div id="NavBar">
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="FileUpload.php">File Upload</a></li>
		<li><a href="logout.php">Log Out</a></li>
	</ul>
</nav>
</div>
<header>
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>
	</header>
<br><br>
<h2><em>You are now logged in as an official user</em></h2>
<p>Please navigate to the file upload page via the link above.</p>
</body>
</html>