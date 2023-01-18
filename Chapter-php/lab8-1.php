<html>
<head><title>แสดงการสร้างและใช้ฟังก์ชั่น</title></head>
<body>
    <?php
        function say_Hello() {
            echo "Hello PHP<br>";
        }
        function fullname($department, $fac){
            echo "Gasidet Boonyasakdanon<br> $department <br> $fac";
        }
        function cal($num1, $num2){
            return ($num1 + $num2);
        }
        //กำหนดค่า Default
        function mul($num3, $num4 = 30){
            return ($num3 * $num4);
        }
        function div($num5, $num6, &$result){  //แบบ pass by reference
            $result = ($num5 / $num6);
        }
    ?>
    <h2> การเรียกฟังก์ชั่นครั้งที่ 1 : </h2>
    <?php
        say_Hello();
    ?>
    <hr /><h2> การเรียกฟังก์ชั่นครั้งที่ 2 : </h2>
    <?php
        Say_Hello();
    ?>
    <hr /><h2> การเรียกฟังก์ชั่นครั้งที่ 3 : </h2>
    <?php
        Say_hello();
    ?>
    <hr /><h2> การเรียกฟังก์ชั่นครั้งที่ 4 : </h2>
    <?php
        $info = "Information Technology";
        $faculty = "FITM";
        fullname($info, $faculty);
    ?>
    <hr /><h2> การเรียกฟังก์ชั่นครั้งที่ 5 : </h2>
    <?php
        $num1 = 50;
        $num2 = 30;
        $sum = cal($num1, $num2);
        echo "หาผลบวก(+) = ".$sum."<br>";

        $num3 = 50;
        $num4 = 30;
        $total = mul($num3);
        echo "หาผลคูณ(*) = ".$total."<br>";


        //แบบ pass by reference
        $num5 = 50;
        $num6 = 10;
        $result;
        div($num5, $num6, $result);
        echo "หาผลหาร(/) = ".$result."<br>";
    ?>
</body>
</html