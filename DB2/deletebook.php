<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
// mysqli_select_db($dbname, $conn) or die("ไม่สามารถเลือกฐานข้อมูล school ได้");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); //ให้โชว์ข้อความนี้ขึนมา แล้วออกจากโปรแกรมไปเลยไม่ทำต่อ
}
mysqli_query($conn,"set character_set_connection=utf8mb4");
mysqli_query($conn,"set character_set_client=utf8mb4");
mysqli_query($conn,"set character_set_results=utf8mb4");
$id = $_REQUEST['id'];
$sql = "DELETE FROM book WHERE BookID = '$id' ";
mysqli_query($conn, $sql) or die ( "DELETE จาตาราง book มีข้อผิดพลาดเกิดขึ้น".mysqli_error($conn));
mysqli_close ( $conn );
header("Location:listofbook.php");
?>
