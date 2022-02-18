<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/5/2022
 * Time: 7:54 AM
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Title</title>
    <link rel="shortcut icon" href="../../assets/img/fabicon.png">


    <!----======== Bootstrap ======== -->
    <link href='../../assets/css/style.css' rel='stylesheet'>
    <link href='../../assets/css/main.css' rel='stylesheet'>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" ></script>

    <!----===== Boxicons =====-->
    <link href='../../assets/css/boxicons/boxicons.min.css' rel='stylesheet'>


    <!-- Datatables CDN Link-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.js"></script>

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="../../assets/datepicker/bootstrap-datepicker.min.css">
    <script src="../../assets/datepicker/bootstrap-datepicker.min.js"></script>

    <!--------Fontawesome-------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />

</head>
<body>
<div class="main">
    <?php
    /**
     * Created by PhpStorm.
     * User: Shawon
     * Date: 2/5/2022
     * Time: 7:52 AM
     */
    ?>
    <header class="header" id="header">
        <div class="header_toggle">
            <div class="row">
                <i class='bx bx-menu col mt-2' id="header-toggle"></i>
                <p class="h-4 col" id="headerText">Dashboard </p>
            </div>

        </div>

        <div class="header_img">
            <div class="header-notification">
                <i class="bx bx-bell "></i>
            </div>
            <img id="profile-picture" src="https://i.imgur.com/hczKIze.jpg" alt="">

        </div>
    </header>
    <div class="popup" id="account-popup">
        <ul class="popup-menu">
            <li>
                <div class="menu-item">
                    <i class="bx bx-cog menu-icon" aria-hidden="true"></i>
                    <p id="username" data-usename="<?php echo $_SESSION['username'] ?>" data-role="<?php echo $_SESSION['user_role'] ?>"><?php echo $_SESSION['username'] ?></p>
                    <div class="d-none">
                        <p id="role"><?php echo $_SESSION['role'] ?></p>
                    </div>
                </div>
            </li>
            <li>
                <form onsubmit="return false;">
                    <div class="menu-item" onclick="logOut()">
                        <i class="bx bx-log-out menu-icon" aria-hidden="true"></i>
                        <p>Logout</p>
                    </div>
                </form>

            </li>
        </ul>
    </div>
    <div class="l-navbar" id="nav-bar">
        <div>
            <nav class="nav">
                <a href="#" class="nav_logo" >
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">FLOW LIGA</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active" onclick="slide('dashboard', ['Dashboard']);">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link" onclick="slide('league', ['League']);">
                        <i class='bx bx-trophy nav_icon'></i>
                        <span class="nav_name">League</span>
                    </a>
                    <a href="#" class="nav_link" onclick="slide('user', ['User']);">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">User</span>
                    </a>
                    <a href="#" class="nav_link" onclick="slide('discord', ['Discord']);">
                        <i class='bx bxl-discord-alt nav_icon'></i>
                        <span class="nav_name">Discord</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span>
                    </a>
                </div>
            </nav>
        </div>

    </div>
    <div id="dashboard" class="container-fluid" style="display: block; margin-top: 80px">
        <div>
            <input>
        </div>
    </div>
</div>
<script type="text/javascript" src="../../assets/js/main.js"></script>
</body>
</html>