<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/phones.php");
	require($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/grades.php");
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
		function PreviewGrade(){
			require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
			$grade = new Grades();
			$gradearray=$grade->GetGrades(pg_query($db_connectiontocatalog, "SELECT grades.id id, grades.date date, grades.grade grade, grades.subject subject, grades.studentid studentid FROM grades INNER JOIN phones ON phones.id = grades.studentid"));
			$result ="";
			$productid=$_GET['id'];
			foreach ($gradearray as $key => $grade) {
				if ($productid==$grade->id) {
				$result=$result . "<div class='container'>
				<h1 class='text-center'>Jegy hozzáadása</h1>
				<hr align='center'>
				<form id='testform' name='testform' method='post' action='../../sites/adminproductsite/adminproductsite.php?id=$productid'>
				<table align='center'>
				<tr>
				<td><label for='id'>Azonosító: </label></td>
				<td><input name='id' type='number' id='id' value='$productid' style='background-color:lightgrey' readonly/></td>
				</tr>
				<tr>
				<td><label for='subject'>Tantárgy: </label></td>
				<td><select name='subject' id='subject' value='$grade->subject'>
					<option value='Irodalom'>Irodalom</option>
					<option value='Matematika'>Matematika</option>
					<option value='Testnevelés'>Testnevelés</option>
					<option value='Biológia'>Biológia</option>
					<option value='Fizika'>Fizika</option>
					<option value='Informatika'>Informatika</option>
				</select>
				</td>
				</tr>
				<tr>
				<td><label for='grade'>Érdemjegy: </label></td>
				<td><input name='grade' type='number' id='grade' value='$grade->grade' required /></td>
				</tr>
				<tr>
				<td><input style='display: none' name='studentid' type='number' id='studentid' value='$grade->studentid' style='background-color:lightgrey' readonly/></td>
				</tr>
				<tr>
				<td colspan='2' align='center'><a class='btn btn-secondary' href='../../sites/adminproductsite/adminproductsite.php?id=$grade->studentid' role='button'>Mégsem</a>
				<input type='submit' class='btn btn-success' name='save' value='Mentés'/></td>
				</table>
			</form>
				</div>";
			}
			}
			return $result;
		}

}
?>
