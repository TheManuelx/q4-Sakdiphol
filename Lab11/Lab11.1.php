<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- <link rel="stylesheet" href="style.css"> -->

<script>
    var xmlHttp;

    function checkUsername() {
        // document.getElementById("username").className = "thinking";

        xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = showUsernameStatus;

        var username = document.getElementById("username").value;
        var url = "checkName.php?username=" + username;
        xmlHttp.open("GET", url);
        xmlHttp.send();
    }

    function showUsernameStatus() {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            // if (xmlHttp.responseText == "okay") {
            //     document.getElementById("username").className = "approved";

            // } else {
            //     document.getElementById("username").className = "denied";
            //     document.getElementById("username").focus();
            //     document.getElementById("username").select();
            // }
            document.getElementById('warning').innerHTML = xmlHttp.responseText;
        }
    }
</script>
</head>

<body>
    <form>
        <h1>Please register:</h1>
        Username:<input id="username" type="text" onkeyup="checkUsername()">
        <p id="warning" class="text-red-500">
        </p>
        <br>
        First Name:<input type="text" name="firstname"><br> 
        Last Name:<input type="text" name="lastname"><br> 
        Email:<input type="text" name="email"><br> 
        <input type="submit" value="Register">
    </form>
</body>
</html>