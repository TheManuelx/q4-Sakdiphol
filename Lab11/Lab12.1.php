<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โรงพยาบาลเอกชนใน กทม.</title>
    <script>
        async function getDataFromAPI() {
            try {
                let response = await fetch('/~cs6536349/Lab11/priv_hos.json');
                if (!response.ok) throw new Error('Network response was not ok');
                let rawData = await response.json();

                const result1 = document.getElementById('result1');
                const result2 = document.getElementById('result2');
                const result3 = document.getElementById('result3');

                // let result = document.getElementById('result');
                // result.innerHTML = ''; // ล้างผลลัพธ์ก่อนหน้า

                //  สร้างอาร์เรย์สำหรับเก็บโรงพยาบาลตามขนาด

                rawData.features.forEach(element => {
                    let hospital = element.properties;
                
                    // กำหนดขนาดของโรงพยาบาลตามจำนวนเตียง
                    if (hospital.num_bed >= 91) {
                        result1.innerHTML += hospital.name + '<br>';
                    } else if (hospital.num_bed >= 31) {
                        result2.innerHTML += hospital.name + '<br>';
                    } else {
                        result3.innerHTML += hospital.name + '<br>';
                    }
                });

            } catch (error) {
                console.error('Error fetching data:', error);
                let result = document.getElementById('result');
                result.innerHTML = 'ไม่สามารถดึงข้อมูลได้';
            }
        }

        // เรียกใช้งานฟังก์ชัน
        getDataFromAPI();
    </script>
</head>
<body>
    <h1>โรงพยาบาลเอกชนใน กทม.</h1>
    <div id="result1">
        <b>โรงพยาบาลขนาดใหญ่</b> <br><br>
    </div>
    <hr>
    <div id="result2">
        <b>โรงพยาบาลขนาดกลาง</b> <br><br>
    </div>
    <hr>
    <div id="result3">
        <b>โรงพยาบาลขนาดเล็ก</b> <br><br>
    </div>
</body>
</html>
