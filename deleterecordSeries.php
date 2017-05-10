<?include("conninfo.php"); 
$idtodelete=$_POST["requiredid"];

$query = "DELETE FROM series WHERE SeriesID='$idtodelete'";
$result=mysqli_query($link,$query);


header("location:series.php");

?>
