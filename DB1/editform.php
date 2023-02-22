<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form Customer</title>
</head>
<body>

    <?php
         require('connect.php');

         $id = $_REQUEST['id']; //ต้องใช้คำสั่งนี้เพราะไม่ได้มีการ GET POST
         $sql = "SELECT * from infocus WHERE id='$id'";
         $result = mysqli_query($conn, $sql); //ประมวลผลจากคำสั่ง SQL
     
         // mysqli_query($conn, $sql) or die("Delete ข้อมูลมีข้อผิดพลาด".mysqli_error());

         echo '
                <form method="post" action="editformcal.php">
                    <table border="1" align="center" width="600">
                        <tr>
                            <td colspan="2" align="center">
                                <big><b>แก้ไขข้อมูลลูกค้า</b></big>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" ><font color = "red">* Require Field</font></td>
                        </tr>
                        <tr>
                            <td>ชื่อ - นามสกุล : </td>
                            <td><input type="text" name="name" size="40" value="" minlength="10"/> </td>
                        </tr>
                        <tr>
                            <td>ที่อยู่ : </td>
                            <td><textarea name="address" cols="40" rows="5" required></textarea><font color = "red">*</font></td>
                        </tr>
                        <tr>
                            <td>อีเมล์ : </td>
                            <td><input type="text" name="email" size="40" value="" placeholder = "E-mail"/> </td>
                        </tr>
                        <tr>
                            <td>หมายเลขโทรศัพท์ : </td>
                            <td><input type="text" name="tel" size="10" minlength="10" placeholder = "Phone Number"/> </td>
                        </tr>
                    </table>
                    <br>
                    <center>
                        <input type="submit" name="submit" value=" บันทึกข้อมูล " />
                        <input type="reset" name="reset" value=" ล้างข้อมูล " />
                        <br><br>
                        <a href="customerlist.php">กลับหน้าแสดงข้อมูลลูกค้า</a>
                    </center>
                </form>';
    ?>

    
</body>
</html>