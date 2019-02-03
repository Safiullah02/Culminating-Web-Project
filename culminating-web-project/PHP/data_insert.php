<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "culminating";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$user = $_POST['user'];
$pass = $_POST['pass'];
$conf_pass = $_POST['confpass'];
$email = $_POST['email'];
$sql = "INSERT INTO users (username, password, email)
VALUES ('$user', '$pass', '$email')";
if ($conf_pass === $pass) {
    if ($conn->query($sql) === TRUE) {
        include "../HTML/chatroom.html";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    include "../PHP/sign_up.php";
    echo '<p style="color: red; text-align: center">Passwords do not match!!</p>';
}
$conn->close();
?>
