<?php
//retrieve session data
  session_start();

	$mgrssn = $_SESSION['manager'];  
	$dbHost = "academic-mysql.cc.gatech.edu";         //Location Of Database usually its localhost 
    $dbUser = "cs4400_Group_59";            //Database User Name 
    $dbPass = "sg44Hlvd";            //Database Password 
    $dbDatabase = "cs4400_Group_59";    //Database Name 
     
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
    //Connect to the databasse 
    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
	$affect = $_SESSION['affect'];

echo '<html>
<head>
<title>GT Car Rental: Rental Change Request   </title>

<p><b>User Affected </b></p> 

<form>
	Username: '; echo  $affect['Username'] . "<br>";

	echo 'Original pick up time: '; echo  $affect['Pick_Up_Date_Time'] . "<br>";

	echo 'Original return time: '; echo  $affect['Return_Date_Time'] . "<br>";
	

	//Email Address:
	//Phone Number: 
	
echo'	<input type="submit" value="Cancel Reservation">
	<input type="submit" value="Show car availability">
</form>';
?>
