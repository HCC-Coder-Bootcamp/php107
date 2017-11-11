<?php

function pay_calculator($workerName, $workingHours)
{
	if ($workingHours !== 'x') {
		$fullTimeSalary    = 2000;
		$weeklyWorkingHour = 40;
		$otHourlyRate      = 40;
		$partTimeRate      = 10;
		$workingWeek       = 4;

		if ($workingHours < $weeklyWorkingHour) {
			if ($workingHours == 0) {
				$msg = "You are fired!!";
			} else if ($workingHours < 0) {
				$msg = "Stop playing with me!";
			} else {
				$totalAmount = ($workingHours * $partTimeRate) * $workingWeek;
				$msg = "There you go, $workerName. Your salary is RM $totalAmount.";
			} 
		} else {
			if ($workingHours == $weeklyWorkingHour) {
				$msg = "There you go, $workerName. Your salary is RM $fullTimeSalary.";
			} else if ($workingHours > $weeklyWorkingHour) {
				$otHours = $workingHours - $weeklyWorkingHour;
				$otSalary = ($otHours * $otHourlyRate) * $workingWeek;
				$totalAmount = $fullTimeSalary + $otSalary;
				$msg = "There you go, $workerName. Your Salary is RM $totalAmount.";
			}
		}
	} else {
		$msg = "";
	}
	return $msg . PHP_EOL . PHP_EOL;
}