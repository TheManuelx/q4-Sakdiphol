<?php
// เชื่อมต่อฐานข้อมูล
$pdo = new PDO("mysql:host=localhost:3306;dbname=sec2_11;charset=utf8", "Tstd11", "h26s5qDY");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// รับชื่อผู้ใช้จาก URL
$username = htmlspecialchars($_GET["username"]); // ป้องกัน XSS

// ตรวจสอบว่าชื่อผู้ใช้มีอยู่ในฐานข้อมูลหรือไม่
$stmt = $pdo->prepare("SELECT COUNT(*) FROM member WHERE username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
$count = $stmt->fetchColumn();

if ($count == 0) {
    echo "okay"; // ชื่อผู้ใช้ว่าง
} else {
    echo "denied"; // ชื่อผู้ใช้ถูกใช้แล้ว
}
?>