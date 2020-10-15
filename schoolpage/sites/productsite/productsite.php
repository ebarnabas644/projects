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
			<a href='../../sites/adminsite/admin.php'><li>Kezdőlap</li></a>
		</ul>
	</div>
	<div class="row" align="center">
	<?php
	require $_SERVER['DOCUMENT_ROOT'] ."/catalog/sites/productsite/productcontroller.php";
	$product = new ProductController();
	echo $product->PrepareProduct();
	?>
</div>
</body>
</html>