<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/phones.php");
	class EditProductController{
		function PreviewProduct(){
			$phone = new Phones();
			$phonearray=$phone->GetPhones();
			$result ="";
			$productid=$_GET['id'];
			foreach ($phonearray as $key => $phone) {
				if ($productid==$phone->id) {
				$result=$result . "<div class='container'>
				<h1 class='text-center'>Tanuló adatainak szerkesztése</h1>
				<hr align='center'>
				<form id='testform' name='testform' method='post' action='../../sites/adminsite/admin.php'>
				<table align='center'>
				<tr>
				<td><label for='id'>Azonosító: </label></td>
				<td><input name='id' type='text' id='id' value='$productid' style='background-color:lightgrey' readonly/></td>
				</tr>
				<tr>
				<td><label for='name'>Név: </label></td>
				<td><input name='name' type='text' id='name' value='$phone->name' required /></td>
				</tr>
				<tr>
				<td><label for='price'>Évfolyam: </label></td>
				<td><input name='price' type='number' id='price' value='$phone->price' required /></td>
				</tr>
				<tr>
				<td><label for='brand'>Osztály: </label></td>
				<td><input name='brand' type='text' id='brand' value='$phone->brand' required /></td>
				</tr>
				<tr>
				<td><label for='image'>1. kép neve: </label></td>
				<td><input name='image' type='text' id='image' value='$phone->image'/></td>
				</tr>
				<tr>
				<td colspan='2' align='center'><a class='btn btn-secondary' href='../../sites/adminsite/admin.php' role='button'>Mégsem</a>
				<input class='btn btn-success' type='submit' name='save' value='Mentés' href='../../sites/adminsite/admin.php'/></td>
				</tr>
				</table>
				</form>
				</div>";
			}
			}
			return $result;
		}

}
?>
