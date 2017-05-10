<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<title>Assignment 2</title>
	<link rel="stylesheet" href="styles.css"/>
		
		
	
		
	<body>
	    <div id="pageContent">
            <h2>TV Series Details Search</h2>
			<form action="logoff.php" method="post">
				<input type="submit" class="button" value="Log Out">
			</form>
			<a href="adminindex.php" id="editSeries">Back to User Details?</a><br><br><br>
			<a href="addseries.php" id="addSeries">Add Series?</a><br><br><br>
			
			<?include "conninfo.php";

			//$thesearch=$_POST["search"];	
			//$thefirst=$_POST["first"];	// get data from form
			//echo $thesearch;




			$query="SELECT * FROM series"; // set up query


			$result=mysqli_query($link,$query); ?>

		

		<?
		while ($r=mysqli_fetch_array($result))	// get row
		{?>
			
			<? echo $r["SeriesID"];?>
			
			<?echo $r["SeriesName"];?>	
			
			<?echo $r["Description"]; ?>
			
			
			
			<form  action="entereditSeries.php" method="post">			
				<td>
					<input type="hidden" value="<?echo $r["SeriesID"];?>" name="requiredid">	
					<input type="submit" value="Edit">
				</td>	
			</form>			

			<form action="deleterecordSeries.php" method="post">		
				<td>
					<input type="hidden" value="<?echo $r["SeriesID"];?>" name="requiredid">
					<input type="submit" value="Delete">
				</td>	
			</form>	
			<?
		}
		?>
		
		
		
		</div>
		
	
	
	</body>
	
	</html>