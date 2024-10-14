<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>ค้นหาสมาชิก</title>
    <script>
        function searchMembers() {
            const keyword = document.getElementById('keyword').value;
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'memberTable.php?keyword=' + encodeURIComponent(keyword), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById('result').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>ค้นหาสมาชิก</h1>
    <input type="text" id="keyword" placeholder="ค้นหาสมาชิก" onkeyup="searchMembers()" required>
    <br><br>
    <div id="result"></div>
</body>
</html>