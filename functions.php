<?php 
session_start();

// connect to database
$db = mysqli_connect("ma-bd.cputvuqvoz7b.us-east-1.rds.amazonaws.com","admin","Romystarboy123","takecare");

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$user_type = 'Client';

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "pseudo is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($user_type)) {
			// $user_type = e($_POST['user_type']);
			$requette = "SELECT * FROM client WHERE pseudo='$username'";
			$result = mysqli_query($db, $requette);
			$row = mysqli_num_rows($result);
			if ($row==0) {
				$req = "SELECT * FROM client WHERE email='$email'";
				$res = mysqli_query($db, $req);
				$rows = mysqli_num_rows($res);
				if ($rows == 0) {
					$query = "INSERT INTO client (pseudo, email, typeutilisateur, motdepasse) VALUES('$username', '$email', '$user_type', '$password')";
					mysqli_query($db, $query);
					$_SESSION['success']  = "New user successfully created!!";
					header('location: login.php');
				} else {
					$_SESSION['success'] = "L'adresse mail est déjà utilisé veuillez la changer !<br>";
                	header('location: create_user.php');
				}
				
			} else {
				$_SESSION['success']  = "Le pseudo existe déjà veuillez changer !<br>";
				header('location: creercompte.php');
			}
			
		}else{
			$query = "INSERT INTO client (pseudo, email, typeutilisateur, motdepasse) 
					  VALUES('$username', '$email', '$user_type,' '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['client'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location:  login.php');				
		}
	}
}

// call the register_tech() function if register_tech_btn is clicked
if (isset($_POST['register_tech_btn'])) {
	register_tech();
}

// REGISTER TECHNICIAN
function register_tech(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$user_type = 'Technicien';

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "pseudo is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($user_type)) {
			// $user_type = e($_POST['user_type']);
			$query = "INSERT INTO client (pseudo, email, typeutilisateur, motdepasse) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location:accueiltechnicien.php');
		}else{
			$query = "INSERT INTO client (pseudo, email, typeutilisateur, motdepasse) 
					  VALUES('$username', '$email', '$user_type,' '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['tech'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location:accueiltechnicien.php#content');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM client WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
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

function isLoggedIn()
{
	if (isset($_SESSION['client'])) {
		return true;
	}else{
		return false;

	}
    

}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['client']);
    header("location:  index.php");
}
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM client WHERE pseudo='$username' AND motdepasse='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['typeutilisateur'] == 'admin') {

				$_SESSION['client'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: accueiladmin.php');		  
			}else if($logged_in_user['typeutilisateur'] == 'Technicien'){
				$_SESSION['client'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location:  accueiltechnicien.php#content');
			}else{
				$_SESSION['client'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location:  index2.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
function isAdmin()
{
	if (isset($_SESSION['client']) && $_SESSION['client']['typeutilisateur'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}