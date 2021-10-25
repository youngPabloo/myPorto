<?php 

    // btn-send are id for send button
    /*
        validation!
    */ 
    if(isset($_POST['btn-send'])){
        $userName = $_POST['Uname'];
        $Email = $_POST['email'];
        $Msg = $_POST['msg'];

            // check if username null
    if(empty($userName) || empty($Email) || empty($Msg)) {
        // error message
        header('location:index.php?error');
            } else {
                $to = "theijatsakit@gmail.com";

            if(mail($to,$userName,$Msg,$Email)){
                    header("location:index.php?succes");
            }
        }
    }
    else {
        header("location:index.php");
    }
?>