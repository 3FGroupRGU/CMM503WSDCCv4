<?php session_start();
include("check.php");
$user_check=$_SESSION['username'];

$_SESSION=array();
if (ini_get("session.use_cookies")){
	$params=session_get_cookie_params();
	setcookie(session_name(), '',time() - 42000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	);
}

if(isset($_FILES['UploadFileField'])) {
	// Create the Variables needed to upload the file
	$UploadName = $_FILES ['UploadFileField']['name'];
	$UploadName = mt_rand (100000, 999999) .$UploadName;
	$UploadTmp = $_FILES ['UploadFileField']['tmp_name'];

	$UploadType = $_FILES ['UploadFileField']['type'];
	$FileSize = $_FILES ['UploadFileField']['size'];

	// Remove Unwanted Spaces and characters from the files name of the files being uploaded.
	$UploadName = preg_replace ("#[^a-z0-9.]#i", "", $UploadName);
	// Upload File Size Limit
	if(($FileSize > 125000)) {
		die("Error - File too Big");

	}
	// Checks a file has been Selected and Uploads then into a Directory on your Server
	if($UploadTmp) {
		die("No File Selected, Please Upload Again");
	}else{
		move_uploaded_file($UploadTmp, "Upload/$UploadName");
	}
}
session_destroy()
?>
<!doctype html>
<html>
<body>
<div id="header">
	<h1>Ginger Bugginess Fault Tracker</h1>
</div>
			<div id="NavBar">
				<nav>
						<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="index.php">Log Out</a></li>
							</ul>
					</nav>
			</div>
		<div class="content">
				<div id="pageheading">
						<h1>Welcome</h1>
					</div>
				<div id="contentleft">
						<h2>Welcome to the Ginger Bugginess fault logging page.</h2><br>
						<h3>File Upload Page.</h3><br>
						<p>Please upload your file(s)for examination via the provided upload link.</p>
					</div>
				<div id="contentright">
						<div class="fileuploadholder">
								<form action="FileUpload.php" method="POST" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">
										<label for="UploadFileField"><strong><em>Upload Your Bugs</em></strong></label><br>
										<input type="file" name="UploadFileField" id="UploadFileField" /><br><br>
										<input type="submit" name="UploadButton" id="UploadButton" value="Upload"/>
									</form>
							</div>
						<div class="buglisting">
								<h1>Ginger Bug List</h1>
								<div id="bugcontent">
										<?php
										include("connect.php");
										$sql="SELECT * FROM bugs";
										$result=mysqli_query($db,$sql);
										while($row=mysqli_fetch_assoc($result)){
												$bugTitle=$row['title'];
												$bugID=$row['ID'];
												echo '<a href="bug.php?id="'.$bugID.'>'.$bugTitle.'</a></br>';
 					}
 					?>
									</div>
								<div id="NavBar">
										<nav>
												<ul>
														<li><a href="bug.php">Bug List</a></li>
													</ul>
											</nav>
									</div>
							</div>
						<div class="comment">
								<?php

								date_default_timezone_set('UTC') ;
								$time = date( ' H:i , F j ' ) ;
								$user = '#' ;

								echo '
                 <form action="submit.php" method="POST">
                         <fieldset>
                             <legend>Send us your comments</legend>
                                <textarea rows="5" cols="100" name="comment"></textarea>
                                 <input type="hidden" name="user" value=" '. $username .' ">
                                <input type="hidden" name="time" value=" '. $time.' ">
                        </fieldset>
                     <p><input type="submit" name="submit" value="Here is the Bug"></p>
                 </form> ' ;

 				?>
							</div>
						<div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
					</div>
			</div>
<div id="footer"></div>
</body>
</html>
