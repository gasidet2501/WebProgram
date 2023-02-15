<?php
    require('connect.php');

    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    if(empty(trim($name)) || empty(trim($address)) || empty(trim($email)) || empty(trim($tel))){
        echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน');
        history.back();</script>";
        exit();
    }
    else if(!preg_match("/^[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรลวศษสหฬอฮฯะa-zA-Z ]+$/",$name)){ //ต้องมีเว้นวรรคด้วย
        echo "<script>alert('Not use some character');
        history.back();</script>";
        exit();
    }
    else if(!filter_var(trim($email),FILTER_VALIDATE_EMAIL)){ //เช็ครูปแบบอีเมล
        echo "<script>alert('$email is not a valid email address');
        history.back();</script>";
        exit();
    }
    else if(!ctype_digit(trim($tel))){ //เช็คว่าเป็นตัวเลขทั้งหมดไหม
        echo "<script>alert('กรุณากรอกหมายเลขโทรศัพท์ให้ถูกต้อง');
        history.back();</script>";
        exit();
    }
    else{

        $sql = "INSERT INTO infocus(name,address,email,tel)
                VALUES('$name','$address','$email','$tel')";
        mysqli_query($conn, $sql) or die("ไม่สามารถเบือกฐานข้อมูล bookstore ได้".mysqli_error());
        
        echo '<br><br><h2>ยันทึกข้อมูลลุกค้าชื่อ '.$name.' สำเร็จ</h2>';

    }
?>