<? include "conninfo.php";

$ID=$_POST["ID"];
$newfn=$_POST["newfn"];
$newsn=$_POST["newsn"];
$newdob=$_POST["newdob"];
$newemail=$_POST["newemail"];
$newun=$_POST["newun"];
$newpass=$_POST["newpass"];



$query="UPDATE users SET FirstName='$newfn', Surname='$newsn', DOB='$newdob', Email='$newemail', Username='$newun', Password='$newpass'  WHERE ID=$ID LIMIT 1";

$result=mysqli_query($link,$query);

header("location:adminindex.php");

?>