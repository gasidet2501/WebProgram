<html>
<head><title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title></head>
<body>
    <?php
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $sex = $_POST['sex'];
        $file = $_POST['file'];

        if($sex == "1")
            $sex = "Male";
        if($sex == "2")
            $sex = "Female";

        echo "<b>ข้อมูลนักศึกษา</b><br /><br/>";
        echo "<b>Username :</b> $username<br/>";
        echo "<b>Password :</b> $pass<br/>";
        echo "<b>Email :</b> $email<br/>";
        echo "<b>Sex :</b> $sex<br/>";

        echo "<br/><b>Hobby :</b><br/>";

        //if
        if(!empty($_POST['hobby1'])){
            echo "- ".$_POST['hobby1']." <br/>";
        }
        if(!empty($_POST['hobby2'])){
            echo "- ".$_POST['hobby2']." <br/>";
        }
        if(!empty($_POST['hobby3'])){
            echo "- ".$_POST['hobby3'] . " <br/>";
        }

        echo "<br/><b>Color :</b><br/>";


        //for each
        // foreach ($_POST['color'] as $col) {
        //     echo "- $col <br/>";
        // }

        //for-loop
        $check = isset($_POST['color']); //เช็คว่ามีข้อมูลไหม
        if ($check) {
            for ($i = 0; $i < count($_POST['color']) ; $i++) {
                if (trim($_POST['color'][$i]) != "") { //ตัดช่องว่างหัวท้าย
                    echo "- " . $_POST['color'][$i] . "<br/>";
                } else {
                    echo "<br>";
                }
            }
        }

        echo "<br/><b>File :</b> $file<br/>";

    ?>
    <br><a href="lab2-27.php">back</a>
</body>
</html>

ไปเขียนแท็ก html จัดให้เรียบร้อยสวยงาม