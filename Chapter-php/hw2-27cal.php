

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Survey Form</title>
    <link rel="stylesheet" href="hw2-27.css" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap');
</style>
  </head>


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

    ?>
    


  <body>

    <div class="form">

    <h1 id="title">Student Information Form</h1>
    <p id="description">_____________________________________________________________</p>
  
    <form action="hw2-27.php">
      
        <label> Username 
            <input class="write-area" type="text" maxlength="10" value="<?php echo $username ?>" readonly> 
        </label>
        <label> Password
            <input class="write-area" type="password" maxlength="6" value="<?php echo $pass ?>" readonly> 
        </label>
        <label> Email 
            <input class="write-area" type="email" value="<?php echo $email ?>" readonly> 
        </label>

      <label>Sex
        <input class="write-area" value="<?php echo $sex ?>" readonly> 

      </label>
      
      <label>Hobby</span>
        <input class="write-area" value="<?php if(!empty($_POST['hobby1'])){
            echo $_POST['hobby1']." ,";
        }
        if(!empty($_POST['hobby2'])){
            echo $_POST['hobby2']." ,";
        }
        if(!empty($_POST['hobby3'])){
            echo $_POST['hobby3'] . " ,";
        } ?>" readonly> 
      </label>

      <label>Color</span>
        <input class="write-area" value="<?php $check = isset($_POST['color']); //เช็คว่ามีข้อมูลไหม
        if ($check) {
            for ($i = 0; $i < count($_POST['color']) ; $i++) {
                if (trim($_POST['color'][$i]) != "") { //ตัดช่องว่างหัวท้าย
                    echo $_POST['color'][$i] . ", ";
                } else {
                    echo "<br>";
                }
            }
        }
 ?>" readonly> 
      </label>

      <label>Upload File <br>
        <input class="write-area"  value="<?php echo $file ?>" readonly> 
      </label>


    <button type="submit">BACK</button>


    </form>
  </div>

  </body>

</html>