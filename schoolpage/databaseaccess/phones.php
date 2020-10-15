<?php

	require ($_SERVER['DOCUMENT_ROOT'] ."/catalog/items/phones/phonesdatabase.php");
	class Phones{
		function GetPhones(){
			require ($_SERVER['DOCUMENT_ROOT'] ."/catalog/databaseaccess/accessdatabase.php");
			$result = pg_query($db_connectiontocatalog, "SELECT * FROM phones");
			$phonearray=array();
			while($row=pg_fetch_array($result)){
				$id=$row["id"];
				$name=$row["name"];
				$price=$row["price"];
				$stock=$row["stock"];
				$image=$row["image"];
				$brand=$row["brand"];
				$big_image=$row["big_image"];
				$phone=new phonesdatabase($id,$name,$price,$stock,$image,$brand,$big_image);
				array_push($phonearray, $phone);
			}
			pg_close();
				return $phonearray;
		}
	}
?>