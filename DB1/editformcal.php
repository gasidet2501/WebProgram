<?php
    require('connect.php');

    if(isset($_POST) && !empty($_POST)){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];

        $sql_edit = "UPDATE infocus SET name='$name', address='$address', email='$email', tel='$tel'
                    WHERE id = '$id'";
        $queue_edit = mysqli_query($conn,$sql_edit);
        header('Location:customerlist.php');
    }
    else{
        echo "Error";
    }

?>