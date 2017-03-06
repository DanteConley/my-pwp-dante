<!DOCTYPE html>
<html>

	<head>

		<title>
			Dante D. Conley
		</title>

		<meta charset="UTF-8">
		<meta name="viewport"
				content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>

			<h1>
				Dante Conley
			</h1>

			<p>
				Wha, me irresponsible ?! All I wanted you to do was to hand me a screwdriver, Morty! Well I don't like your
				unemployed genes in my grandchildren, Jerry. Listen, Morty, I hate to break it to you but what people call
				love is just a chemical reaction that compels animals to breed. A price for everything.
			</p>

			<p>
				You're not gonna believe this, because it usually never happens, but I made a mistake. Nothing to read into
				there! I don't like it here Morty. I can't abide bureaucracy. I don't like being told where to go and what
				to do. I consider it a violation. Did you get those seeds all the way up your butt? Don't even trip about
				your pants, dawg. We got an extra pair right here.
			</p>

			<p>
				There is no god, in your face! One dot muthafucka! You're not gonna believe this, because it usually never
				happens, but I made a mistake. Yo! What up my glip glops! Are you kidding? I'm hoping I can get to both of
				them, Rick!
			</p>

			<h1>
				Sights
			</h1>

		<div class="container embedded">
			<iframe
				src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fdigitaldesert.events%2Fvideos%2F754172264747754%2F&show_text=0&width=560"
				width="100%" height="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="no"
				allowTransparency="true" allowFullScreen="true">Meow Wolf DigiDesert
			</iframe>
		</div>

			<h1>
				Sounds
				<iframe allowtransparency="true" scrolling="no" frameborder="no"
						  src="https://w.soundcloud.com/icon/?url=http%3A%2F%2Fsoundcloud.com%2Fsticky_d&color=white_transparent&size=32"
						  style="width: 32px; height: 32px;">SoundCloud Link
				</iframe>
			</h1>

		<div class="container embedded">
			<iframe width="100%" height="166" scrolling="no" frameborder="no"
					  src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/179394166&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
				Warm My Bones
			</iframe><br><br><br>

			<iframe width="100%" height="166" scrolling="no" frameborder="no"
					  src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/90678528&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
				Doin' Real Bad
			</iframe>
		</div>


			<h1>
				Contact
			</h1>


		<!--Begin Contact Form-->
		<form id="contact-form" action="php/mailer.php" method="post">
			<div class="form-group">
				<label for="name">Name <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<input type="text" class="form-control" id="name" name="name" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email <span class="text-danger">*</span></label>
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
				<label for="message">Message <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-comment" aria-hidden="true"></i>
					</div>
					<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
				</div>
			</div>

			<!-- reCAPTCHA -->
			<div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>

			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
		</form>

		<!--empty area for form error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>

	</body>


</html>