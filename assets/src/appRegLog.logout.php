<?php
    if (isset($_POST['outsubmit'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../../");
        exit();
    }