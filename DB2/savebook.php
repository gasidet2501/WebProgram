//<?php
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bookstore";
// $conn = mysqli_connect($hostname, $username, $password, $dbname);
// if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
// // mysqli_select_db($dbname, $conn) or die("ไม่สามารถเลือกฐานข้อมูล school ได้");
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error); //ให้โชว์ข้อความนี้ขึนมา แล้วออกจากโปรแกรมไปเลยไม่ทำต่อ
// }
// mysqli_query($conn,"set character_set_connection=utf8mb4");
// mysqli_query($conn,"set character_set_client=utf8mb4");
// mysqli_query($conn,"set character_set_results=utf8mb4");

// $BookID = $_POST['BookID'];
// $BookName = $_POST['BookName'];
// $TypeID = $_POST['TypeID'];
// $StatusID = $_POST['StatusID'];
// $Publish = $_POST['Publish'];
// $UnitPrice = $_POST['UnitPrice'];
// $UnitRent = $_POST['UnitRent'];
// $DayAmount = $_POST['DayAmount'];
// $image = $_POST['ImageFile'];

// $Flag = true;
// $ImageFile = htmlspecialchars(trim($ImageFile));
// if ($ImageFile == "") {
//     echo "<B><CENTER><li>คุณไม่ได้เลือกรูปภาพ.</CENTER></B><BR>";
// } else {
//     $ImageFile_name;
//     $ImageFile_type;
//     $ImageFile_size;
//     if ($ImageFile_type == "image/gif" or $ImageFile_type == "image/jpeg") {
//         if ($ImageFile_size <= $max_size) {
//             copy($ImageFile, "pictures/$ImageFile_name");
//             unlink($ImageFile);
//             $image = $ImageFile_name;
//             $Flag = true;
//         } else {
//             echo "<CENTER><li>รูปภาพมีขนาดใหญ่กว่า 50 kb.<BR></CENTER>";
//             echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
//             echo "onclick=\"history.back();\" style=\"cursor:hand\"></CENTER>";
//             $Flag = false;
//         }
//     } else {
//         echo "<CENTER><li>รูปภาพไม่ใช่ไฟล์ประเภท GIF หรือ JPG <BR></CENTER>";
//         echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
//         echo "onclick=\"history.back();\" style=\"cursor:hand\"></CENTER>";
//         $Flag = false;
//     }
// }
// if ($Flag) {
//     $BDate = date("Y-m-d");
//     $sql = "INSERT INTO book (BookID ,BookName, TypeID, StatusID, Publish,
// UnitPrice,UnitRent, DayAmount ,Picture,BookDate) VALUES
// ('$BookID','$BookName','$TypeID','$StatusID', '$Publish',
// '$UnitPrice','$UnitRent','$DayAmount','$image','$BDate')";
//     mysqli_query($conn, $sql) or die("INSERT ลงตาราง book มีข้อผิดพลาดเกิดขึ้น" .
//         mysqli_error($conn));
//     echo "<br><br><CENTER><H2>บันทึกข้อมูลเรียบร้อย</H2><BR><BR></CENTER>";
//     echo "<CENTER><A HREF=\"listofbook.php\">แสดงข้อมูลทั้งหมด</A></CENTER>";
// }
// mysqli_close($conn);


// $oldImageFile = @$_POST['oldImageFile'];
// $imageFileName = @$_FILES['imageFile']['name'];
// $imageFileType = @$_FILES['imageFile']['type'];
// $imageFileSize = @$_FILES['imageFile']['size'];
// $imageFileTmpName = @$_FILES['imageFile']['tmp_name'];
// $picture="";
// $bookDate = date("Y-m-d");
// if ($_FILES['imageFile']['name']=="") {
//     echo '<b><li>คุณไม่ได้เลือกรูปภาพ</li></b><br>';
// }
// else{
//     move_uploaded_file($_FILES["imageFile"]["tmp_name"],"pictures/".$_FILES["imageFile"]["name"]); //คำสั่ง upload ไฟล์ ได้ทุกไฟล์
//     $picture = $_FILES['imageFile']['name']; 
// }
// $sql = "INSERT INTO book (BookID ,BookName, TypeID, StatusID, Publish,
// UnitPrice,UnitRent, DayAmount ,Picture,BookDate) VALUES
// ('$BookID','$BookName','$TypeID','$StatusID', '$Publish',
// '$UnitPrice','$UnitRent','$DayAmount','$picture','$bookDate')";

// // $sql = "INSERT INTO book(bookId, bookName, typeId, statusId, publish, unitPrice, unitRent,
// // dayAmount, picture, bookDate) values ('$bookId', '$bookName', '$typeId', '$statusId', '$publish',
// // '$unitPrice', '$unitRent', '$dayAmount', '$picture', '$bookDate')";
// mysqli_query($conn, $sql) or die("insert ลงตาราง book มีข้อผิดพลาดเกิดขึ้น" .mysqli_error($conn));
// echo '<br><br><h2>บันทึกข้อมูลหนังสือรหัส '.$BookID.' เรียบร้อย</h2>';
// echo '<br><br><a href="bookList1.php">กลับหน้า bookList1.php</a>';
// mysqli_close($conn);
// echo '</center>';


$bookId = $_POST['bookId'];
$bookName = $_POST['bookName'];
$typeId = $_POST['typeId'];
$statusId = $_POST['statusId'];
$publish = $_POST['publish'];
$unitPrice = $_POST['unitPrice'];
$unitRent = $_POST['unitRent'];
$dayAmount = $_POST['dayAmount'];
$oldImageFile = @$_POST['oldImageFile'];
$imageFileName = @$_FILES['imageFile']['name'];
$imageFileType = @$_FILES['imageFile']['type'];
$imageFileSize = @$_FILES['imageFile']['size'];
$imageFileTmpName = @$_FILES['imageFile']['tmp_name'];
$picture="";
$bookDate = date("Y-m-d");
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "bookstore";
$conn = mysqli_connect($hostname, $username, $password);
echo '<center>';
if (!$conn)
die("ไม่สามารถติดต่อกับ mySQL ได้");
mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
mysqli_query($conn,"set character_set_connection=utf8mb4");
mysqli_query($conn,"set character_set_client=utf8mb4");
mysqli_query($conn,"set character_set_results=utf8mb4");
if ($_FILES['imageFile']['name']=="") {
echo '<b><li>คุณไม่ได้เลือกรูปภาพ</li></b><br>';
}
else{
    move_uploaded_file($_FILES["imageFile"]["tmp_name"],"pictures/".$_FILES["imageFile"]["name"]);
    $picture = $_FILES['imageFile']['name'];
}
$sql = "insert into book(BookID ,BookName, TypeID, StatusID, Publish,
UnitPrice,UnitRent, DayAmount ,Picture,BookDate) values ('$bookId', '$bookName', '$typeId', '$statusId', '$publish',
'$unitPrice', '$unitRent', '$dayAmount', '$picture', '$bookDate')";
mysqli_query($conn, $sql) or die("insert ลงตาราง book มีข้อผิดพลาดเกิดขึ้น" .mysqli_error($conn));
echo '<br><br><h2>บันทึกข้อมูลหนังสือรหัส '.$bookId.' เรียบร้อย</h2>';
echo '<br><br><a href="listofbook.php">กลับหน้า listofbook.php</a>';
mysqli_close($conn);
echo '</center>';
?>