<html><head><meta charset="utf-8">
<script>
	var xmlHttp;

    function send() {
        xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = showResult;

        var a = document.getElementById("a").value;
        var b = document.getElementById("b").value;
        var c = document.getElementById("c").value;
        var url= "Lab1.1.php?a=" + a + "&b=" + b + "&c=" + c;
       
       xmlHttp.open("GET", url);
       xmlHttp.send();   
   }
   function showResult() {
       if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
           document.getElementById("result").innerHTML = xmlHttp.responseText;
       }
   }
</script></head>
<body>
     มะม่วง กก.ละ 30 บาท ขายได้ <input type="number" id="a">กก.<br>
     ส้ม กก.ละ 70 บาท ขายได้ <input type="number" id="b">กก.<br>
     กล้วย หวีละ 30บาท ขายได้ <input type="number" id="c" onkeyup="send()">หวี<br>
     <span id="result"></span>
</body></html>