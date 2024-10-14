<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
    <?php
        $stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
        $stmt->bindParam(1, $_GET["username"]);
        if ($stmt->execute())
    ?>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        while ($row = $stmt->fetch()) :
    ?>
        Username : <?=$row ["username"]?><br>
        Name : <?=$row ["name"]?><br>
        Address : <?=$row ["address"]?><br>
        Email : <?=$row ["email"]?><br>
        <img src='mphoto/<?=$row["username"]?>.jpg' width='100'><br>
    <hr>
    <?php endwhile; ?>
</body>
</html>