<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/catalog/databaseaccess/phones.php");

	class AdminController{
		function CreateAdminTables(){
			$phone = new Phones();
			$phonearray=$phone->GetPhones();
			$result ="";

			foreach ($phonearray as $key => $phone) {
				$result=$result . "<div class='col-md-4 product-grid'>
			<div class='image'>
				<a href='../../sites/productsite/productsite.php?id=$phone->id'><img src='../../pictures/$phone->image' class='col-12'>
				<div class='overlay'>
					<div class='edit'><a href='../../sites/editsite/editsite.php?id=$phone->id'><img src='../../pictures/rsz_edit.png'</img></a></div>
					<div class='delete'><a href='../../sites/deletesite/deletesite.php?id=$phone->id'><img src='../../pictures/rsz_cross.png'</img></a></div>
										<div class='detail'><a href='../../sites/productsite/productsite.php?id=$phone->id'>Részletek</a></div>
				</div>
			</a>
		</div>
		<div id='items'>
		<h5 class='text-center'>$phone->brand</h5>
		<h5 class='text-center'>$phone->name</h5>
		<h5 class='text-center'>Ár: ".number_format($phone->price,0,',',' ')." Ft</h5>
		".($phone->stock=='true' ? "<div><a href='../../sites/productsite/productsite.php?id=$phone->id'><img src='../../pictures/rsz_green_pipe.png'</img></a></div>" : "<div><a href='../../sites/productsite/productsite.php?id=$phone->id'><img src='../../pictures/rsz_red_cross.png'</img></a></div>")."

		<a href='../../sites/productsite/productsite.php?id=$phone->id' class='btn buy'>Részletek</a>
		</div>
	</div>";
			}
			return $result;
		}
	}
?>