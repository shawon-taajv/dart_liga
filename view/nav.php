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
