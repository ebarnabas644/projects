<?php

	require ($_SERVER['DOCUMENT_ROOT'] ."/items/phones/gradesdatabase.php");
	class Grades{
		function GetGrades(){
			require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
			$result = pg_query($db_connectiontocatalog, "SELECT * FROM grades");
			$gradearray=array();
			while($row=pg_fetch_array($result)){
				$id=$row["id"];
				$date=$row["date"];
				$grade=$row["grade"];
				$subject=$row["subject"];
				$grade=new gradesdatabase($id,$date,$grade,$subject);
				array_push($gradearray, $grade);
			}
			pg_close();
				return $gradearray;
		}
	}
?>