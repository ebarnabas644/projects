<?php
include($_SERVER['DOCUMENT_ROOT'] .'/schoolpage/sites/loginsite/loginprocess.php');
if(isset($_SESSION['login_user'])){
header("location: ../../sites/adminsite/admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Termék katalógus</title>
	<link rel="stylesheet" type="text/css" href="../../style/loginsite.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<div class="container">
		<h1 class="text-center">Saturnus</h1>
		<hr align="center">
		<div class="row justify-content-center">
			<div id="login" class="col-9 col-sm-9 col-lg-5 col-xl-4">
				<form action="" method="post">
					<table align="center">
						<tr>
							<td><label>Felhasználónév: </label></td>
							<td><input id="name" name="username" placeholder="username" type="text"></td>
						</tr>
						<tr>
							<td><label>Jelszó: </label></td>
							<td><input id="password" name="password" placeholder="**********" type="password"></td>
						</tr>
						<tr align="center">
							<td colspan="2"><input name="submit" type="submit" value=" Login "></td>
						</tr>
					</table>
				</form>
			</div>
	</div>
</div>
</body>
</html>