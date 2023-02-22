<?php
    require('connect.php');

    $id = $_REQUEST['id']; //ต้องใช้คำสั่งนี้เพราะไม่ได้มีการ GET POST
    $sql = "DELETE from infocus WHERE id='$id'";
    $result = mysqli_query($conn, $sql); //ประมวลผลจากคำสั่ง SQL

    mysqli_query($conn, $sql) or die("Delete ข้อมูลมีข้อผิดพลาด".mysqli_error());
    header('location:customerlist.php');

?>