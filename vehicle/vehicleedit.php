<?php
// including the database connection file
include_once("connect.php");
 
if(isset($_POST['submit']))
{    
$crimenumber = $_POST['crimenumber'];
$vehiclenumber = $_POST['vehiclenumber'];
$rcproduced = $_POST['rcproduced'];
$make = $_POST['make'];
$model = $_POST['model'];
$ownername = $_POST['ownername'];
$owneraddress = $_POST['owneraddress'];
$type = $_POST['type'];
$class = $_POST['class'];
$transportvehicletype = $_POST['transportvehicletype'];
$permitvalidity = $_POST['permitvalidity'];
$pollutioncertificatevalidity = $_POST['pollutioncertificatevalidity'];
$insuranceavailability = $_POST['insuranceavailability'];
$insurancecompanyname = $_POST['insurancecompanyname'];
$insurancenumber = $_POST['insurancenumber'];
$manoeuvre = $_POST['manoeuvre'];
$vehicledamagelevel = $_POST['vehicledamagelevel'];
$tradeplateavailability = $_POST['tradeplateavailability'];
$roadtestcarried = $_POST['roadtestcarried'];
$roadtestdescription = $_POST['roadtestdescription'];
$conditionoftyres = $_POST['conditionoftyres'];
$frontwhitereflectortape = $_POST['frontwhitereflectortape'];
$backwhitereflectortape = $_POST['backwhitereflectortape'];
$drivername = $_POST['drivername'];
$driveraddress = $_POST['driveraddress'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$driverinjury = $_POST['driverinjury'];
$drivererror = $_POST['drivererror'];
$drivinglicensedetails = $_POST['drivinglicensedetails'];
$licensenumber = $_POST['licensenumber'];
$numberofinjuredpersons = $_POST['numberofinjuredpersons'];
        
    
    // checking empty fields
  /*  if(empty($firstname) || empty($lastname)) {            
        if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty.</font><br/>";
        }
        
        if(empty($lastname)) {
            echo "<font color='red'>Lastname field is empty.</font><br/>";
        }
       
                
    } 
 
    else {  
         */
        //updating the table

        /*$result = mysqli_query($mysqli, "UPDATE vehicle SET 2vehiclenumber='$vehiclenumber',2rcproduced='$rcproduced',2make='$make',2model='$model',2ownername='$ownername',2owneraddress='$owneraddress',2type='$type' , 2class='$class', 2transportvehicletype='$transportvehicletype', 2permitvalidity='$permitvalidity' , 2pollutioncertificatevalidity='$pollutioncertificatevalidity' , insuranceavailability='$insuranceavailability' , insurancecompanyname='$insurancecompanyname' , 2insurancenumber='$insurancenumber' , 2manoeuvre='$manoeuvre' , 2vehicledamagelevel='$vehicledamagelevel' , 2tradeplateavailability='$tradeplateavailability' , 2roadtestcarried='$roadtestcarried', 2roadtestdescription='$roadtestdescription', 2conditionoftyres='$conditionoftyres' , 2frontwhitereflectortape='$frontwhitereflectortape', 2backwhitereflectortape='$backwhitereflectortape' , 2drivername='$drivername', 2driveraddress='$driveraddress' , 2gender='$gender' , 2dob='$dob',2age='$age', 2mobilenumber='$mobilenumber', 2email='$email' , 2driverinjury='$driverinjury', 2drivererror='$drivererror', 2drivinglicensedetails='$drivinglicensedetails' , 2licensenumber='$licensenumber' , 2numberofinjuredpersons='$numberofinjuredpersons' WHERE crimenumber='$crimenumber'");*/
        
        //redirectig to the display page. In our case, it is index.php
        $result = mysqli_query($mysqli, "UPDATE vehicle SET 2vehiclenumber='$vehiclenumber',2rcproduced='$rcproduced',2make='$make',2model='$model',2ownername='$ownername',2owneraddress='$owneraddress',2type='$type' , 2class='$class', 2transportvehicletype='$transportvehicletype', 2permitvalidity='$permitvalidity', 2pollutioncertificatevalidity='$pollutioncertificatevalidity',  2insuranceavailability='$insuranceavailability', 2insurancecompanyname='$insurancecompanyname', 2insurancenumber='$insurancenumber' , 2manoeuvre='$manoeuvre' , 2vehicledamagelevel='$vehicledamagelevel' , 2tradeplateavailability='$tradeplateavailability' , 2roadtestcarried='$roadtestcarried', 2roadtestdescription='$roadtestdescription', 2conditionoftyres='$conditionoftyres' , 2frontwhitereflectortape='$frontwhitereflectortape', 2backwhitereflectortape='$backwhitereflectortape' , 2drivername='$drivername', 2driveraddress='$driveraddress' , 2gender='$gender' , 2dob='$dob',2age='$age', 2mobilenumber='$mobilenumber', 2email='$email' , 2driverinjury='$driverinjury', 2drivererror='$drivererror', 2drivinglicensedetails='$drivinglicensedetails' , 2licensenumber='$licensenumber' , 2numberofinjuredpersons='$numberofinjuredpersons'  WHERE crimenumber='$crimenumber'");
        header("Location: mix.php");
   
}
?>
<?php
//getting id from url
$crimenumber = $_GET['crimenumber'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM vehicle WHERE crimenumber='$crimenumber'");
 
while($res = mysqli_fetch_array($result))
{
    $crimenumber = $res['crimenumber'];
$vehiclenumber = $res['2vehiclenumber'];
$rcproduced = $res['2rcproduced'];
$make = $res['2make'];
$model = $res['2model'];
$ownername = $res['2ownername'];
$owneraddress = $res['2owneraddress'];
$type = $res['2type'];
$class = $res['2class'];
$transportvehicletype = $res['2transportvehicletype'];
$permitvalidity = $res['2permitvalidity'];
$pollutioncertificatevalidity = $res['2pollutioncertificatevalidity'];
$insuranceavailability = $res['2insuranceavailability'];
$insurancecompanyname = $res['2insurancecompanyname'];
$insurancenumber = $res['2insurancenumber'];
$manoeuvre = $res['2manoeuvre'];
$vehicledamagelevel = $res['2vehicledamagelevel'];
$tradeplateavailability = $res['2tradeplateavailability'];
$roadtestcarried = $res['2roadtestcarried'];
$roadtestdescription = $res['2roadtestdescription'];
$conditionoftyres = $res['2conditionoftyres'];
$frontwhitereflectortape = $res['2frontwhitereflectortape'];
$backwhitereflectortape = $res['2backwhitereflectortape'];
$drivername = $res['2drivername'];
$driveraddress = $res['2driveraddress'];
$gender = $res['2gender'];
$dob = $res['2dob'];
$age = $res['2age'];
$mobilenumber = $res['2mobilenumber'];
$email = $res['2email'];
$driverinjury = $res['2driverinjury'];
$drivererror = $res['2drivererror'];
$drivinglicensedetails = $res['2drivinglicensedetails'];
$licensenumber = $res['2licensenumber'];
$numberofinjuredpersons = $res['2numberofinjuredpersons'];
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
             Police Login
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
<style type="text/css">
   #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
    background: #ffffff;
   }
   form{
    width: 70%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   
</style>
</head>
<body>
<div id="content">
  <form method="POST" action="vehicleedit.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <h3>ACCIDENTAL DETAILS ENTERING FORM </h3> <br /> 
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Crime Number  </label>
    <input  name="crimenumber" id="crimenumber" value="<?php echo $crimenumber;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Vehicle Number</label>
    <input  name="vehiclenumber" id="vehiclenumber" class="form-control" value="<?php echo $vehiclenumber;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>RC Produced</label>
     <select name='rcproduced' id='rcproduced' value="<?php echo $rcproduced;?>" class="form-control">
      <option value="">Select the value</option>
   <option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Make</label>
    <input  name="make" id="make" class="form-control" value="<?php echo $make;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Model</label>
    <input  name="model" id="model" class="form-control" value="<?php echo $model;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Owner Name</label>
    <input  name="ownername" id="ownername" class="form-control" value="<?php echo $ownername;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Owner Address</label>
    <input  name="owneraddress" id="owneraddress" class="form-control" value="<?php echo $owneraddress;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Type</label>
     <select name='type' id='type' value="<?php echo $type;?>" class="form-control">
       <option value="">Select the value</option>
   <option value="Transport">Transport</option>
      <option value="Non - Transport">Non - Transport</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Class</label>
     <select name='class' id='class' value="<?php echo $class;?>" class="form-control">
      <option value="">Select the value</option>
    <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
      <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
      <option value="Invalid Carriage">Invalid Carriage-LMV</option>
     <option value="Invalid Carriage mc">Invalid Carriage-Motor Cycle</option>
    <option value="Light Motor Vehicle NT">Light Motor Vehicle NT</option>
 <option value="Light Motor Vehicle Trans">Light Motor Vehicle Trans</option>
    <option value="Medium Goods Vehicle">Medium Goods Vehicle</option>
    <option value="Medium Passenger Vehicle">Medium Passenger Vehicle</option>
      <option value="Transport Vehicle">Transport Vehicle</option>
      <option value="Heavy Transport Vehicle">Heavy Transport Vehicle</option>
    <option value="Hazardous Vehicle">Hazardous Vehicle</option>
    <option value="Road Roller">Road Roller</option>
    <option value="Motor Vehicle of Specified Description/Others">Motor Vehicle of Specified Description/Others</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Transport Vehicle Type</label>
     <select name='transportvehicletype' id='transportvehicletype' value="<?php echo $transportvehicletype;?>" class="form-control">
       <option value="">Select the value</option>
   <option value="Ambulance">Ambulance</option>
      <option value="Aurticulated Vehicle">Aurticulated Vehicle</option>
      <option value="Auto Rickshaw">Auto Rickshaw</option>
    <option value="Call Taxi">Call Taxi</option>
    <option value="Educational Institution Vehicle">Educational Institution Vehicle</option>
    <option value="Goods Carriage">Goods Carriage</option>
      <option value="Hazardous Nature Carriage">Hazardous Nature Carriage</option>
    <option value="LMGV(NCP)">LMGV(NCP)</option>
      <option value="Maxi Cab">Maxi Cab</option>
    <option value="Meter Taxi">Meter Taxi</option>
    <option value="Mini Bus">Mini Bus</option>
    <option value="Omni Bus">Omni Bus</option>
    <option value="Private Service Vehicle">Private Service Vehicle</option>
    <option value="Share Auto">Share Auto</option>
    <option value="School Bus">School Bus</option>
      <option value="Stage Carriage">Stage Carriage</option>
      <option value="Mofussil">Mofussil</option>
      <option value="STU">STU</option>
      <option value="Private">Private</option>
       <option value="Town">Town</option>
       <option value="STU PCG Mofussil">STU PCG Mofussil</option>
       <option value="STU PCG Town">STU PCG Town</option>
    <option value="Stage Carriage Spare">Stage Carriage Spare</option>
      <option value="Tourist Taxi">Tourist Taxi</option>
    <option value="Others">Others</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Permit Validity</label>
    <input  name="permitvalidity" id="permitvalidity" type="Date" value="<?php echo $permitvalidity;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Pollution Certificate Validity</label>
    <input  name="pollutioncertificatevalidity" id="pollutioncertificatevalidity" value="<?php echo $pollutioncertificatevalidity;?>" type="Date" class="form-control" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Insurance Availability</label>
     <select name='insuranceavailability' id='insuranceavailability' value="<?php echo $insuranceavailability;?>" class="form-control">
       <option value="Select Insurance Availability">--Select Insurance Availability--</option>
       <option value="Available">Produced</option>
      <option value="Not Available">Not Produced</option>
      <option value="Exempted">Exempted</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Insurance Company Name</label>
    <input  name="insurancecompanyname" id="insurancecompanyname" value="<?php echo $insurancecompanyname;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Insurance Number</label>
    <input  name="insurancenumber" id="insurancenumber" class="form-control" value="<?php echo $insurancenumber;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Manoeuvre</label>
     <select name='manoeuvre' id='manoeuvre' value="<?php echo $manoeuvre;?>" class="form-control">
      <option value="">Select the value</option>
    <option value="Turning Right">Turning Right</option>
      <option value="Turning Left">Turning Left</option>
      <option value="Making U Turn">Making U Turn</option>
    <option value="Temporarily held up">Temporarily held up</option>
    <option value="Parked">Parked</option>
    <option value="Sudden Stop">Sudden Stop</option>
      <option value="Sudden Start">Sudden Start</option>
      <option value="Overtaking From Left">Overtaking From Left</option>
    <option value="Starting From Near Side">Starting From Near Side</option>
    <option value="Starting From off-side">Starting From off-side</option>
    <option value="Reversing">Reversing</option>
    <option value="Over took on Curve">Over took on Curve</option>
           <option value="Others">Others</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Vehicle Damage Level</label>
     <select name='vehicledamagelevel' id='vehicledamagelevel' value="<?php echo $vehicledamagelevel;?>" class="form-control">
      <option value="">Select the value</option>
       <option value="No Damage">No Damage</option>
     <option value="Minor Damage">Minor Damage</option>
      <option value="Multiple Damage">Multiple Damage</option>
      <option value="Others">Others</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Trade Plate Availability</label>
     <select name='tradeplateavailability' id='tradeplateavailability' value="<?php echo $tradeplateavailability;?>" class="form-control">
      <option value="">Select the value</option>
      <option value="No">No</option>
       <option value="Yes">Yes</option>
      <option value="Not Applicable">Not Applicable</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Road test Carried</label>
     <select name='roadtestcarried' id='roadtestcarried' value="<?php echo $roadtestcarried;?>" class="form-control">
      <option value="">Select the value</option>
       <option value="No">No</option>
     <option value="Yes">Yes</option>
       <option value="Others">Others</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Road Test Description</label>
    <input  name="roadtestdescription" id="roadtestdescription" value="<?php echo $roadtestdescription;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Condition of Tyres</label>
     <select name='conditionoftyres' id='conditionoftyres' value="<?php echo $conditionoftyres;?>" class="form-control">
      <option value="">Select the value</option>
       <option value="Good Condition">Good Condition</option>
      <option value="Defects">Defects</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Fixation of Front White Reflector tape</label>
     <select name='frontwhitereflectortape' id='frontwhitereflectortape' value="<?php echo $frontwhitereflectortape;?>" class="form-control">
      <option value="">Select the value</option>
<option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Fixation of Rear Reflector tape</label>
     <select name='backwhitereflectortape' id='backwhitereflectortape' value="<?php echo $backwhitereflectortape;?>" class="form-control">
      <option value="">Select the value</option>
<option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Driver Name</label>
    <input  name="drivername" id="drivername" class="form-control" value="<?php echo $drivername;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Driver Address</label>
    <input  name="driveraddress" id="driveraddress" class="form-control" value="<?php echo $driveraddress;?>" placeholder="Enter Number">
    </div>
     <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Gender</label>
     <select name='gender' id='gender' value="<?php echo $gender;?>" class="form-control">
      <option value="">Select the value</option>
     <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Date of Birth</label>
    <input  name="dob" id="dob" class="form-control" value="<?php echo $dob;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Age</label>
    <input  name="age" id="age" class="form-control" value="<?php echo $age;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Mobile Number</label>
    <input  name="mobilenumber" id="mobilenumber" value="<?php echo $mobilenumber;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>E-mail</label>
    <input  name="email" id="email" class="form-control" value="<?php echo $email;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Driver Injury</label>
     <select name='driverinjury' id='driverinjury' value="<?php echo $driverinjury;?>" class="form-control">
      <option value="">Select the value</option>
       <option value="Fatal">Fatal</option>
      <option value="Grievous">Grievous</option>
      <option value="Minor H">Minor Hospitalised</option>
      <option value="Minor NH">Minor Non-Hospitalised</option>
     <option value="No Injury">No Injury</option>
      <option value="Others">Others</option>
      </select>
    </div>
     <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Driver Error</label>
     <select name='drivererror' id='drivererror' value="<?php echo $drivererror;?>" class="form-control">
      <option value="">Select the value</option>
    <option value="Abandoning Vehicle">Abandoning Vehicle </option>
    <option value="Abrupt Brake">Abrupt Brake</option>
    <option value="Aggressive Driving">Aggressive Driving</option>
    <option value="Assault on Passengers">Assault on Passengers</option>
    <option value="Distance from Vehicle in Front">Distance from Vehicle in Front</option>   
    <option value="Drunken driving">Drunken driving</option>
    <option value="Fatal Accidents">Fatal Accidents</option>
    <option value="None">None</option>
    <option value="Others">Others</option>
    <option value="Overload by Goods">Overload by Goods</option>
    <option value="Projection of Loads">Projection of Loads</option>
    <option value="Restriction to Carriage of Dangerous Substances">Restriction to Carriage of Dangerous Substances</option>
    <option value="Speed Exceeding the Specified Limit">Speed Exceeding the Specified Limit</option>
    <option value="Use of cellphone">Use of cellphone</option>
    <option value="Used the Vehicle in Unsafe Condition">Used the Vehicle in Unsafe Condition</option>
    <option value="Violation of Road Regulations Rule">Violation of Road Regulations Rule</option>
      </select>
    </div>
     <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Driving License Details</label>
     <select name='drivinglicensedetails' id='drivinglicensedetails' value="<?php echo $drivinglicensedetails;?>" class="form-control">
      <option value="Select License Availability">--Select License Availability--</option>
       <option value="Produced">Produced</option>
      <option value="Not Produced">Not Produced</option>
      <option value="Not Obtained">Not Obtained</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Driving License Number</label>
    <input  name="licensenumber" id="licensenumber" class="form-control" value="<?php echo $licensenumber;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Number of Injured Persons</label>
    <input  name="numberofinjuredpersons" id="numberofinjuredpersons" value="<?php echo $numberofinjuredpersons;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
        <button class="btn btn-raised btn-unblock btn-danger" type="submit" name="submit" ><strong>SUBMIT &rarr;</strong></button>
    </div>
    <div >
        <button class="btn btn-raised btn-unblock btn-danger"> logout </button>
    </div>    
  </form>
</div>
</body>
</html>