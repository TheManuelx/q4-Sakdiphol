<?php
    include "connect.php";
    session_start();
    if (empty($_SESSION["username"]) ) {
        header("location: login-form.php");
    }
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "Product Name : " . $row ["pname"] . "<br>";
        echo "Price : " . $row ["price"] . "<br>";
        echo "<hr>\n";
    }
?>
</body></html>