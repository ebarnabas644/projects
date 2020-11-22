<?php

class gradesdatabase{
	public $id;
	public $date;
	public $grade;
	public $subject;
	function __construct($id, $date, $grade, $subject, $studentid){
			$this->id = $id;
			$this->date = $date;
			$this->grade = $grade;
			$this->subject = $subject;
			$this->studentid = $studentid
	}
}
?>