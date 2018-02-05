<?php include('server.php'); 


	//IF USER IS NOT LOGGED IN THEN THEY CANNOT ACCESS THIS PAGE
	if(empty($_SESSION['username'])){
		header('location: login.php');
	}


?>


<html>
	<head>
		<title>Login</title>
		<!--Import Google Icon Font-->
	      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	      <!--Import materialize.css-->
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	      <!--Let browser know website is optimized for mobile-->
	      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>


<body style="background-image:url('http://www.ohmancorp.com/images/Win8BackGround-203040.png')">

<div class="container">
	<div>
		<h2 class="white-text">Logged in</h2>
	</div>

	<?php if (isset($_SESSION['success'])): ?>
		<div>
				<h3 class="white-text">
						<?php 
								echo $_SESSION['success'];
								unset($_SESSION['success']);
						 ?>
				</h3>	
		</div>
	<?php endif ?>

	<?php if (isset($_SESSION['username'])): ?>
		
		<p class="white-text">Welcome <b><?php echo $_SESSION['username']; ?></b></p>
		<a href="index.php?logout='1'">Logout</a>

	<?php endif ?>

				<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		        <script type="text/javascript" src="js/materialize.min.js"></script>
</div>	

</body>
</html>