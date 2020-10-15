<?php
	
	session_start();
	require ($_SERVER['DOCUMENT_ROOT'] ."/catalog/databaseaccess/accessdatabase.php");
	$error='';
	if (isset($_POST['submit']))
	{
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	}
	else{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = pg_escape_string($username);
		$password = md5((pg_escape_string($password)));
		$result = pg_query($db_connectiontoadmins,"select * from users where password='$password' AND username='$username'");
		$rows=pg_fetch_array($result);
		echo $rows[1];
	}
	if ($rows["username"] == $username and $rows["password"] == $password) {
		$_SESSION['login_user']=$username;
		header("location: sites/adminsite/admin.php");
	} else {
		$error = "Username or Password is invalid";
		echo $error;
		}
		pg_close();
		}
?>