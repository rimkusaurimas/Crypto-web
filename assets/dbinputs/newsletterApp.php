<?php 
    require ('db.php');
    mysqli_query($mysqli, "INSERT INTO newsletter (newsletter_email) VALUES('$_POST[newsletter_email]')");
    header("Location: ../../../Crypto-web?=success");
    exit();