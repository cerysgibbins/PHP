<? session_start();
$_SESSION["username"]="";	// make variable blank

session_destroy();		// destroy all session variables
?>

Successfully logged out!

<a href="index.php">Back to home page</a>