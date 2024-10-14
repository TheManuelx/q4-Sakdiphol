<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<form action="edit-member.php" method="post">
<input type="hidden" name="username" value="<?=$row["username"]?>">
Password : <input type="text" name="password" value="<?=$row["password"]?>"><br>
Name : <input type="text" name="name" value="<?=$row["name"]?>"><br>
Address : <br>
<textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br>
Mobile: <input type="tel" name="mobile" value="<?=$row["mobile"]?>"><br>
Email: <input type="email" name="email" value="<?=$row["email"]?>"><br>
<input type="submit" value="แก้ไข ">
</form>
</body>
</html>