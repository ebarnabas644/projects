<?php
	require ($_SERVER['DOCUMENT_ROOT'] . "/databaseaccess/phones.php");
	require ($_SERVER['DOCUMENT_ROOT'] . "/databaseaccess/grades.php");
	class ProductController{
		function PrepareProduct(){
			require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
			$phone = new Phones();
			$phonearray=$phone->GetPhones();
			$result ="";
			$productid=$_GET["id"];
			foreach ($phonearray as $key => $phone) {
				if ($productid==$phone->id) {
				$result=$result . "<div class='container'>
		<h1 class='text-center'>$phone->name</h1>
	<hr>
		<h5 class='text-center'>Osztály: $phone->price.$phone->brand</h5>
		";
			}
			}
			return $result;
		}
		function PrepareGrades(){
			require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
			$grade = new Grades();
			$id=$_GET["id"];
			$gradearray = $grade->GetGrades(pg_query($db_connectiontocatalog, "SELECT grades.id id, grades.date date, grades.grade grade, grades.subject subject, grades.studentid studentid FROM grades INNER JOIN phones ON phones.id = grades.studentid WHERE $id = grades.studentid ORDER BY date desc"));
			$result = "";
			foreach($gradearray as $key => $grade){
				$result = $result . "<tr>
				<td>$grade->subject</td>
				<td>$grade->date</td>
				<td>$grade->grade</td>
				<td><a href='../../sites/editsite/editproductsite.php?id=$grade->id'><img src='../../pictures/rsz_edit.png'/></a></td>
				<td><a href='../../sites/editsite/editproductsite.php?id=$grade->id'><img src='../../pictures/rsz_cross.png'/></a></td>
				</tr>";
				print_r($grade);
			}
			return $result;
			}
	}
?>