<?session_start();
 include "conninfo.php";
$un=$_POST["Username"];
$pw=$_POST["Password"];

$query="SELECT * FROM admin WHERE Username like '$un' AND Password like '$pw'";

$result=mysqli_query($link,$query); // connect to database

$numrows=mysqli_num_rows($result); 	// get number of rows

if($numrows==1) // log on
{
	$_SESSION["Username"]=$un;
	
?>
	
	Thank you for logging in! You can now add, edit and delete records.<br></br>
	
	<a href="adminindex.php">Go to search page</a>
	<?
}
else // dont log on
{
	echo "Sorry wrong username/password";
}

?>