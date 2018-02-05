<?php include('server.php'); ?>

<html>
	
	<head>
		<title>Register</title>
		<!--Import Google Icon Font-->
	      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	      <!--Import materialize.css-->
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	      <!--Let browser know website is optimized for mobile-->
	      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>


	<body style="background-image:url('http://www.ohmancorp.com/images/Win8BackGround-203040.png')">
		<div  class="container" >
						<h2 class="white-text">Register</h2>

						<form method="post" action="register.php">
							<!-- Insert the file which shows errors here -->
							<?php include('errors.php'); ?>
							<div>
								<label>USERNAME</label>
								<input type="text" name="username" value=" <?php echo $username; ?>" class="white-text">
							</div>

							<div>
								<label>EMAIL</label>
								<input type="text" name="email" value=" <?php echo $email; ?>" class="white-text">
							</div>
							

							<div>
								<label>PASSWORD</label>
								<input type="password" name="password_1" class="white-text">
							</div>
							
							<div>
								<label>CONFIRM PASSWORD</label>
								<input type="password" name="password_2" class="white-text">
							</div>
							
							<div>
								<button type="submit" name="register">Register</button>
							</div>
							<p>
								Already a member?<a href="login.php">Login</a>
							</p>
						</form>

			 <!--Import jQuery before materialize.js-->
		      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		      <script type="text/javascript" src="js/materialize.min.js"></script>
		</div>
	</body>

</html>