<?php
    define('DB_SERVER', "localhost");
    define('DB_USER', "root");
    define('DB_PASSWORD', "root");
    define('DB_NAME', "cryptoDb");

    $mysqli = new mysqli (DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Atsiprasome bet svetaine susidure su problema \n";
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }