<?php
	require ($_SERVER['DOCUMENT_ROOT'] ."/catalog/databaseaccess/accessdatabase.php");
	session_start();
	$user_check=$_SESSION['login_user'];
	$result=pg_query($db_connectiontoadmins, "select username from users where username='$user_check'");
	$row = pg_fetch_assoc($result);
	$login_session =$row['username'];
	if(!isset($login_session)){
		pg_close();
		header('Location: ../../index.php');
	}
?>