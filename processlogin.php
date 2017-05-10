<?session_start();
 include "conninfo.php";
$un=$_POST["Username"];
$pw=$_POST["Password"];

$query="SELECT * FROM users WHERE Username like '$un' AND Password like '$pw'";

$result=mysqli_query($link,$query); // connect to database

$numrows=mysqli_num_rows($result); 	// get number of rows

if($numrows==1) // log on
{
	$_SESSION["Username"]=$un;?>
	
	Thank you for logging in! You can now view different TV series and their episodes.<br></br>
	<a href="welcome.php">Go to secret page</a>
	<?
}
else // dont log on
{
	echo "Sorry wrong username/password";
}

?>