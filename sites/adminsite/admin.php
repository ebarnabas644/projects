<?php
ini_set('display_errors', 'On');
include ($_SERVER['DOCUMENT_ROOT'] ."/sites/loginsite/session.php");
require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
	if (!empty($_POST['delete'])) {
			$id=$_POST['delete'];
			pg_query($db_connectiontocatalog,"DELETE FROM phones WHERE id='$id'");
		}
	if(array_key_exists('save', $_POST)){
		$id=pg_escape_string($_POST['id']);
		$name=pg_escape_string($_POST['name']);
		$price=pg_escape_string($_POST['price']);
		if(isset($_POST['stock'])){
			$stock='true';
		}
		else{
		$stock='false';
	}
	$image=pg_escape_string($_POST['image']);
		$brand=pg_escape_string($_POST['brand']);
		pg_query($db_connectiontocatalog, "UPDATE phones SET (name,price,stock,brand,image,big_image) = ('$name','$price','$stock','$brand','$image') WHERE id=$id");
	}
	if(array_key_exists('add', $_POST)){
		$id=pg_escape_string($_POST['id']);
		$name=pg_escape_string($_POST['name']);
		$price=$_POST['price'];
		if(isset($_POST['stock'])){
			$stock='true';
		}
		else{
		$stock='false';
	}
		$brand=pg_escape_string($_POST['brand']);
		$image=pg_escape_string($_POST['image']);
		pg_query($db_connectiontocatalog, "INSERT INTO phones (id,name,price,stock,brand,image,big_image) VALUES ('$id','$name','$price','$stock','$brand','$image')");
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
	function toggleSidebar2(){
		document.getElementById("sidebar2").classList.toggle('active2');
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
			<a href="../../sites/uploadsite/uploadsite.php"><li>Kép feltöltése</li></a>
			<a href="../../sites/logoutsite/logout.php"><li>Kijelentkezés</li></a>
		</ul>
	</div>
	<div class="container">
		<h1 class="text-center">Napló</h1>
	<hr align="center">
	<div class="row" align="center">
	<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/sites/adminsite/admincontroller.php");
	$adminaccess = new AdminController();
	echo $adminaccess->CreateAdminTables();
	?>
	<div class='col-md-4 product-grid'>
			<div class='image'>
				<a href='../../sites/addsite/addsite.php'><img src='../../pictures/rsz_add.png' class='col-12'></a>
		</div>
		<a href="../../sites/addsite/addsite.php"><h3><font color="black">Tanuló hozzáadása</font></h3></a>
		</div>
	</div>
</div>
</body>
</html>
