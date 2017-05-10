<? include "conninfo.php";

$SeriesID=$_POST["SeriesID"];
$newn=$_POST["newn"];
$newd=$_POST["newd"];



$query="UPDATE series SET SeriesName='$newn', Description='$newd' WHERE SeriesID=$SeriesID LIMIT 1";

$result=mysqli_query($link,$query);

header("location:series.php");

?>