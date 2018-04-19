<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'multi_login');

	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../test2/login.php");
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$gender      =  e($_POST['gender']);
		$age		 =	e($_POST['age']);
		$b_id		 =	e($_POST['b_id']);
		$city		 =  e($_POST['city']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		else if (empty($gender)) { 
			array_push($errors, "Gender is required"); }
		else if (empty($age)) { 
			array_push($errors, "Age is required");}
		else if (empty($b_id)) { 
			array_push($errors, "Select valid blood group");}
		else if (empty($city)) { 
			array_push($errors, "City is required"); }	 	 
		else if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		else if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		else if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO donarregistration (name, gender, age, b_id, city, email, pwd) 
						  VALUES('$name', '$gender', '$age', '$b_id', '$city', '$email', '$pwd')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: index.php');
			}else{
				$query = "INSERT INTO donarregistration (name, gender, age, b_id, city, email, pwd) 
						  VALUES('$name', '$gender', '$age', '$b_id', '$city', '$email', '$pwd')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('location: index.php');				
			}

		}

	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM donarregistration WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $name, $errors;

		// grap form values
		$username = e($_POST['name']);
		$password = e($_POST['pwd']);

		// make sure form is filled properly
		if (empty($name)) {
			array_push($errors, "Username is required");
		}
		if (empty($pwd)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$pwd = md5($pwd);

			$query = "SELECT * FROM donarregistration WHERE name='$name' AND pwd='$pwd' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: admin/home.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: index.php');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>