<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<div style="display:flex">
    <div>
        <img src='mphoto/<?=$row["username"]?>.jpg' width='200'>
    </div>
    <div style="padding: 15px">
        ชื่อ : <?=$row["name"]?><br>
        ที่อยู่ : <?=$row["address"]?><br>
        อีเมล : <?=$row["email"]?>
    </div>
</div>
</body>
</html>