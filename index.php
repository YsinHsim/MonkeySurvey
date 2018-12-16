<?php
	if(isset($_POST['g'])) {
		header("Location:confirmation.php");
	}

?>
<html lang="en">
	<head>
		<title>
			Tech Survey
		</title>
		<mesa charset="utf-8">
		<mesa name="viewport" content="width=device-width, initial-size=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			#jumbotron {
				margin-left: 40px;
			}
			#form {
				margin-left: -12px;
				background-color: #e1f6ea;
			}
			body {
				background-color: #e1f8f9;
			}
		</style>
	</head>
	<body>

		<div class="jumbotron">
			<h1 id="jumbotron">
				Social Network Survey
			</h1>
			<p id="jumbotron">
				Welcome to the Group 4 ITS332 survey on the use of technology
				to enhance and learning in higher education.<br> This survey focuses
				on finding out more about how far social media effect to end-user.
			</p>
		</div>

		<div class="container">
			<form type="submit" method="POST" action="index.php">
			<div class="row">
				<h3 id="question">  Please specify your gender</h3>
			</div>
			<div class="row">
				<h4><input type="radio" class="form-check-input" value="Male" name="g" required>  Male<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g" required>  Female<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g" required>  Transgender<br></h4>
			</div><br>

			<div class="row">
				<h3 id="question">  Please specify your age</h3>
			</div>
			<div class="row"><div class="col-sm-3">
				<input id="form" type="text" class="form-control" placeholder="Enter your age here" required>
			</div></div><br>

			<div class="row">
				<h3 id="question">  Please specify your marital status</h3>
			</div>
			<div class="row">
				<h4><input type="radio" class="form-check-input" value="Male" name="g2" required>  Single<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g2" required>  Married<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g2" required>  Divorced<br></h4>
			</div><br>

			<div class="row">
				<h3>  How many hour did you spend online each week</h3>
			</div>
			<div class="row">
				<h4><input type="radio" class="form-check-input" value="Male" name="g3" required>  0-5<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g3" required>  6-10<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g3" required>  11-15<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g3" required>  16-20<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g3" required>  21-25<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g3" required>  More than 25 hours<br></h4>
			</div><br>

			<div class="row">
				<h3>  Please select all social networks that you have below</h3>
			</div>
			<div class="row">
				<h4><input type="radio" class="form-check-input" value="Male" name="a" >  Facebook<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="s" >  Twitter<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="d" >  Instagram<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="f" >  Linkedln<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g" >  Other<br></h4>
			</div><br>

			<div class="row">
				<h3>  How many friend do you have on your primary social network</h3>
			</div>
			<div class="row">
				<h4><input type="radio" class="form-check-input" value="Male" name="g4" required>  0-50<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g4" required>  51-100<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g4" required>  101-200<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g4" required>  201-300<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g4" required>  301-400<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g4" required>  More than 400<br></h4>
			</div><br>

			<div class="row">
				<h3>  Why do you use online social network?</h3>
			</div>
			<div class="row">
				<h4><input type="radio" class="form-check-input" value="Male" name="g5" required>  To keep in touch with family and friends.<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g5" required>  To meet new people.<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g5" required>  To make professional and business contact.<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g5" required>  To share photo, video and music.<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g5" required>  To promote business or cause.<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g5" required>  Other.<br></h4>
			</div><br>

			<div class="row">
				<h3>  How do you feel about advertising on social media?</h3>
			</div>
			<div class="row">
				<h4><input type="radio" class="form-check-input" value="Male" name="g6" required>  Useful<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g6" required>  Indifferent<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g6" required>  Annoying<br></h4>
			</div><br>

			<div class="row">
				<h3>  Have you ever purchased a product or service based on advertisement on a social network?</h3>
			</div>
			<div class="row">
				<h4><input type="radio" class="form-check-input" value="Male" name="g7" required>  Yes<br></h4>
				<h4><input type="radio" class="form-check-input" value="Male" name="g7" required>  No<br></h4>
			</div><br>

			<div class="row">
				<div class="col-sm-2">
					<input id="form" type="submit" class="form-control" value="Proceed">
				</div>
			</div> 

			</form>
		</div>

	</body>
</html>
			