<?php 
require ('db.php');
mysqli_query($mysqli, "INSERT INTO loginreg (user_name, user_email, user_username, user_pw, user_terms ) VALUES('$_POST[vardas]','$_POST[email]','$_POST[message]')");
header("Location: ../../");
exit();