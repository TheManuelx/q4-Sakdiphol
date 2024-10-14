<?php include "connect.php"; ?>
<?php
    $stmt = $pdo->prepare("INSERT INTO member  VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $_POST["username"]);
    $stmt->bindParam(2, $_POST["password"]); 
    $stmt->bindParam(3, $_POST["name"]);
    $stmt->bindParam(4, $_POST["address"]);
    $stmt->bindParam(5, $_POST["mobile"]);
    $stmt->bindParam(6, $_POST["email"]);
    if ($stmt->execute()) {
        $username = $_POST["username"];
        $name = $_POST["name"]; 
        $address = $_POST["address"]; 
        $email = $_POST["email"]; 
    }
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
<h2>Username is <?=$username?></h2><br>
name is <?=$name?><br>
Address is <?=$address?><br>
Email is <?=$email?>
</body>
</html>