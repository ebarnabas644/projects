<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/phones.php");

	class AdminController{
		function CreateAdminTables(){
			$phone = new Phones();
			$phonearray=$phone->GetPhones();
			$result ="";

			foreach ($phonearray as $key => $phone) {
				$result=$result . "<div class='col-md-4 product-grid'>
			<div class='image'>
				<a href='../../sites/productsite/productsite.php?id=$phone->id'><img src='../../pictures/$phone->image' class='col-12'></a>
				<div class='overlay'>
					<div class='edit'><a href='../../sites/editsite/editsite.php?id=$phone->id'><img src='../../pictures/rsz_edit.png'/></a></div>
					<div class='delete'><a href='../../sites/deletesite/deletesite.php?id=$phone->id'><img src='../../pictures/rsz_cross.png'/></a></div>
										<div class='detail'><a href='../../sites/productsite/productsite.php?id=$phone->id'>Részletek</a></div>
				</div>
		</div>
		<div id='items'>
		<h5 class='text-center'>$phone->brand</h5>
		<h5 class='text-center'>$phone->name</h5>
		<h5 class='text-center'>$phone->price</h5>
		<a href='../../sites/productsite/productsite.php?id=$phone->id' class='btn buy'>Részletek</a>
		</div>
	</div>";
			}
			return $result;
		}
	}
?>