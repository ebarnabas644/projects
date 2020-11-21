<?php
	require $_SERVER['DOCUMENT_ROOT'] . "/databaseaccess/phones.php";

	class ProductController{
		function PrepareProduct(){
			$phone = new Phones();
			$phonearray=$phone->GetPhones();
			$result ="";
			$productid=$_GET["id"];
			foreach ($phonearray as $key => $phone) {
				if ($productid==$phone->id) {
				$result=$result . "<div class='container'>
		<h1 class='text-center'>$phone->brand $phone->name</h1>
	<hr>
		<h5 class='text-center'>Osztály: "$phone->price"."$phone->brand"</h5>";
			}
			}
			return $result;
		}
	}
?>