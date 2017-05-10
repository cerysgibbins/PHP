<!DOCTYPE html>
<?session_start();?>
<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<title>Assignment 2</title>
	<link rel="stylesheet" href="styles.css"/>
	
	</head>
	
	<body>
		<?if((isset($_SESSION["Username"]))&&($_SESSION["Username"]!=""))
		{?>	
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
		<? }
		else {
		echo "Please do not try to break my GCHQ-level security!!";	
		}
		 ?>
		 
		<h2>Welcome to the TV Series Website!</h2>
		
			<p>Below are some of the series that we have available. However, some are not available to you yet. Please be patient, they are coming soon.</p>
			<img src="images/welcome.jpg" id="welcome">
		
	</div>
		

	
	</body>
	
	</html>
