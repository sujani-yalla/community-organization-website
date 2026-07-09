<?php
session_start();
include "config/db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login | JCI VIJAYAWADA IMPACT</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .login-box {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #1e3a8a;
            color: white;
            border: none;
        }
    </style>
</head>

<body>

<div class="login-box">
    <h2>Admin Login</h2>
   <form method="POST" action="login_process.php">

  <input 
    type="text" 
    name="username" 
    placeholder="Username" 
    required
  >

  <input 
    type="password" 
    name="password" 
    placeholder="Password" 
    required
  >

  <button type="submit">Login</button>

</form>

</div>

</body>
</html>
