<? session_start();	

include "conninfo.php";

if((isset($_SESSION["Username"]))&&($_SESSION["Username"]!=""))
{
	$un=$_SESSION["Username"];

	$query="SELECT * FROM users WHERE Username like '$un'";  //set up query
	$result=mysqli_query($link,$query);
	
	?>
	<!DOCTYPE html>
	<html>

	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<title>Assignment 2</title>
	<link rel="stylesheet" href="styles.css"/>
	
	</head>
	
	<body>
	
	<div id="pageContent">
		<nav>
			<ul id="pagemainmenu">
				<li><a href="welcome.php">Home</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="tvseries.php">TV Series</a></li>			
			</ul>
		</nav>
		
		<form action="logoff.php" method="post">
			<input type="submit" class="button" value="Log Out">
		</form>				
		<h2>Account Details</h2><br><br>
				
		<?
		while($r=mysqli_fetch_array($result))
		{
			echo $r["FirstName"]."<br>";
			echo $r["Surname"]."<br>";
			echo $r["DOB"]."<br>";
			echo $r["Email"]."<br>";
			echo $r["Username"]."<br>";
			echo $r["Password"];
		}
		?>
    </div>
	</body>
	</html>
    <?
}
else 
{
	echo "Please do not try to break my GCHQ-level security!!";	
}