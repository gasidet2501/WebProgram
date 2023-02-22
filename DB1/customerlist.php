<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CustomerList</title>
</head>
<body>

<?php
    require('connect.php');
    
    $sql = "SELECT * FROM infocus order by id"; //เลือกข้อมูลทั้งหมดโดยเรียงจาก id
    $result = mysqli_query($conn, $sql); //ประมวลผลจากคำสั่ง SQL


    echo '<center><h1>Customer List</h1></center>';
    
    echo '<center>';
    echo '<a href="insertform.php">เพิ่มข้อมูลลูกค้า</a>';
    echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td width = "150"> <center><b>ID</b></center> </td> 
          <td width = "200"> <center><b>Name</b></center> </td> 
          <td width = "200"> <center><b>Address</b></center> </td> 
          <td width = "200"> <center><b>Email</b></center> </td> 
          <td width = "200"> <center><b>Telephone</b></center> </td> 
          <td width = "80"> <center><b>Edit</b></center> </td> 
          <td width = "80"> <center><b>Delete</b></center> </td> 
      </tr>';

    while ($row = mysqli_fetch_array($result)) {
        $field1name = $row["id"];
        $field2name = $row["name"];
        $field3name = $row["address"];
        $field4name = $row["email"];
        $field5name = $row["tel"]; 

        echo '<tr> 
                  <td><center>'.$field1name.'</center></td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td><a href="editform.php?id='.$row["id"].'">[แก้ไข]</a></td> 
                  <td><a href="deleteform.php?id='.$row["id"].'" onclick="return confirm(\'ยืนยันการลบข้อมูลลูกค้ารหัส '.$row["id"].'\')">[ลบ]</a></td> 
              </tr>';
    }
    echo '</table>';
    // myqli_close($conn);
    echo '<a href="insertform.php">Back to Menu</a>';
    echo '</center>';
?>
    
</body>
</html>