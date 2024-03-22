<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_POST["user_id"];
        $password = $_POST["password"];

        // SQL 쿼리를 수정합니다.
        $sql = "SELECT user_id, password FROM user WHERE user_id = :user_id AND password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":password", $password);

        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && ($user_id == $_POST['user_id'] && $password == $user['password'])) {
           $_SESSION["user_id"] = $user["user_id"];
           $_SESSION["password"] = $user["password"];
           header("Location:/");
           exit;
        } else {
            echo "회원구분, 아이디 또는 비밀번호를 확인해주세요.";
        }
    }
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
        background-color: #2b70ff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        width: 100%;
    }

    #login-form button:hover {
        background-color: #2b70ff;
    }
</style>
</head>
<body>

<div id="login-form">
    <h2>Login</h2>
    <form action="" method="post">
        <label for="user_id">Username:</label><br>
        <input type="text" id="user_id" name="user_id" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label>User Type:</label><br>
        <input type="radio" id="userclass" name="userType" value="userclass">
        <label for="userclass">관리자</label><br>
        <input type="radio" id="userclass" name="userType" value="userclass">
        <label for="userclass">담당자</label><br>
        <input type="radio" id="userclass" name="userType" value="userclass" checked>
        <label for="userclass">일반회원</label><br><br>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>

</body>
</html>