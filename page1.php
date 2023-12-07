<?php
//connect to server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_page";
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//input
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
 $ConfirmPassword=$_POST['ConfirmPassword'];

// password check
if ($Password !== $ConfirmPassword) {
    echo "Error: Passwords do not match.";
    exit;
}

// Hash the password 
 $PasswordHash = password_hash($Password, PASSWORD_DEFAULT);

// insert query
$sql = $conn->prepare("INSERT INTO input (UserName, Password, ConfirmPassword) VALUES (?, ?, ?)");
$sql->bind_param("sss", $UserName, $PasswordHash, $ConfirmPassword);

// Execute the prepared statement

if ($sql->execute()) {
    header("location:register.html");// next page connection
    exit;
} else {
    echo "Error: Unable to register user.";
}

$sql->close();
$conn->close();
?>
