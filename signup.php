<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
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

    /* Sign up box */
    .signup-box {
      max-width: 350px;
      margin: 80px auto;
      padding: 25px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
      text-align: center;
    }

    .signup-box h2 {
      margin-bottom: 20px;
      font-size: 20px;
      font-weight: bold;
    }

    .signup-box input[type="text"],
    .signup-box input[type="tel"],
    .signup-box input[type="email"],
    .signup-box input[type="password"] {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .signup-btn {
      width: 95%;
      padding: 10px;
      background-color: #30457d;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
    }

    .login-link {
      margin-top: 15px;
      font-size: 13px;
    }

    .login-link a {
      text-decoration: none;
      color: #30457d;
      font-weight: bold;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Logo header -->
   <div class="top-header">
  
    <img src="image/Logo_UTeM-Holdings_Bright-Back-1.png" alt="UTeM Holdings Logo" style="height:60px; width:auto;">

    </div>
  <div class="blue-bar"></div>

  <!-- Sign up box -->
  <div class="signup-box">
    <h2>Sign Up</h2>
    <form action="signup_process.php" method="post">
      <input type="text" name="staff_no" placeholder="Staff No." required>
      <input type="tel" name="phone_no" placeholder="Phone No." required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Enter Password" required>
      <input type="password" name="confirm_password" placeholder="Re-enter Password" required>

      <button type="submit" class="signup-btn">Sign Up</button>
    </form>

    <div class="login-link">
      ALREADY HAVE AN ACCOUNT? <a href="user_login.php">Log In</a>
    </div>
  </div>

</body>
</html>
