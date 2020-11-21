<?php
include ($_SERVER['DOCUMENT_ROOT'] ."/sites/loginsite/session.php");
require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/grades.php");
require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
$grade = new Grades();
$gradearray=$grade->GetGrades($db_connectiontocatalog, "SELECT * FROM grades");
$include[]=array();
$number=2;
foreach ($gradearray as $key => $grade) {
				$include[]=$grade->id;
			}
			while(in_array($number,$include)){
				$number=$number+1;
			}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Saturnus napló</title>
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
				<h1 class='text-center'>Jegy hozzáadása</h1>
				<hr align='center'>
				<form id='testform' name='testform' method='post' action='../../sites/adminproductsite/adminproductsite.php?=<?php echo($_GET['id'])'>
				<table align='center'>
				<tr>
				<td><label for='id'>Azonosító: </label></td>
				<td><input name='id' type='number' id='id' value='<?php echo($number) ?>' style='background-color:lightgrey' readonly/></td>
				</tr>
				<tr>
				<td><label for='subject'>Tantárgy: </label></td>
				<td><input name='subject' type='text' id='subject' value='' required /></td>
				</tr>
				<tr>
				<td><label for='grade'>Érdemjegy: </label></td>
				<td><input name='grade' type='number' id='grade' value='' required /></td>
				</tr>
				<tr>
				<td><input style="display: none" name='studentid' type='number' id='studentid' value='<?php echo($_GET['id']) ?>' style='background-color:lightgrey' readonly/></td>
				</tr>
				<tr>
				<td colspan='2' align='center'><a class='btn btn-secondary' href='../../sites/adminsite/admin.php' role='button'>Mégsem</a>
				<input type='submit' class='btn btn-success' name='add' value='Mentés'/></td>
			</form>
				</tr>
				</table>
				</div>
</body>
</html>
