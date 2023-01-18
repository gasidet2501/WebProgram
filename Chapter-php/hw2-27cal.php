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
        function display($username,$pass,$email,$sex,$file,$hobby,$color){
            echo '<html><head><title>Student Form</title><head>';
            echo '<body>';
            echo '<div class="form">';
            echo '<h1 id="title">Student Information Form</h1>';
            echo '<hr>';
            echo '<form action="hw2-27.php">';
            echo '<label> Username ';
            echo '<input class="write-area" type="text" maxlength="10" placeholder="'.$username.'" readonly>';
            echo '</label>';
            echo '<label> Password';
            echo '<input class="write-area" type="password" maxlength="6" size="6"  placeholder="'.$pass.'" readonly> ';
            echo '</label>';
            echo '<label> Email ';
            echo '<input class="write-area" name="email" type="email" placeholder="'.$email.'" readonly> ';
            echo '</label>';
            echo '<label>Sex';
            echo '<input class="write-area" placeholder="'.$sex.'" readonly> ';
            echo '</label>';
            echo '<label>Hobby</span>';
            echo '<input class="write-area" placeholder='.$hobby.'readonly>';
            echo '<label>Color</span>';
            echo '<input class="write-area" placeholder="' .$color. '" readonly>';

            echo '<label>Upload File <br>';
            echo '<input class="write-area"  placeholder="'.$file.'" readonly> ';
            echo '</label>';
            echo '<button type="submit">BACK</button>';

            echo '</form>';
            echo '</div>';
            echo '</body>';
            echo '</html>';

        }

        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $sex = $_POST['sex'];
        $file = $_POST['file'];

        if($sex == "1")
            $sex = "Male";
        if($sex == "2")
            $sex = "Female";

        $hobby = "";
        // $checkk = isset($_POST['hobby']); //เช็คว่ามีข้อมูลไหม
        // if ($checkk) {
        //     for ($i = 0; $i < count($_POST['hobby']) ; $i++) {
        //         if (trim($_POST['hobby'][$i]) != "") { //ตัดช่องว่างหัวท้าย
        //             $hobby .= $_POST['hobby'][$i] . ", ";
        //         } 
        //         // else {
        //         //     $hobby .=  "<br>";
        //         // }
        //     }
        // }
        if(!empty($_POST['hobby1'])){
            $hobby .= $_POST['hobby1'];
        }
        if(!empty($_POST['hobby2'])){
            $hobby .= $_POST['hobby2'];
        }
        if(!empty($_POST['hobby3'])){
            $hobby .= $_POST['hobby3'];
        }

        $color = "";
        $check = isset($_POST['color']); //เช็คว่ามีข้อมูลไหม
        if ($check) {
            for ($i = 0; $i < count($_POST['color']) ; $i++) {
                if (trim($_POST['color'][$i]) != "") { //ตัดช่องว่างหัวท้าย
                    $color .= $_POST['color'][$i] . ", ";
                } else {
                    // $color .=  "<br>";
                }
            }
        }
    

        display($username,$pass,$email,$sex,$file,$hobby,$color);
    ?>
  <!-- <body>


    <div class="form">
    <h1 id="title">Student Information Form</h1>
    <hr>
  
    <form action="hw2-27.php">
      
        <label> Username 
            <input class="write-area" type="text" maxlength="10" placeholder="<?php echo $username ?>" readonly> 
        </label>
        <label> Password
            <input class="write-area" type="password" maxlength="6" size="6"  placeholder="<?php echo $pass ?>" readonly> 
        </label>
        <label> Email 
            <input class="write-area" name="email" type="email" placeholder="<?php echo $email ?>" readonly> 
        </label>

      <label>Sex
        <input class="write-area" placeholder="<?php echo $sex ?>" readonly> 

      </label>
      
      <label>Hobby</span>
        <input class="write-area" placeholder=<?php if(!empty($_POST['hobby1'])){
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
        <input class="write-area" placeholder="<?php $check = isset($_POST['color']); //เช็คว่ามีข้อมูลไหม
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
        <input class="write-area"  placeholder="<?php echo $file ?>" readonly> 
      </label>


    <button type="submit">BACK</button>


    </form>
  </div>
  

  </body>

</html> -->