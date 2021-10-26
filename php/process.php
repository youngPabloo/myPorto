<?php 

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    // TODO: format form
    $form = "From : $nama\nEmail : $email\nPesan : $msg";
    $mymail = "theijatsakit@gmail.com";
    $subject = "Form";
    mail($mymail, $subject ,$form) or die("Error!");
    echo "thankyou";
?>