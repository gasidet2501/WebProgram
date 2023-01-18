<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="lab5-9cal.php">
        <table border="1" align="center" width="500">
            <tr>
                <td colspan="2" align="center">
                    <big>ทดสอบการใช้ Arithmatic Operator </big>
                </td>
            <tr>
            <tr>
                <td>Enter Number 1 : </td>
                <td><input type="text" name="number1" size="15" value=""/> </td>
            </tr>
                <td>Enter Number 2 : </td>
                <td><input type="text" name="number2" size="15" value=""/></td>
            </tr>
            <tr>
                <td> Operator : </td>
                <td align="center">
                    <input type="radio" name="operator" value="+"> + <br>
                    <input type="radio" name="operator" value="-"> - <br>
                    <input type="radio" name="operator" value="*"> * <br>
                    <input type="radio" name="operator" value="/"> / <br>
                    <input type="radio" name="operator" value="%"> % <br>
                </td>
            <tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value=" OK " />
                    <input type="reset" name="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>

</body>
</html>