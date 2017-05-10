

<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<title>Assignment 2</title>
	<link rel="stylesheet" href="styles.css"/>
		
		
		<body>
	    <div id="header"> 
            <h2>TV Series Search</h2>
			<?include "conninfo.php";

				$data=$_POST["search"];

				if($data=="")
				{
				header("location:index.php?err=1");

				}

				else
				{
				// carry on to search database...

				}

				$query="SELECT * FROM series "; // set up query


				$result=mysqli_query($link,$query); ?>
				
				
				
				<div id="pageContent">
				<nav>
					<ul id="pagemainmenu">
						<li><a href="index.php">Home</a></li>
					</ul>
				</nav>
				
				<?
				while ($r=mysqli_fetch_array($result))	// get row
				
				{?>
					
					<?echo $r["SeriesName"];	// get fields?>
					<br>
					
					<?echo $r["Description"] ;?>
					<br>
					
					<?echo "<br>";
				}
				?>
				
				</div>
			
			
			
		</div>  
	
	</body>
	
</html>	
	
	
	
	
	
	
	
	
	