<?php 
//Show current date in timstamp
echo "<p>Current date in timestamp: </p>". time();

//Convert timestamp date in em current date
echo "<p>Timestamp date to current date:</p>". date("d/m/Y", time());

//Convert current date to current timestamp date
echo "<p>Current date to timestamp date: </p>". strtotime(date("d/m/Y", time()));

//Sum 10 day on a date
$date = time() + 864000;
$sumDate = date("d/m/Y", $date);
echo "<p>add 10 days to schedule: </p>". $sumDate;

//Subtract 10 days on a date
$date = time() + 864000;
$subtractDate = date("d/m/Y", time());
echo "<p>Subtract 10 days to schedule: </p>". $subtractDate;

//Converting timestamp to database settings 
echo "<p>Current date in database settings: </p>". date("Y-m-d H:i:s", time());

//Find the day on the calendar
echo "<p>Name day on calendar: </p>". date("D/m/Y", time());

?>