<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/phones.php");

	class Controller{
		function CreateTables(){
			$phone = new Phones();
			$phonearray=$phone->GetPhones();
			$result ="";

			foreach ($phonearray as $key => $phone) {
				$result=$result . "<div class='col-md-4 product-grid'>
			<div class='image'>
				<a href='sites/productsite/productsite.php?id=$phone->id'><img src='pictures/$phone->image' class='col-12'>
				<div class='overlay'>
					<div class='detail'><a href='sites/productsite/productsite.php?id=$phone->id'>Értékelések</a></div>
				</div>
			</a>
		</div>
		<div id='items'>
		<h5 class='text-center'>$phone->name</h5>
		<h5 class='text-center'>$phone->price</h5>
		<h5 class='text-center'>$phone->brand</h5>
		<a href='sites/productsite/productsite.php?id=$phone->id' class='btn buy'>Értékelések</a>
		</div>
	</div>";
			}
			return $result;
		}
	}
?>