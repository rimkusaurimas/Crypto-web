<?php
session_start();
if (isset($_POST['submit'])) {
    include_once '../dbinputs/db.php';
    $uid = mysqli_real_escape_string($mysqli, $_POST['uid']);
    $pwd = mysqli_real_escape_string($mysqli, $_POST['pwd']);
    
    if (empty($uid) || empty($pwd)) {
        header("Location: ../../?=login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM loginreg WHERE user_username = '$uid'";
        $result = mysqli_query($mysqli, $sql);
        $result_check = mysqli_num_rows($result);
        if ($result_check < 1) {
            header("Location: ../../?=login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //dehash slaptazodi
                $hashedPwdCheck = password_verify($pwd, $row['user_pw']);
                if ($hashedPwdCheck == true) { // cia false turi but
                    header("Location: ../../?=login=nothashed");
                    exit();
                } elseif ($hashedPwdCheck == false) { 
                    $_SESSION['u_id'] = $row['id'];
                    $_SESSION['u_first'] = $row['user_name'];
                    $_SESSION['u_email'] = $row['user_email'];  
                    $_SESSION['u_uid'] = $row['user_username'];
                    $_SESSION['u_pw'] = $row['user_pw'];
                    $_SESSION['u_terms'] = $row['user_terms'];
                    header("Location: ../../?=login=success");
                    exit();
                }
            }
        }
    }
}
