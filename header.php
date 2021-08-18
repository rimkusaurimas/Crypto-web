<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crypto Project</title>

    <!-- Imports (CSS, fonts, icons, etc.) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light container-fluid">
        <a class="navbar-brand logo" href="#"><img src="assets/img/logo.svg" class="img-fluid" alt="CLP Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cryptocurrencies
                    </a>
                    <ul class="dropdown-menu">
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-chart-line font-for-dropdown"></i>
                            <a href="#">Ranking</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-arrows-alt-v font-for-dropdown"></i>
                            <a href="#">Gainers & Losers</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-plus font-for-dropdown"></i>
                            <a href="#">Recently added</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Exchanges
                    </a>
                    <ul class="dropdown-menu">
                        <li class="drpm-pair dropdown-item">
                            <i class="far fa-circle font-for-dropdown"></i>
                            <a href="#">Spot</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-shapes font-for-dropdown"></i>
                            <a href="#">Derivatives</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-vector-square font-for-dropdown"></i>
                            <a href="#">DEX</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">NFT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Calendars
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-parachute-box font-for-dropdown"></i>
                            <a href="#">Free airdrops</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-tasks font-for-dropdown"></i>
                            <a href="#">ICO Calendar</a>
                        </li>
                        <li class="drpm-pair dropdown-item">
                            <i class="fas fa-calendar-alt font-for-dropdown"></i>
                            <a href="#">Events</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Learn</a>
                </li>
            </ul>

            <div class="login-register-ul">
                <?php
                if (isset($_SESSION['u_id'])) : ?>
                    <div class="nav-item" id="logout">
                        <a action="assets/src/appRegLog.logout.php" class="nav-link login" href=""><i class="fas fa-sign-out-alt"></i> Log Out</a>
                    </div>
                <?php else : ?>
                    <div class="navbar-nav me-auto mb-2 mb-lg-0 login-register" style="align-items: center;">
                        <div class="nav-item">
                            <a class="nav-link login " href="#" data-bs-toggle="modal" data-bs-target="#login-register-modal"><i class="far fa-user"></i> Sign In</a>
                        </div>
                        <div class="modal fade" id="login-register-modal" tabindex="-1" aria-labelledby="login-register-modal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="border: none; padding-bottom: 0px;">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="assets/img/logo.svg" alt="" style="width: 90px; padding-bottom: 2rem;">
                                        <form action="assets/src/appRegLog.login.php" style="width: 25rem;" id="log-in-form">
                                                <input name="uid" type="text" class="form-control form-group" id="user-modal-log-username" placeholder="User name">
                                            <br>
                                                <input name="pwd" type="password" class="form-control form-group" id="user-modal-log-password" placeholder="Password">
                                            <br>
                                                <a class="fpw-reg modal-text-fpw-reg" href="#">Forgot password?</a>
                                            <br>
                                            <div style="display: flex; justify-content: center;">
                                                <button type="submit" class="btn btn-primary btn-clp" style="width: 100%;">Log
                                                    In</button>
                                            </div>
                                        </form>
                                        <form style="width: 25rem;" id="sign-up-form">
                                            <div class="form-row align-items-center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="user-modal-reg-name" placeholder="Full Name">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="user-modal-reg-email" placeholder="Email address">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="user-modal-reg-username" placeholder="User name">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="user-modal-reg-password" placeholder="Password">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="user-modal-reg-password2" placeholder="Repeat password">
                                                </div>
                                                <br>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="agreeCheck">
                                                    <label class="form-check-label" for="agreeCheck">By clicking on this box you agree with our <a href="#" style="text-decoration: none; color: #ff6a3d;">Terms & Conditions</a></label>
                                                </div>
                                                <br>
                                                <div style="display: flex; justify-content: center;">
                                                    <button type="submit" class="btn btn-primary btn-clp form-control" style="width: 100%;">Register</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="sign-up-text" class="modal-footer-text">
                                            <p>Not a member yet?</p>&nbsp;<a id="sign-up" class="orange-link" href="#"><strong>Sign
                                                    up!</strong></a>
                                        </div>
                                        <div id="log-in-text" class="modal-footer-text">
                                            <p>Have an account?</p>&nbsp;<a id="log-in" class="orange-link" href="#"><strong>Log in!</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>