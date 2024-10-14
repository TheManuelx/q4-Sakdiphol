<html>
    <body>
        <?php
            if (!isset($_COOKIE["lang"])){
                echo "Cookie not set!";
            }else if ($_COOKIE["lang"] == "en"){
                echo "Welcome...";
            }else if ($_COOKIE["lang"] == "th"){
                echo "ยินดีต้อนรับ...";
            }
        ?>
    </body>
</html>