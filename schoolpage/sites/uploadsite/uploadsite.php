<?php
include ($_SERVER['DOCUMENT_ROOT'] ."/catalog/sites/loginsite/session.php");
?>
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
			<a href='../../sites/adminsite/admin.php'><li>Kezdőlap</li></a>
			<a href="../../sites/logoutsite/logout.php"><li>Kijelentkezés</li></a>
		</ul>
	</div>	</div>
	<div class="row" align="center">
	<div class='container'>
		<h1 class="text-center">Kép feltöltése</h1>
	<hr align="center">
<form action='../../sites/uploadsite/upload.php' method='post' enctype='multipart/form-data'>
				<table align="center">
					<tr>
			    <td>Válassz egy képet a feltöltéshez:</td>
			</tr>
			<tr>
			    <td><input type='file' name='fileToUpload' id='fileToUpload'></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a class='btn btn-secondary' href='../../sites/adminsite/admin.php' role='button'>Mégsem</a>
				<input type='submit' value='Feltöltés' class='btn btn-success' name='submit'></td>
			</tr>
			    </form>
</div>
</div>
</body>
</html>