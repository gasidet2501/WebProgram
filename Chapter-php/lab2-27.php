<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>

    <form action="lab2-27cal.php" method="post" name="form2" id="form2">

        Username : <input type="text" maxlength="10" name="username"/><br />

        password : <input type="password" maxlength="6" size="6" name="pass"/><br />

        E-mail : <input type="email" name="email"/><br />

        Sex : 
        <input type="radio" name="sex" value="1" /> Male

        <input type="radio" name="sex" value="2" /> Female <br />


        Hobby :
        <input type="checkbox" value="Read a book" name="hobby1"/> Read a book
        <input type="checkbox" value="Watch Tv" name="hobby2"/> Watch Tv
        <input type="checkbox" value="Play Football" name="hobby3"/> Play Football<br />


        Color : 
        <input type="checkbox" value="Red" name="color[]"/> Red
        <input type="checkbox" value="Green" name="color[]"/> Green
        <input type="checkbox" value="Blue" name="color[]"/> Blue<br />

        
        Upload File : <input type="file" name="file"/> <br />

        <input type="submit">
        <input type="reset">

    </form>
    </center>
    

</body>
</html>