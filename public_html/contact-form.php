<!DOCTYPE html>
<html lang="en">

	<head>

		<title>
			Let's collab, Bro
		</title>

		<meta charset="utf-8"/>
		<meta name="viewport"
				content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
				crossorigin="anonymous"/>

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
				crossorigin="anonymous"/>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Validate, Additional Methods -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"
				  type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"
				  type="text/javascript"></script>

		<!-- Custom Form Validator -->
		<script src="js/form-validate.js" type="text/javascript"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<link rel="stylesheet" href="css/style.css">

		<!-----nav bar----->
		<nav class="navbar navbar-inverse">
			<!-- logo and mobile toggle button get grouped together for better mobile display -->
			<div class="navbar-header">
				<!-- this is the mobile menu button -->
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
					<span class="sr-only">main menu</span>
					<span class="glyphicon glyphicon-menu-hamburger"></span>
				</button>
				<a class="navbar-brand" href="index.php">Dante Conley</a>
			</div>

			<!-- here are your main nav links, grouped for toggling -->
			<div class="collapse navbar-collapse" id="main-menu">
				<ul class="nav navbar-nav navbar-right">
					<li><a target="_blank" href="documentation/images/TechnicalResumeDanteC.pdf">Résumé</a></li>
					<li><a href="contact-form.php">Contact</a></li>
				</ul>
			</div>
		</nav>
	</head>

	<div class="container">
	<h1>
		Collaborate
	</h1>

	<!--Begin Contact Form-->
	<form id="contact-form" action="php/mailer.php" method="post">
		<div class="form-group">
			<label for="name">Name</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="name" name="name" placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
			</div>
		</div>
		<div class="form-group">
			<label for="message">Message</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-comment" aria-hidden="true"></i>
				</div>
				<textarea class="form-control" rows="5" id="message" name="message"
							 placeholder="What should we create?"></textarea>
			</div>
		</div>

		<!-- reCAPTCHA -->
		<div class="g-recaptcha" data-sitekey="6LfvXxcUAAAAAPJLSMEi7olCqiCpRgPS8fwFraUY"></div>

		<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
	</form>

	<!--empty area for form error/success output-->
	<div class="row">
		<div class="col-xs-12">
			<div id="output-area"></div>
		</div>
	</div>
