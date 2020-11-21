<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/phones.php");
	class DeleteProductController{
		function ConfirmProduct(){
			$phone = new Phones();
			$phonearray=$phone->GetPhones();
			$result ="";
			$productid=$_GET['id'];
			foreach ($phonearray as $key => $phone) {
				if ($productid==$phone->id) {
				$result=$result . "<div class='container'>
				<h1 class='text-center'>$phone->name</h1>
				<hr>
				<h5 class='text-center'>Osztály: $phone->price.$phone->brand</h5>
		<h5 class='text-center'>Biztos törölni szeretné ezt a tanulót?</h5>
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
