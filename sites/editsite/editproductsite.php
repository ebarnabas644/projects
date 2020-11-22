<?php
include($_SERVER['DOCUMENT_ROOT'] ."/sites/loginsite/session.php");
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
			<a href="../../sites/loginsite/login.php"><li>Kijelentkezés</li></a>
			
		</ul>
	</div>	</div>
	<div class="row" align="center">
	<?php
	ini_set('display_errors', 'On');
	require($_SERVER['DOCUMENT_ROOT'] ."/sites/editsite/editsitecontroller.php");
	$product = new EditProductController();
	echo $product->PreviewGrade();
	?>
</form>
</div>
</body>
</html>