<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="icon" type="image/png" href="image/logoutemfavicon.png">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    /* Header */
    .top-header {
      background-color: #c0c0c0;
      padding: 10px 20px;
      display: flex;
      height: 80px;
      align-items: center;
    }

    /* Blue bar */
    .blue-bar {
      background-color: #30457d;
      height: 20px;
      width: 100%;
    }

    /* Login box */
    .login-box {
      max-width: 400px;
      margin: 80px auto;
      padding: 25px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 20px;
      font-size: 20px;
      font-weight: bold;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 95%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .login-options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 12px;
      margin: 10px 0;
    }

    .login-options label {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .login-options a {
      text-decoration: none;
      color: #30457d;
      font-weight: bold;
    }

    .login-btn {
      width: 100%;
      padding: 10px;
      background-color: #30457d;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
    }

    .loginadmin-btn {
      width: 100%;
      padding: 10px;
      background-color: #cad0e1ff;
      color: black;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
    }

    .signup-link {
      margin-top: 15px;
      font-size: 13px;
    }

    .signup-link a {
      text-decoration: none;
      color: #30457d;
      font-weight: bold;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="top-header">
  
    <img src="image/Logo_UTeM-Holdings_Bright-Back-1.png" alt="UTeM Holdings Logo" style="height:60px; width:auto;">

    </div>
  <div class="blue-bar"></div>

  <!-- Login box -->
  <div class="login-box">
    <h2>LOG IN AS USER</h2>
    <form action="login_process.php" method="post">
      <input type="text" name="username" placeholder="Staff No/ Username/ Email" required>
      <input type="password" name="password" placeholder="Password" required>

      <div class="login-options">
        <label>
          <input type="checkbox" name="remember"> Remember Me
        </label>
        <a href="#">Forgot Password?</a>
      </div>

      <button type="submit" class="login-btn">Log In</button>
      <button type="submit" class="loginadmin-btn"><a href="admin_login.php">Log In As Admin</a></button>
    </form>

    <div class="signup-link">
      DON'T HAVE AN ACCOUNT? <a href="signup.php">Sign Up</a>
    </div>
  </div>

</body>
</html>
