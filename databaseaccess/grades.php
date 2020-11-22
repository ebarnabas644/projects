<?php

	require ($_SERVER['DOCUMENT_ROOT'] ."/items/phones/gradesdatabase.php");
	class Grades{
		function GetGrades($result){
			require ($_SERVER['DOCUMENT_ROOT'] ."/databaseaccess/accessdatabase.php");
			$gradearray=array();
			while($row=pg_fetch_array($result)){
				$id=$row["id"];
				$date=$row["date"];
				$grade=$row["grade"];
				$subject=$row["subject"];
				$studentid=$row["studentid"]
				$grade=new gradesdatabase($id,$date,$grade,$subject,$studentid);
				array_push($gradearray, $grade);
			}
			pg_close();
				return $gradearray;
		}
	}
?>