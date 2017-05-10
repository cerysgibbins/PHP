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
	
		 
		<h2>Videos</h2>
		
		<p>Our most popular TV Series that the viewers are hooked on. Please feel free to watch the trailers.</p>
		
			<div id="videos">
						<iframe width="430" height="315" src="https://www.youtube.com/embed/Ha2NA89depo"  allowfullscreen></iframe>
					
						<iframe width="430" height="315" src="https://www.youtube.com/embed/HhesaQXLuRY" allowfullscreen></iframe>
						
						<iframe width="430" height="315" src="https://www.youtube.com/embed/SyqgdkQWKOI"  allowfullscreen></iframe>
						
						<iframe width="430" height="315" src="https://www.youtube.com/embed/SUO8B47XtGY" allowfullscreen></iframe>
						
						<iframe width="430" height="315" src="https://www.youtube.com/embed/hDNNmeeJs1Q"  allowfullscreen></iframe>
						
						<iframe width="430" height="315" src="https://www.youtube.com/embed/fAsNGrCgIc0" allowfullscreen></iframe>
					</div>
			
		
	</div>
		

	
	</body>
	
	</html>
