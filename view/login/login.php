<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/5/2022
 * Time: 7:51 AM
 */
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="application/x-www-form-urlencoded">

    <title>Title</title>
    <link rel="shortcut icon" href="../../assets/img/fabicon.png">
    <!----======== CSS ======== -->
    <link href='../../assets/css/style.css' rel='stylesheet'>
    <link href='../../assets/css/main.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!----===== Boxicons CSS ===== -->
    <link href='../../assets/css/boxicons/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>



</head>
<body id="body-pd">
<div class="main">
    <div id="login" style="display: block; margin-top: 5%">
        <div class="container col-md-5">
            <div class="shadow-sm bg-body">
                <img src="../../assets/img/logo.png" class="rounded mx-auto d-block" alt="">
                <form action="../../controller/login.php" method="POST" >
                    <div class="form-floating mb-3">
                        <input name="username" id="username"  type="email" class="form-control"  placeholder="name@example.com" required>
                        <label for="username">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <?php
                    if(!empty($_GET['e_msg'])){
                        echo '
                            <div class="alert alert-danger d-flex fade show" role="alert" style="width: 100%">
                                <i class="bx bx-error menu-icon flex-shrink-0 p-1" style="font-size: 25px; font-weight: 100" aria-hidden="true"></i>
                                <div class="p-1">
                                
                            ';echo $_GET['e_msg'].'
                                
                                </div>
                                <button type="button" class="btn-close me-2 ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            ';
                        ?>
                        <?php
                    }
                    ?>
                    <div class="d-grid gap-2">
                        <input name="login_submit" type="submit" class="btn btn-success btn-lg" value="Sign-In"/>
                        <input class="btn btn-primary btn-lg" type="button" onclick="fade('login', 'forgetpassword');" value="Forget Password" />
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div id="forgetpassword" style="display: none; margin-top: 5%">
        <div class="container col-md-5">
            <div class="shadow-sm bg-body">
                <form action="../../controller/login.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="useremail" placeholder="name@example.com" required>
                        <label for="useremail">Email address</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button name="forget_password" type="submit" class="btn btn-success btn-lg">Submit</button>
                        <button class="btn btn-primary btn-lg" type="button" onclick="fade('forgetpassword', 'login');">Back to Sign-In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../../assets/js/login.js"></script>
</body>
</html>
