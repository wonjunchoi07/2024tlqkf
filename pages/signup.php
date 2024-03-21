<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_POST['user_id'];
        $name = $_POST['name'];
        $password = $_POST['password'];
      
        try {
            $sql = "INSERT INTO user(user_id,name,password) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user_id,$name,$password]);
            echo "회원가입이 성공적으로 완료되었습니다.";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>회원가입</title>
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

    .container {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .container label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .container input[type="text"],
    .container input[type="password"],
    .container input[type="submit"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .container button {
        background-color: #2b70ff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        width: 100%;
    }

    .container input[type="submit"]:hover {
        background-color: #2b70ff;
    }
    
    .capcher{
        width:250px;
        height:80px;
    }
</style>
</head>
<body>

<div class="container">
    <h2>회원가입</h2>
    <form method="post">
        <label for="user_id">아이디:</label>
        <input type="text" id="user_id" name="user_id" required><br>
        <label for="idCheck">아이디 중복확인:</label>
        <button onclick="alert('사용가능한 아이디 입니다.')">아이디 중복 확인</button>
        <br>
        <br>
        <label for="password">비밀번호:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="name">이름:</label>
        <input type="text" id="name" name="name" required><br>
        <img class="capcher" src="./capcher.jpg" alt="">
        <label for="captcha">캡차:</label>
        <input type="text" id="captcha" name="captcha" required><br>
        <button type="submit">가입하기</button>
    </form>
</div>

</body>
</html>
