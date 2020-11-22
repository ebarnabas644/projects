<?php
	require($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/phones.php");
	require($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/grades.php");
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
		<form method='post' action='../../sites/adminproductsite/adminproductsite.php?id=$phone->productid'>
		<a class='btn btn-secondary' href='../../sites/adminsite/admin.php' role='button'>Mégsem</a>
		<button class='btn btn-danger' type='submit' value=$phone->id name='delete' href='../../sites/adminsite/admin.php' role='button'>Törlés</button>
		</form>
		</post>";
			}
			}
			return $result;
		}
		function ConfirmGrade(){
			require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
			$grade = new Grades();
			$gradearray=$grade->GetGrades(pg_query($db_connectiontocatalog, "SELECT grades.id id, grades.date date, grades.grade grade, grades.subject subject, grades.studentid studentid FROM grades INNER JOIN phones ON phones.id = grades.studentid"));
			$result ="";
			$productid=$_GET['id'];
			foreach ($gradearray as $key => $grade) {
				if ($productid==$grade->id) {
				$result=$result . "<div class='container'>
				<h1 class='text-center'>$grade->subject</h1>
				<hr>
				<h5 class='text-center'>Érdemjegy: $grade->grade</h5>
				<h5 class='text-center'>Beírás dátuma: $grade->date</h5>
		<h5 class='text-center'>Biztos törölni szeretné ezt az érdemjegyet?</h5>
		<form method='post' action='../../sites/adminsite/admin.php'>
		<a class='btn btn-secondary' href='../../sites/adminproductsite/adminproductsite.php?id=$grade->studentid' role='button'>Mégsem</a>
		<button class='btn btn-danger' type='submit' value=$grade->id name='delete' role='button'>Törlés</button>
		</form>
		</post>";
			}
			}
			return $result;
		
		
}
	}
?>
