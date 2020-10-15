<?php
include($_SERVER['DOCUMENT_ROOT'] ."/catalog/sites/loginsite/session.php");
require($_SERVER['DOCUMENT_ROOT'] ."/catalog/databaseaccess/phones.php");
require ($_SERVER['DOCUMENT_ROOT'] ."/catalog/databaseaccess/accessdatabase.php");
$phone = new Phones();
$phonearray=$phone->GetPhones();
$include[]=array();
$number=1;
foreach ($phonearray as $key => $phone) {
				$include[]=$phone->id;
			}
			while(in_array($number,$include)){
				$number=$number+1;
			}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Termék katalógus</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script type="text/javascript">
	function toggleSidebar(){
		document.getElementById("sidebar").classList.toggle('active');
	}
</script>
<body>
<div id="sidebar">
		<div class="toggle-btn" onclick="toggleSidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<ul>
			<a href="../../sites/logoutsite/logout.php"><li>Kijelentkezés</li></a>
		</ul>
	</div>	</div>
	<div class="row" align="center">
	<div class='container'>
				<h1 class='text-center'>Termék hozzáadása</h1>
				<hr align='center'>
				<form id='testform' name='testform' method='post' action='../../sites/adminsite/admin.php'>
				<table align='center'>
				<tr>
				<td><label for='id'>Azonosító: </label></td>
				<td><input name='id' type='number' id='id' value='<?php echo($number) ?>' style='background-color:lightgrey' readonly/></td>
				</tr>
				<tr>
				<td><label for='name'>Terméknév: </label></td>
				<td><input name='name' type='text' id='name' value='' required /></td>
				</tr>
				<tr>
				<td><label for='price'>Termékár: </label></td>
				<td><input name='price' type='number' id='price' value='' required /></td>
				</tr>
				<tr>
				<td><label for='stock'>Van-e raktáron: </label></td>
				<td align='center'><input name='stock' type='checkbox' id='stock'/></td>
				</tr>
				<tr>
				<td><label for='brand'>Márka: </label></td>
				<td><input name='brand' type='text' id='brand' value='' required /></td>
				</tr>
				<tr>
				<td><label for='image'>1. kép neve: </label></td>
				<td><input name='image' type='text' id='image' value=''/></td>
				</tr>
				<tr>
				<td><label for='big_image'>2. kép neve: </label></td>
				<td><input name='big_image' type='text' id='big_image' value=''/></td>
				</tr>
				<tr>
				<td colspan='2' align='center'><a class='btn btn-secondary' href='../../sites/adminsite/admin.php' role='button'>Mégsem</a>
				<input type='submit' class='btn btn-success' name='add' value='Mentés' href='../../sites/adminsite/admin.php'/></td>
			</form>
				</tr>
				</table>
				</div>
</body>
</html>
