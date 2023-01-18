<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Form</h2>
    
    <form action="" method="post" name="form1" id="form1">

        รหัสบัตรประชาชน : <input type="text" name="idcard" maxlength="13" /><br /><br />
        ชื่อ-นามสกุล : <input type="text" name="fname" size="40" /><br /><br />

        เพศ : 
        <select name="sex">
            <option value="male"/>ชาย 
            <option value="female"/>หญิง
        </select><br /><br />

        งานอดิเรก :
        <select name="hobby" size="3" multiple >
            <option value="Reading"/> อ่านหนังสือ
            <option value="WacthTv"/> ดูโทรทัศน์
            <option value="Sport"/> เล่นกีฬา
        </select><br /><br />

        <input type="submit" name="submit"/>
        <input type="reset" name="reset" />

    </form>
</body>
</html>
