<?php
	require $_SERVER['DOCUMENT_ROOT'] . "/catalog/databaseaccess/phones.php";

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
			<div class='image'>
				<img src='../../pictures/$phone->big_image' class='w-100' id='big_img'>
		</div>
		<h5 class='text-center'>Ár: ".number_format($phone->price,0,',',' ')." Ft</h5>";
			}
			}
			return $result;
		}
	}
?>