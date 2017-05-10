<?include("conninfo.php"); 
$idtodelete=$_POST["requiredid"];

$query = "DELETE FROM users WHERE ID='$idtodelete'";
$result=mysqli_query($link,$query);


header("location:adminindex.php");

?>
