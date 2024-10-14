<?php include "connect.php" ?>

<html>

<head><meta charset="utf-8"></head>

<body>

    <table border = '1'>

        <tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>รายละเอียดสินค้า</th><th>ราคา</th></tr>

<?php

    $stmt = $pdo->prepare("SELECT * FROM product");

    $stmt->execute();

    while ($row = $stmt->fetch()){

        echo "<tr>";

        echo "<th>" . $row ["pid"] . "<br>";

        echo "<th>" . $row ["pname"] . "<br>";

        echo "<th>" . $row ["pdetail"] . "<br>";

        echo "<th>" . $row ["price"] . "บาท <br>";

        echo "</tr>";

    }    

?>

</table>

</body>

</html>