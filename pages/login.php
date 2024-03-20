<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    #login-form {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    #login-form input[type="text"],
    #login-form input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    #login-form label {
        font-weight: bold;
    }

    #login-form input[type="radio"] {
        margin-right: 5px;
    }

    #login-form button {
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        width: 100%;
    }

    #login-form button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div id="login-form">
    <h2>Login</h2>
    <form action="#" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label>User Type:</label><br>
        <input type="radio" id="admin" name="userType" value="admin">
        <label for="admin">관리자</label><br>
        <input type="radio" id="staff" name="userType" value="staff">
        <label for="staff">담당자</label><br>
        <input type="radio" id="member" name="userType" value="member" checked>
        <label for="member">일반회원</label><br><br>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>

</body>
</html>