<? include "conninfo.php"; // connect to database
$newsen=$_POST["seriesname"];
$newdes=$_POST["description"];


$query="INSERT INTO series(SeriesName, Description)
VALUES('$newsen', '$newdes')";

echo $query;

$result=mysqli_query($link, $query);

header("location:series.php");
?>



