<? include "conninfo.php"; // connect to database
$newfn=$_POST["firstname"];
$newsn=$_POST["surname"];
$newdob=$_POST["dob"];
$newemail=$_POST["email"];
$newun=$_POST["username"];
$newpass=$_POST["password"];
$newtvs=$_POST["tvseries"];

$query="INSERT INTO users(FirstName, Surname, DOB, Email, Username, Password, SeriesID)
VALUES('$newfn', '$newsn', '$newdob', '$newemail', '$newun', '$newpass', $newtvs )";

echo $query;

$result=mysqli_query($link, $query);

header("location:userlogin.php");
?>



