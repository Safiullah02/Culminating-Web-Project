<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>
            Power Up - Login
        </title>
        <link href="../STYLE/login.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <script src="script.js"></script>
        <nav>
            <ul>
                <li>
                    <a title="Home Page" href="../HTML/index.html" ><h1>Power Up ⚡</h1></a>
                </li>
                <li>
                    <a title="Check Us Out" href=# >About Us</a>
                </li>
                <li>
                    <a id="signup" href="../PHP/sign_up.php">Sign Up</a>
                </li>
            </ul>
        </nav>
        <form method="post" actiont="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="wrapper">
                <br>
                <h2>
                    Welcome Back
                </h2>
                <br>
                <!--<p title="Email">Email</p> --> 
                <input title="Please Enter Username" type="text" name="user" placeholder="Username" required>
                <br>
                <!--<p title="Password">Password</p> -->
                <input title="Please Enter a Password" type="password" name="pass" id="pass" placeholder="Password" required>
                <br>
                <a class="signup" href="#">Forgot Password?</a>
                <br>
                <button type="submit"><a>Login</a></button>
            </div>
        </form>
    </body>

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
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $user = ($_POST['user']);
    $pass = ($_POST['pass']);
    $sql = "SELECT password FROM users WHERE username = '$user'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pass == $row["password"]) header("Location: ../HTML/chatroom.html");
        }
    } else {    
        echo "<center><h3>Incorrect password or username!!</h3></center>";
    }
}
    ?>


</html>