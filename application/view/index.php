<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href = "<?php echo URL;?>css/style.css" rel = "stylesheet" type = "text/css">
	<title>Balul Bobocilor - Login</title>
</head>
<body>
	<div class="text-center" style="padding:50px 0">
		<div class="logo">Balul Bobocilor</div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form id="login-form" class="text-left" method = "POST" action = "">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only"></label>
							<input type="text" class="form-control" id="lg_username" name="username" placeholder="username" required>
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only"></label>
							<input type="password" class="form-control" id="lg_password" name="password" placeholder="password" required>
						</div>
					</div>
					<button type="submit" name = "login" class="login-button"><i class="fa fa-chevron-right"></i></button>
				</div>
				<div class="etc-login-form">
					<?php if(isset($message)){ echo $message; }?>
					<!-- 				<p>forgot your password? <a href="#">click here</a></p> -->
					<!-- 				<p>new user? <a href="#">create new account</a></p> -->
				</div>
			</form>
		</div>
		<!-- end:Main Form -->
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script src="<?php echo URL;?>js/main.js"></script>
</html>
