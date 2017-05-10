<? include "conninfo.php";


$query="SELECT * FROM users,series WHERE users.SeriesID=series.SeriesID ORDER BY ID";
$result=mysqli_query($link,$query)or die("Sorry, didn't work!");

while($r=mysqli_fetch_array($result))
{
	echo $r["ID"];
	echo " ";
	echo $r["FirstName"];
	echo " ";
	echo $r["Surname"];
	echo " ";
	echo $r["DOB"];
	echo " ";
	echo $r["Email"];
	echo " ";
	echo $r["Username"];
	echo " ";
	echo $r["Password"];
	echo " ";
	echo $r["SeriesID"];
	echo "<br>";?>
	
	<form action="editdata.php" method="post">
	<input type="hidden" name="requiredid" value="<?echo $r["ID"];?>">
	<input type="submit" value="Edit">
	</form>
	<form action="deleterecord.php" method="post">
	<input type="hidden" name="requiredid" value="<?echo $r["ID"];?>">
	<input type="submit" value="Delete">
	</form>
	<?
}
?>


