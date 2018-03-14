<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sih");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    // Get image name
$crimenumber = mysqli_real_escape_string($db, $_POST['crimenumber']);
$vehiclenumber = mysqli_real_escape_string($db, $_POST['vehiclenumber']);
$rcproduced = mysqli_real_escape_string($db, $_POST['rcproduced']);
$make = mysqli_real_escape_string($db, $_POST['make']);
$model = mysqli_real_escape_string($db, $_POST['model']);
$ownername = mysqli_real_escape_string($db, $_POST['ownername']);
$owneraddress = mysqli_real_escape_string($db, $_POST['owneraddress']);
$type = mysqli_real_escape_string($db, $_POST['type']);
$class = mysqli_real_escape_string($db, $_POST['class']);
$transportvehicletype = mysqli_real_escape_string($db, $_POST['transportvehicletype']);
$permitvalidity = mysqli_real_escape_string($db, $_POST['permitvalidity']);
$pollutioncertificatevalidity = mysqli_real_escape_string($db, $_POST['pollutioncertificatevalidity']);
$insuranceavailability = mysqli_real_escape_string($db, $_POST['insuranceavailability']);
$insurancecompanyname = mysqli_real_escape_string($db, $_POST['insurancecompanyname']);
$insurancenumber = mysqli_real_escape_string($db, $_POST['insurancenumber']);
$manoeuvre = mysqli_real_escape_string($db, $_POST['manoeuvre']);
$vehicledamagelevel = mysqli_real_escape_string($db, $_POST['vehicledamagelevel']);
$tradeplateavailability = mysqli_real_escape_string($db, $_POST['tradeplateavailability']);
$roadtestcarried = mysqli_real_escape_string($db, $_POST['roadtestcarried']);
$roadtestdescription = mysqli_real_escape_string($db, $_POST['roadtestdescription']);
$conditionoftyres = mysqli_real_escape_string($db, $_POST['conditionoftyres']);
$frontwhitereflectortape = mysqli_real_escape_string($db, $_POST['frontwhitereflectortape']);
$backwhitereflectortape = mysqli_real_escape_string($db, $_POST['backwhitereflectortape']);
$drivername = mysqli_real_escape_string($db, $_POST['drivername']);
$driveraddress = mysqli_real_escape_string($db, $_POST['driveraddress']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$dob = mysqli_real_escape_string($db, $_POST['dob']);
$age = mysqli_real_escape_string($db, $_POST['age']);
$mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$driverinjury = mysqli_real_escape_string($db, $_POST['driverinjury']);
$drivererror = mysqli_real_escape_string($db, $_POST['drivererror']);
$drivinglicensedetails = mysqli_real_escape_string($db, $_POST['drivinglicensedetails']);
$licensenumber = mysqli_real_escape_string($db, $_POST['licensenumber']);
$numberofinjuredpersons = mysqli_real_escape_string($db, $_POST['numberofinjuredpersons']);

    // image file directory

    $sql = "INSERT INTO vehicle (crimenumber,2vehiclenumber,2rcproduced,2make,2model,2ownername,2owneraddress,2type,2class,2transportvehicletype,2permitvalidity,2pollutioncertificatevalidity,2insuranceavailability,2insurancecompanyname,2insurancenumber,2manoeuvre,2vehicledamagelevel,2tradeplateavailability,2roadtestcarried,2roadtestdescription,2conditionoftyres,2frontwhitereflectortape,2backwhitereflectortape,2drivername,2driveraddress,2gender,2dob,2age,2mobilenumber,2email,2driverinjury,2drivererror,2drivinglicensedetails,2licensenumber,2numberofinjuredpersons) VALUES ('$crimenumber', '$vehiclenumber', '$rcproduced', '$make', '$model', '$ownername', '$owneraddress', '$type', '$class', '$transportvehicletype', '$permitvalidity', '$pollutioncertificatevalidity', '$insuranceavailability', '$insurancecompanyname',  '$insurancenumber', '$manoeuvre', '$vehicledamagelevel', '$tradeplateavailability', '$roadtestcarried', '$roadtestdescription', '$conditionoftyres', '$frontwhitereflectortape', '$backwhitereflectortape', '$drivername', '$driveraddress', '$gender', '$dob', '$age', '$mobilenumber', '$email', '$driverinjury', '$drivererror', '$drivinglicensedetails', '$licensenumber', '$numberofinjuredpersons')";
    // execute query
    mysqli_query($db, $sql);
  }
  ?>