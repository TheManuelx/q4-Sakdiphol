<?php
// เชื่อมต่อกับฐานข้อมูล
try {
    $pdo = new PDO("mysql:host=localhost:3306;dbname=sec2_11;charset=utf8", "Tstd11", "h26s5qDY");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// รับคำค้นหา
$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

// ค้นหาข้อมูลในฐานข้อมูล
$sql = "SELECT * FROM member WHERE username LIKE :keyword";
$stmt = $pdo->prepare($sql);
$searchKeyword = "%$keyword%";
$stmt->bindParam(':keyword', $searchKeyword, PDO::PARAM_STR);
$stmt->execute();

// แสดงผลลัพธ์
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <div>
            <strong>ชื่อ:</strong> <?= htmlspecialchars($row["name"]); ?><br>
            <strong>ที่อยู่:</strong> <?= htmlspecialchars($row["address"]); ?><br>
            <strong>อีเมล:</strong> <?= htmlspecialchars($row["email"]); ?><br>
            <img src='mphoto/<?= htmlspecialchars($row["username"]); ?>.jpg' width='100' alt='<?= htmlspecialchars($row["username"]); ?>'><br>
            <hr>
        </div>
    <?php endwhile;
} else {
    echo "ไม่พบข้อมูลสมาชิก";
}

// ปิดการเชื่อมต่อ
$pdo = null;
?>