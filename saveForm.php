<?php

$_username="";
$_usermail="";
$_usermsg="";
$db="dawermsg";
$table="contact";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{	
		if(isset($_REQUEST['name'])){ $_username=$_REQUEST['name']; }
		if(isset($_REQUEST['email'])){ $_usermail=$_REQUEST['email']; } 
		if(isset($_REQUEST['message'])){ $_usermsg=$_REQUEST['message']; }
	}
echo "variables have been set";	

 //----------------Sql conntction starting-------------------

$conn= mysql_connect('localhost','root','');	// Create connection
	if(! $conn )
	{die('Could not connect to the DATABASE, Either this is not the system at which you made the paper or the DATABASE has been deleted: ' . mysql_error(). PHP_EOL);} else {echo "This system is connected with DATABASE".PHP_EOL;}

mysql_select_db($db);	//Selecting the Default DB.

//-------------- Inserting the Answers to the DATABASE columns ---------
$sql="INSERT INTO `" . $table . "` ( `user_name` , `user_email` , `user_msg` , `user_ip` )
VALUES ('". $_username . "','" . $_usermail . "','" . $_usermsg . "','" . $_SERVER['REMOTE_ADDR'] . "')";	//inserting the line corresponding to the roll_number
if (mysql_query($sql, $conn)) {echo "Values saved Successfully".PHP_EOL;} else {echo "Error saving values: " . mysqli_error($conn).PHP_EOL;}

echo "<h1>Your Answers have been Saved Successfully</h1>";

mysql_close($conn);

?>