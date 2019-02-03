<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sign Up Page</title>
  <link href="../STYLE/sign_up.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <script src="script.js"></script>

  <nav>
    <ul>
      <li><a title="Home Page" href="../HTML/index.html" ><h1>Power Up ⚡</h1></a></li>
      <li><a title="Check Us Out" href=# >About Us</a></li>
      <li><a title="Login" class="login" href="../PHP/login.php">Login</a></li>
    </ul>
  </nav>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="signup-text">
      <form method="post" action="../PHP/data_insert.php">
        <br><h2 title="Sign Up">Sign Up</h2><br>
        
        <!--<p title="Display Name">Username</p> -->
        <input title="Please Enter a Username" type="text" name="user" placeholder="Username" required>
        <br>

        <!--<p title="Email">Email</p> --> 
        <input title="Please Enter an Email" type="email" name="email" placeholder="Email" required>
        <br>

        <!--<p title="Password">Password</p> -->
        <input title="Please Enter a Password" type="password" name="pass" id="pass" placeholder="Password" required>
        <br>

        <!--<p title="Confirm Password">Confirm Password</p> --> 
        <input title="Please Re-Type Password" type="password" name="confpass" id="confpass" placeholder="Re-Type Password" required>
        <br>

        <button type="submit" formaction="../PHP/data_insert.php">Sign up</button>     

      </div>		  

    </form>
  </body>
</html>
