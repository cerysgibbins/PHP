<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<title>Assignment 2</title>
	<link rel="stylesheet" href="styles.css"/>
		
		
	
		
	<body>
	    <div id="pageContent">
            <h2>User Details Search</h2>
			<form action="logoff.php" method="post">
				<input type="submit" class="button" value="Log Out">
			</form>
			<a href="series.php" id="editSeries">Edit TV Series?</a><br><br><br>
			
			<?include "conninfo.php";

			//$thesearch=$_POST["search"];	
			//$thefirst=$_POST["first"];	// get data from form
			//echo $thesearch;




			$query="SELECT * FROM users,series WHERE users.SeriesID=series.SeriesID  "; // set up query


			$result=mysqli_query($link,$query); ?>

		

		<?
		while ($r=mysqli_fetch_array($result))	// get row
		{?>
			
			<? echo $r["ID"];?>
			
			<?echo $r["FirstName"];?>	
			
			<?echo $r["Surname"]; ?>
			
			<?echo $r["DOB"]; ?>
			
			<?echo $r["SeriesName"]; ?>
			
			
			
			<form  action="enteredit.php" method="post">			
				<td>
					<input type="hidden" value="<?echo $r["ID"];?>" name="requiredid">	
					<input type="submit" value="Edit">
				</td>	
				</form>			

			<form action="deleterecord.php" method="post">		
				<td>
					<input type="hidden" value="<?echo $r["ID"];?>" name="requiredid">
					<input type="submit" value="Delete">
				</td>	
			</form>	
			<?
		}
		?>
		
		
		
		</div>
		
	
	
	</body>
	
	</html>