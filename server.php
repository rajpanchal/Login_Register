<?php 

	session_start();

	$username="";
	$email="";
	$errors = array();	

	// Connecting to the database
	$db = mysqli_connect('localhost','root','','registration');

						// If register is clicked
						if(isset($_POST['register'])){
							$username = test_input($_POST['username']);
							$email = test_input($_POST['email']);
							$password_1 = test_input($_POST['password_1']);
							$password_2 = test_input($_POST['password_2']);		

						//To ensure that the form elements are properly filled
						if (empty($username)) {
							array_push($errors, "Username is required");
						}
						if (empty($email)) {
							array_push($errors, "Email is required");
						}
						if (empty($password_1)) {
							array_push($errors, "Password is required");
						}
						if ($password_1!=$password_2) {
							array_push($errors, "Passwords does not match");
						}

						//TO CHECK IF THE SAME USERNAME EXISTS OR NOT
						$sql1 = "SELECT username FROM users";
						$result1 = $db->query($sql1);

						if ($result1->num_rows > 0) {}
						    // output data of each row
						    while($row = $result1->fetch_assoc()) {
								if($username==$row["username"]){
									array_push($errors, "Same username already exists. Please try some other username");
									break;
								}        
						}
						

						//If no errors are their, insert the data to the db
						if(count($errors) == 0){
							$password = md5($password_1);
							$sql = "INSERT INTO users (username,email,password)
												VALUES('$username','$email','$password')";
							mysqli_query($db,$sql);
						
						$_SESSION['username'] = $username;
						$_SESSION['success'] = "You are now successfully registered."; 
						header('location: newregistered.php');
						
						}
					}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

						//log user in from the login page
						if(isset($_POST['login'])){

							$username = test_input($_POST['username']);
							$password = test_input($_POST['password_1']);		

							//To ensure that the form elements are properly filled
							if (empty($username)) {
								array_push($errors, "Username is required");
							}
							if (empty($password)) {
								array_push($errors, "Password is required");
							}

							if(count($errors)==0){
								$password = md5($password);
								$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
								$result = mysqli_query($db,$query);
								if(mysqli_num_rows($result) == 1){
									$_SESSION['username'] = $username;
									$_SESSION['success'] = "You are now logged in"; 
									header('location: index.php');
								}else{
									array_push($errors,"Username/Password is invalid");
								}
							}

						}


//logout
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}

 ?>