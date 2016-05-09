<?PHP
	//function insertOrder(){
    //if(isset($_POST['submit'])){
		//$DBname = "yah_general";
		session_start();
		$servername = "localhost";
        $username = "root";
        $password = "";
        $DBname = "yah_general";
		$conn = mysqli_connect($servername, $username, $password, $DBname);
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		$description = $_POST["descriptionNew"];
		$partNo = $_POST["partNo"];
		$unit = $_POST["unit"];
		$price = $_POST["price"];
		$total = $unit * $price;
        //$InvoiceNo = sessionStorage.getItem("InvoiceNo");
		// Create database
		$sql = "INSERT INTO orders (InvoiceNo, description, part_No, unit, price, total)
		VALUES ('".$_SESSION['InvoiceNo']."','".$description."','".$partNo."','".$unit."','".$price."','"
				.$total."')";
		if (!(mysqli_query($conn, $sql))) {
	        die("Error: " . $sql . "<br>" . mysqli_error($conn));                  
	    } 
		echo "New record created successfully";
		mysqli_close($conn);
		header("Location:enterData.php");
    	exit;
	//}
	//else
		//echo "form not submitted";
?>