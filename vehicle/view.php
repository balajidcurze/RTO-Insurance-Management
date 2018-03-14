<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>View Records</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<div class="container">
<h1>View Records</h1>

<p><b>View All</b></p>
<div class="table table-hover  d-flex justify-content-center w-100" >
	<table class="thead-dark">

<?php
// connect to the database
include('connect.php');

// get the records from the database
if ($result = $mysqli->query("SELECT * FROM form ORDER BY accidentdate"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table

//echo "<table border='1' cellpadding='10'>";

// set table headers
echo "<thead><tr><th>Crime Number</th><th>Police Station Name</th><th>Vehicle Number</th><th></th><th></th></thead></tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->crimenumber . "</td>";
echo "<td>" . $row->policestationname . "</td>";
echo "<td>" . $row->vehiclenumber . "</td>";
echo "<td><a href='edwithcrime.php?crimenumber=" . $row->crimenumber . "'>Edit</a></td>";
echo "<td><a href='.php?crimenumber=" . $row->crimenumber . "'>View</a></td>"; //write a html code are bootstrap class to view all the details related to that crime number as a form
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>
</div>

</div>

</body>
</html>