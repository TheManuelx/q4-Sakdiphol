<?php
$pdo = new PDO("mysql:host=localhost:3306;dbname=sec2_11;charset=utf8", "Tstd11", "h26s5qDY");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $pdo->prepare("SELECT * FROM product");

$stmt->execute();

while ($row = $stmt->fetch()) {
    echo "<pre>";
    print_r($row); 
    echo "</pre>";
    }
?>