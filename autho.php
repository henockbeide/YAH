<?PHP
	require 'databaseConn.php';
	$servername = "localhost";
    $username = "root";
    $password = "";
    $DBname = "yah_general";
	$conn = mysqli_connect($servername, $username, $password, $DBname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sqlLogin = "SELECT * FROM users 
		WHERE username='".$_POST["uName"]."' AND password='".$_POST["pWord"]."'";
	$result = mysqli_query($conn, $sqlLogin);
	if (mysqli_num_rows($result) > 0) {
		mysqli_close($conn);
    	header("Location:home.php");
    	exit;				    
	} 
	else
	{
		mysqli_close($conn);
		header("Location:index.php");
    	exit;
	}
			    
?>