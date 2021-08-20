<?php
session_start();
if (isset($_POST['submit'])) {
    include_once '../dbinputs/db.php';
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $uid = mysqli_real_escape_string($mysqli, $_POST['uname']);
    $pwd = mysqli_real_escape_string($mysqli, $_POST['pw']);
    $pwd2 = mysqli_real_escape_string($mysqli, $_POST['pw2']);
    $terms = mysqli_real_escape_string($mysqli, $_POST['check']);

    if (empty($terms)) {
        header("Location: ../../?signup=termsnotmet");
        exit();
    } else {
        if (empty($name) || empty($email) || empty($uid) || empty($pwd) || empty($pwd2)) {
            header("Location: ../../?signup=empty");
            exit();
        } else {
            // Ar teisingai ivesti simboliai
            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                header("Location: ../../?signup=invalid");
                exit();
            } else {
                // Ar galiojantis email formatas
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../../?signup=invalidemail");
                    exit();
                } else {
                    // Ar username nenaudojamas
                    $sql = "SELECT * FROM loginreg WHERE user_username = '$uid'";
                    $result = mysqli_query($mysqli, $sql);
                    $result_check = mysqli_num_rows($result);
                    if ($result_check > 0) {
                        header("Location: ../../?signup=usertaken");
                        exit();
                    } else {
                        if (!$pwd == $pwd2) {
                            header("Location: ../../?signup=passwordnomatch");
                            exit();
                        } else {
                            // Sukuriame hash slaptazodi
                            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                            // Ikeliame vartotoja i DB
                            mysqli_query($mysqli, "INSERT INTO loginreg (user_name, user_email, user_username, user_pw, user_terms) VALUES (('$name'), ('$email'), ('$uid'), ('$hashedPwd'), ('$terms')");
                            header("Location: ../../?signup=usercreated");
                            exit();
                        }
                    }
                }
            }
        }
    }
}
