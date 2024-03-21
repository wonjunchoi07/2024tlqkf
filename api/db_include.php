<?php
$host = 'localhost';
$dbname = 'skillsbaseballpark';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "데이터베이스 연결 실패: " . $e->getMessage();
}
?>