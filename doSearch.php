<?include "conninfo.php";

$thesearch=$_POST["search"];	
$thefirst=$_POST["first"];	// get data from form
//echo $thesearch;




$query="SELECT * FROM users WHERE Surname like '$thesearch' OR FirstName like '$thefirst'  "; // set up query


$result=mysqli_query($link,$query); 


$numrows=mysqli_num_rows($result);		// get number of rows found

if($numrows==0)
{
	echo "Sorry, nothing found";
}


while ($r=mysqli_fetch_array($result))	// get row
{
	echo $r["ID"]. " ";
	echo $r["FirstName"]. " ";	// get fields
	echo $r["Surname"]. " ";
	echo $r["DOB"]. " ";
	echo $r["SeriesID"]." ";
}
?>