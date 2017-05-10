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
			$SeriesID=$_POST["requiredid"];

			//echo $ID;

			$query="SELECT * FROM series WHERE SeriesID=$SeriesID"; // get existing data
			$result=mysqli_query($link,$query); // run query
			$r=mysqli_fetch_array($result); // get record data

			?>

			<form action="commitTVData.php" method="post">
				Series Name: <input type="text" name="newn" value="<?echo $r["SeriesName"];?>"><br><br>
				Description: <input type="text" name="newd" value="<?echo $r["Description"];?>"><br><br>
				<input type="hidden" name="SeriesID" value="<?echo $SeriesID;?>">
				<input type="submit" value="Commit Edit">
			</form>
			
			</div>
			</body>
<html>
			
			
