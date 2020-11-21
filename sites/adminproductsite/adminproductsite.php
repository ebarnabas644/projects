<?php
ini_set('display_errors', 'On');
include ($_SERVER['DOCUMENT_ROOT'] ."/sites/loginsite/session.php");
require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
	if (!empty($_POST['delete'])) {
			$id=$_POST['delete'];
			pg_query($db_connectiontocatalog,"DELETE FROM grades WHERE id='$id'");
		}
	if(array_key_exists('save', $_POST)){
		$id=pg_escape_string($_POST['id']);
		$subject=pg_escape_string($_POST['subject']);
		$grade=pg_escape_string($_POST['grade']);
		pg_query($db_connectiontocatalog, "UPDATE grades SET (subject,grade) = ('$subject','$grade') WHERE id=$id");
	}
	if(array_key_exists('add', $_POST)){
		$id=pg_escape_string($_POST['id']);
		$subject=pg_escape_string($_POST['name']);
		$grade=pg_escape_string($_POST['grade']);
		$studentid=pg_escape_string($_POST['studentid']);
		pg_query($db_connectiontocatalog, "INSERT INTO grades (id,date,grade,subject,studentid) VALUES ('$id','$subject','$grade','$studentid')");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saturnus napló</title>
	<link rel="stylesheet" type="text/css" href="../../style/style.css">
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
			<a href='../../sites/adminsite/admin.php'><li>Kezdőlap</li></a>
		</ul>
	</div>
	<div class="row" align="center">
	<?php
	ini_set('display_errors', 'On');
	require $_SERVER['DOCUMENT_ROOT'] ."/sites/productsite/adminproductcontroller.php";
	$product = new ProductController();
	echo $product->PrepareProduct();
	?>
	<input class='btn btn-success' name='addproduct' value='Record' href='../../sites/editsite/addproductsite.php?id=<?php $_GET['id'] ?>'/>
	<table>
	<?php
	echo $product->PrepareGrades();
	?>
	</table>
</div>
</body>
</html>