<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login As</title>
  <link rel="icon" type="image/png" href="image/logoutemfavicon.png">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    /* Top header background */
    .top-header {
      background-color: #c0c0c0;
      padding: 10px 20px;
      display: flex;
      height: 80px;
      align-items: center;
    }

    /* Blue divider bar */
    .blue-bar {
      background-color: #30457d;
      height: 20px;
      width: 100%;
    }

    /* Center box */
    .login-box {
      max-width: 300px;
      margin: 80px auto;
      padding: 30px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 20px;
      font-size: 18px;
      letter-spacing: 1px;
    }

    .login-btn {
      display: block;
      width: 93%;
      padding: 10px;
      margin: 10px 0;
      background-color: #30457d;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
    }

    .login-btn:hover {
      background-color: #4f5b88;
    }
  </style>
</head>
<body>

  <div class="top-header">
  
    <img src="image/Logo_UTeM-Holdings_Bright-Back-1.png" alt="UTeM Holdings Logo" style="height:60px; width:auto;">

    </div>

  <div class="blue-bar"></div>

  <!-- Login selection box -->
  <div class="login-box">
    <h2>LOG IN AS</h2>
    <a href="admin_login.php" class="login-btn">ADMIN</a>
    <a href="user_login.php" class="login-btn">USER</a>
  </div>

</body>
</html>
