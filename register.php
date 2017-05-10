<html>
<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<title>Assignment 2</title>
	<link rel="stylesheet" href="styles.css"/>
</head>
	<body>
		
		<div id="pageContent">
		
		<h2>Please Register Details</h2>
		<form action="insertData.php" class="insertData" method="post">
			First name: <input type="text" name="firstname"><br><br>
			Surname: <input type="text" name="surname"><br><br>
			DOB: <input type="text" name="dob"><br><br>
			Email: <input type="text" name="email"><br><br>
			Username: <input type="text" name="username"><br><br>
			Password: <input type="text" name="password"><br><br>
			TV Series: <select name="tvseries"><br><br>
			<option value="1">Criminal Minds</option>
			<option value="2">Breaking Bad</option>
			<option value="3">Shameless</option>
			<option value="4">Pretty Little Liars</option>
			<option value="5">Friends</option>
			<option value="6">Orange is the New Black</option>
			</select><br><br>
			<input type="submit" value="Submit">
		</form>
		</div>
	</body>


</html>