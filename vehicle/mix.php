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
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'sih';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   //echo 'Connected successfully</br>';
   $sql = 'SELECT b.crimenumber, b.policestationname, b.vehiclenumber,a.2vehiclenumber FROM form b,vehicle a WHERE a.crimenumber = b.crimenumber';
   
   if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
         echo "<table>";
         echo "<tr>";
         echo "<th>Crime Number</th>";
         echo "<th>Police Station Name</th>";
         echo "<th>Vehicle1 Number</th>";
         echo "<th>Vehicle2 Number</th>";
         echo "</tr>";
         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['crimenumber'] . "</td>";
            echo "<td>" . $row['policestationname'] . "</td>";
				echo "<td>" . $row['vehiclenumber'] . "</td>";
            echo "<td>" . $row['2vehiclenumber'] . "</td>";
            echo "<td><a href='edwithcrime.php?crimenumber=" . $row['crimenumber'] . "'>Edit Accidentform Details</a></td>";
            echo "<td><a href='vehicleedit.php?crimenumber=" . $row['crimenumber'] . "'>Edit Vehicle2 Details</a></td>";
            echo "<td><a href='.php?crimenumber=" . $row['crimenumber'] . "'>View Accidentform Details</a></td>";
            echo "<td><a href='.php?crimenumber=" . $row['crimenumber'] . "'>View Vehicle2 Details</a></td>";
            echo "</tr>";
         }
         echo "</table>";
         mysqli_free_result($result);
      } else {
         echo "No records matching your query were found.";
      }
   } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }
   mysqli_close($conn);
?>
</div>

</div>

</body>
</html>