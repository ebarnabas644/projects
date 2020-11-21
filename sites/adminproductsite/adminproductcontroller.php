<?php
	include ($_SERVER['DOCUMENT_ROOT'] ."/sites/loginsite/session.php");
	require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
	require $_SERVER['DOCUMENT_ROOT'] . "/databaseaccess/phones.php";
	require $_SERVER['DOCUMENT_ROOT'] . "/databaseaccess/grades.php";
	class ProductController{
		function PrepareProduct(){
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
	}
	function PrepareGrades(){
		$grade = new Grades();
		$studentid = $_GET["id"];
		$gradearray = pg_query($db_connectiontocatalog, "SELECT * FROM grades INNER JOIN phones ON phones.id = grades.studentid ORDER BY date");
		$result = "";
		foreach($gradearray as $key => $grade){
			$result = $result . "<tr>
			<td>$grade->subject</td>
			<td>$grade->date</td>
			<td>$grade->grade</td>
			</tr>"
		}
		pg_close();
		return $result;
		}
	}
?>