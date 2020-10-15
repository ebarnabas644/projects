<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/catalog/databaseaccess/phones.php");
	class EditProductController{
		function PreviewProduct(){
			$phone = new Phones();
			$phonearray=$phone->GetPhones();
			$result ="";
			$productid=$_GET['id'];
			foreach ($phonearray as $key => $phone) {
				if ($productid==$phone->id) {
				$result=$result . "<div class='container'>
				<h1 class='text-center'>Termék adatok módosítása</h1>
				<hr align='center'>
				<form id='testform' name='testform' method='post' action='../../sites/adminsite/admin.php'>
				<table align='center'>
				<tr>
				<td><label for='id'>Azonosító: </label></td>
				<td><input name='id' type='text' id='id' value='$productid' style='background-color:lightgrey' readonly/></td>
				</tr>
				<tr>
				<td><label for='name'>Terméknév: </label></td>
				<td><input name='name' type='text' id='name' value='$phone->name' required /></td>
				</tr>
				<tr>
				<td><label for='price'>Termékár: </label></td>
				<td><input name='price' type='number' id='price' value='$phone->price' required /></td>
				</tr>
				<tr>
				<td><label for='stock'>Van-e raktáron: </label>
				". ($phone->stock=='true' ? "<td align='center'><input name='stock' type='checkbox' id='stock' checked/></td>" : "<td><input name='stock' type='checkbox' id='stock'/></td>")."
				</tr>
				<tr>
				<td><label for='brand'>Márka: </label></td>
				<td><input name='brand' type='text' id='brand' value='$phone->brand' required /></td>
				</tr>
				<tr>
				<td><label for='image'>1. kép neve: </label></td>
				<td><input name='image' type='text' id='image' value='$phone->image'/></td>
				</tr>
				<tr>
				<td><label for='big_image'>2. kép neve: </label></td>
				<td><input name='big_image' type='text' id='big_image' value='$phone->big_image'/></td>
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
