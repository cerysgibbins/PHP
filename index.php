<!DOCTYPE html>
<?
@$error=$_GET["err"]; //get err from URL ?>
<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<title>Assignment 2</title>
	<link rel="stylesheet" href="styles.css"/>
	
	<a href="admin.php" id="admin">Admin Login</a><br><br><br>
	<a href="userlogin.php" id="user">User Login</a><br><br><br>
	<a href="register.php" id="register">Register Account</a>
	</head>
	
	
	<body>
	    <div id="header"> 
            <h2>TV Series Site</h2>
			
			<form action="checksearch.php" id="searchTV" method="post">
			Enter TV Search: <input type="text" name="search">
			<?if ($error==1)
			{
			echo "<font color='red'> *Please enter a search</font>";
			} 

			?>

			<input type="submit" value="Go!">

			</form>
			
			<img src="images/Top-TV-Series.gif" id="tvImage">
			
        </div>  
	
	
	

	
	</body>
	
	</html>
