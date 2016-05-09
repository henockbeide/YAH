<?PHP
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DBname = "yah_general";
    $conn = mysqli_connect($servername, $username, $password, $DBname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $InvoiceNo = $_POST["InvoiceNo"];
    //sessionStorage.setItem("InvoiceNo", $InvoiceNo);
    $_SESSION['InvoiceNo'] = $InvoiceNo;
    $name = $_POST["name"];
    $des = $_POST["description"];
    // Create contract
    $sql = "INSERT INTO contracts (InvoiceNo, Name, Description)
    VALUES ('".$InvoiceNo."','".$name."','".$des."')";
    if (!(mysqli_query($conn, $sql))) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));                  
    } 
    echo "New record created successfully";
    mysqli_close($conn);
    header("Location:enterData.php");
    exit;
    //include "enterData.php";
?>