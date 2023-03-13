<!DOCTYPE html>
<html lang="EN">
<head>

<title>
Confirmation Details
</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="form_proc_new.css" />
</head>


<body>

<div class="content">

<?php

if (
	(isset($_POST["concert_name"])) && (!empty($_POST["concert_name"])) &&
	(isset($_POST["concert_location"])) && (!empty($_POST["concert_location"])) &&
	(isset($_POST["concert_dates"])) && (!empty($_POST["concert_dates"])) &&
	(isset($_POST["ticket_number"])) && (!empty($_POST["ticket_number"]))
	) 

{

$concertName = $_POST["concert_name"];
$concertLocation = $_POST["concert_location"];
$concertDates = $_POST["concert_dates"];
$ticketNumber = $_POST["ticket_number"];

# Proper function for format date("F d, Y");
# Unsure how to implement


?>


<p>
	Thank you for your order for the concert "<?php echo $concertName ?>". <br/>
	The concert is on <?php echo $concertDates ?> in <?php echo $concertLocation ?>. <br/>
	You have ordered <?php echo $ticketNumber ?> tickets. <br/>
</p>

<?php 

}

else {
	echo "<p>Please enter the necessary values for concert name, location, date, and the number of tickets.</p>";
}

?>

</div>

</body>

</html>