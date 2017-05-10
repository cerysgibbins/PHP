<html>
<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<title>Assignment 2</title>
	<link rel="stylesheet" href="styles.css"/>
</head>
	<body>
		
		<div id="pageContent">
		
		<h2>Enter New Data</h2>

			<? include "conninfo.php";
			$ID=$_POST["requiredid"];

			//echo $ID;

			$query="SELECT * FROM users WHERE ID=$ID"; // get existing data
			$result=mysqli_query($link,$query); // run query
			$r=mysqli_fetch_array($result); // get record data

			?>

			<form action="commitData.php" method="post">
				First name: <input type="text" name="newfn" value="<?echo $r["FirstName"];?>"><br><br>
				Surname: <input type="text" name="newsn" value="<?echo $r["Surname"];?>"><br><br>
				DOB: <input type="text" name="newdob" value="<?echo $r["DOB"];?>"><br><br>
				Email: <input type="text" name="newemail" value="<?echo $r["Email"];?>"><br><br>
				Username: <input type="text" name="newun" value="<?echo $r["Username"];?>"><br><br>
				Password: <input type="text" name="newpass" value="<?echo $r["Password"];?>"><br><br>
				<input type="hidden" name="ID" value="<?echo $ID;?>">
				<input type="submit" value="Commit Edit">
			</form>
			
			</div>
			</body>
<html>
			
			
