<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/catalog/databaseaccess/phones.php");
	class DeleteProductController{
		function ConfirmProduct(){
			$phone = new Phones();
			$phonearray=$phone->GetPhones();
			$result ="";
			$productid=$_GET['id'];
			foreach ($phonearray as $key => $phone) {
				if ($productid==$phone->id) {
				$result=$result . "<div class='container'>
		<h1 class='text-center'>$phone->brand $phone->name</h1>
	<hr>
			<div class='image'>
				<img src='../../pictures/$phone->big_image' class='w-50' id='big_img'>
		</div>
		<h5 class='text-center'>Biztos törölni szeretné ezt a terméket?</h5>
		<form method='post' action='../../sites/adminsite/admin.php'>
		<a class='btn btn-secondary' href='../../sites/adminsite/admin.php' role='button'>Mégsem</a>
		<button class='btn btn-danger' type='submit' value=$phone->id name='delete' href='../../sites/adminsite/admin.php' role='button'>Törlés</button>
		</form>
		</post>";
			}
			}
			return $result;
		}
		
}
?>
