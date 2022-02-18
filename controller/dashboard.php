<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/7/2022
 * Time: 8:41 AM
 */
session_start();
require_once ('../model/dashboard.php');

$dashboard = new dashboard();
$output ='';
date_default_timezone_set('Europe/Zurich');

//Season ID
if(isset($_POST['season_id_1'])){
    $dashboard->set_league_info_league_group($_POST['season_id_1']);
    $dashboard->set_league_info_season_name($_POST['season_id_2']);
    $check_data = $dashboard->get_league_info_season_id_info();
    if(!empty($check_data[0])){
        $numid = $check_data[0]->season_id;
        if(number_format($numid)<10){
            $finalnum = number_format($numid) + 1;
            $output = '0'.$finalnum;
        }
        else{
            $finalnum = number_format($numid) + 1;
            $output = $finalnum;
        }
    }else{
        $output = '01';
    }
    echo (' '.$output);
}

//League Group
if(isset($_POST['league_group'])){
    $dashboard->set_league_group($_POST['league_group']);
    $check_data = $dashboard->check_league_group();
    if(!empty($check_data->id)){
        $output = 'show duplicate';
    }else{
        $route_data = $dashboard->add_league_group();
        if(!empty($route_data->id)) {
            $output = '
                <div class="d-none">
                    <input id="league_group_'.$route_data->id.'"'.' type="text" class="form-control h6" placeholder="'.$route_data->league_group.'" aria-label="'.$route_data->league_group.'" disabled>
                </div>
                <div class="btn-group w-100">
                    <input type="text" class="form-control h6" placeholder="'.$route_data->league_group.'" aria-label="'.$route_data->league_group.'"  disabled>
                    <button class="btn btn-outline-warning text-nowrap h6" type="button" onclick="updateLeagueGroup(this)" data-identity="'.$route_data->id.'">
                        <i class="bx bx-edit-alt nav_icon flex-shrink-0 h4" ></i>
                    </button>
                    <button class="btn btn-outline-danger text-nowrap h6" type="button" onclick="deleteLeagueGroup(this)" data-identity="'.$route_data->id.'">
                        <i class="bx bx-x nav_icon flex-shrink-0 h4" ></i>
                    </button>
                </div>
            ';
            $details =  '(Add => Group Name): ['.$_POST['league_group'].'] added at time: '.date("F j, Y, g:i a").' by '.$_SESSION['username'];
            $dashboard->set_log_details($details);
            $dashboard->set_log_username($_SESSION['username']);
            $dashboard->set_log_user_role($_SESSION['user_role']);
            $event_type ='group_name_insert';
            $dashboard->set_log_event_type($event_type);
            $updateconsole= $dashboard->update_log_details();
        }
    }
    echo ($output);
}
if(isset($_POST['update_league_group'])){
    $dashboard->set_league_group($_POST['update_league_group']);
    $check_data = $dashboard->check_league_group();
    if(!empty($check_data->id)){
        $output = 'update duplicate';
    }else{
        $dashboard->set_league_group($_POST['update_league_group_previous']);

        $check_previous_data = $dashboard->check_league_group();
        if(!empty($check_previous_data->id)){
            $dashboard->set_league_group_id($check_previous_data->id);
            $dashboard->set_league_group($_POST['update_league_group']);
            $route_data = $dashboard->update_league_group();
            if(!empty($route_data->id)) {
                $all_league_group = $dashboard->get_all_league_group();
                foreach($all_league_group as $league_group) {
                    $output = $output. '
                    <div class="d-none">
                        <input id="league_group_'.$league_group->id.'"'.' type="text" class="form-control h6" placeholder="'.$league_group->league_group.'" aria-label="'.$league_group->league_group.'" disabled>
                    </div>
                    <div class="btn-group w-100">
                        <input type="text" class="form-control h6" placeholder="'.$league_group->league_group.'" aria-label="'.$league_group->league_group.'"  disabled>
                        <button class="btn btn-outline-warning text-nowrap h6" type="button" onclick="updateLeagueGroup(this)" data-identity="'.$league_group->id.'">
                            <i class="bx bx-edit-alt nav_icon flex-shrink-0 h4" ></i>
                        </button>
                        <button class="btn btn-outline-danger text-nowrap h6" type="button" onclick="deleteLeagueGroup(this)" data-identity="'.$league_group->id.'">
                            <i class="bx bx-x nav_icon flex-shrink-0 h4" ></i>
                        </button>
                    </div>
                ';
                }

                $details =  '(Update => Group Name): ['.$_POST['update_league_group_previous'].'] updated to ['.$_POST['update_league_group'].'] at time: '.date("F j, Y, g:i a").' by '.$_SESSION['username'];
                $dashboard->set_log_details($details);
                $dashboard->set_log_username($_SESSION['username']);
                $dashboard->set_log_user_role($_SESSION['user_role']);
                $event_type ='group_name_update';
                $dashboard->set_log_event_type($event_type);
                $updateconsole= $dashboard->update_log_details();
            }
        }else{
            $output = 'data error';
        }
    }
    echo ($output);
}
if(isset($_POST['delete_league_group'])){
    $dashboard->set_league_group($_POST['delete_league_group']);
    $check_data = $dashboard->check_league_group();
    if(!empty($check_data->id)){
        $route_data = $dashboard->delete_league_group();
        if(empty($route_data->id)) {
            $all_league_group = $dashboard->get_all_league_group();
            foreach($all_league_group as $league_group) {
                $output = $output. '
                    <div class="d-none">
                        <input id="league_group_'.$league_group->id.'"'.' type="text" class="form-control h6" placeholder="'.$league_group->league_group.'" aria-label="'.$league_group->league_group.'" disabled>
                    </div>
                    <div class="btn-group w-100">
                        <input type="text" class="form-control h6" placeholder="'.$league_group->league_group.'" aria-label="'.$league_group->league_group.'"  disabled>
                        <button class="btn btn-outline-warning text-nowrap h6" type="button" onclick="updateLeagueGroup(this)" data-identity="'.$league_group->id.'">
                            <i class="bx bx-edit-alt nav_icon flex-shrink-0 h4" ></i>
                        </button>
                        <button class="btn btn-outline-danger text-nowrap h6" type="button" onclick="deleteLeagueGroup(this)" data-identity="'.$league_group->id.'">
                            <i class="bx bx-x nav_icon flex-shrink-0 h4" ></i>
                        </button>
                    </div>
                ';
            }
            $details =  '(Delete => Group Name): ['.$_POST['delete_league_group'].'] deleted at time: '.date("F j, Y, g:i a").' by '.$_SESSION['username'];
            $dashboard->set_log_details($details);
            $dashboard->set_log_username($_SESSION['username']);
            $dashboard->set_log_user_role($_SESSION['user_role']);
            $event_type ='group_name_delete';
            $dashboard->set_log_event_type($event_type);
            $updateconsole= $dashboard->update_log_details();
        }
    }else{
        $output = 'delete error';
    }
    echo json_encode($output);
}

//Season Name
if(isset($_POST['season_name'])){
    $dashboard->set_season_name($_POST['season_name']);
    $check_data = $dashboard->check_season_name();
    if(!empty($check_data->id)){
        $output = 'show duplicate';
    }else{
        $route_data = $dashboard->add_season_name();
        if(!empty($route_data->id)) {
            $output = '
                <div class="d-none">
                    <input id="season_name_'.$route_data->id.'"'.' type="text" class="form-control h6" placeholder="'.$route_data->season_name.'" aria-label="'.$route_data->season_name.'" disabled>
                </div>
                <div class="btn-group w-100">
                    <input type="text" class="form-control h6" placeholder="'.$route_data->season_name.'" aria-label="'.$route_data->season_name.'"  disabled>
                    <button class="btn btn-outline-warning text-nowrap h6" type="button" onclick="updateSeasonName(this)" data-identity="'.$route_data->id.'">
                        <i class="bx bx-edit-alt nav_icon flex-shrink-0 h4" ></i>
                    </button>
                    <button class="btn btn-outline-danger text-nowrap h6" type="button" onclick="deleteSeasonName(this)" data-identity="'.$route_data->id.'">
                        <i class="bx bx-x nav_icon flex-shrink-0 h4" ></i>
                    </button>
                </div>
            ';
            $details =  '(Add => Season Name): ['.$_POST['season_name'].'] added at time: '.date("F j, Y, g:i a").' by '.$_SESSION['username'];
            $dashboard->set_log_details($details);
            $dashboard->set_log_username($_SESSION['username']);
            $dashboard->set_log_user_role($_SESSION['user_role']);
            $event_type ='season_name_insert';
            $dashboard->set_log_event_type($event_type);
            $updateconsole= $dashboard->update_log_details();
        }
    }
    echo json_encode($output);
}
if(isset($_POST['update_season_name'])){
    $dashboard->set_season_name($_POST['update_season_name']);
    $check_data = $dashboard->check_season_name();
    if(!empty($check_data->id)){
        $output = 'update duplicate';
    }else{
        $dashboard->set_season_name($_POST['update_season_name_previous']);
        //$previous_data = $_POST['update_season_name_previous'];
        $check_previous_data = $dashboard->check_season_name();
        if(!empty($check_previous_data->id)){
            $dashboard->set_season_name_id($check_previous_data->id);
            $dashboard->set_season_name($_POST['update_season_name']);
            $route_data = $dashboard->update_season_name();
            if(!empty($route_data->id)) {
                $all_season_name = $dashboard->get_all_season_name();
                foreach($all_season_name as $season_name) {
                    $output = $output. '
                    <div class="d-none">
                        <input id="season_name_'.$season_name->id.'"'.' type="text" class="form-control h6" placeholder="'.$season_name->season_name.'" aria-label="'.$season_name->season_name.'" disabled>
                    </div>
                    <div class="btn-group w-100">
                        <input type="text" class="form-control h6" placeholder="'.$season_name->season_name.'" aria-label="'.$season_name->season_name.'"  disabled>
                        <button class="btn btn-outline-warning text-nowrap h6" type="button" onclick="updateSeasonName(this)" data-identity="'.$season_name->id.'">
                            <i class="bx bx-edit-alt nav_icon flex-shrink-0 h4" ></i>
                        </button>
                        <button class="btn btn-outline-danger text-nowrap h6" type="button" onclick="deleteSeasonName(this)" data-identity="'.$season_name->id.'">
                            <i class="bx bx-x nav_icon flex-shrink-0 h4" ></i>
                        </button>
                    </div>
                ';
                }
                $details =  '(Update => Season Name): ['.$_POST['update_season_name_previous'].'] updated to ['.$_POST['update_season_name'].'] at time: '.date("F j, Y, g:i a").' by '.$_SESSION['username'];
                $dashboard->set_log_details($details);
                $dashboard->set_log_username($_SESSION['username']);
                $dashboard->set_log_user_role($_SESSION['user_role']);
                $event_type ='season_name_update';
                $dashboard->set_log_event_type($event_type);
                $updateconsole= $dashboard->update_log_details();
            }
        }else{
            $output = 'data error';
        }
    }
    echo json_encode($output);
}
if(isset($_POST['delete_season_name'])){
    $dashboard->set_season_name($_POST['delete_season_name']);
    $check_data = $dashboard->check_season_name();
    if(!empty($check_data->id)){
        $route_data = $dashboard->delete_season_name();
        if(empty($route_data->id)) {
            $all_season_name = $dashboard->get_all_season_name();
            foreach($all_season_name as $season_name) {
                $output = $output. '
                    <div class="d-none">
                        <input id="season_name_'.$season_name->id.'"'.' type="text" class="form-control h6" placeholder="'.$season_name->season_name.'" aria-label="'.$season_name->season_name.'" disabled>
                    </div>
                    <div class="btn-group w-100">
                        <input type="text" class="form-control h6" placeholder="'.$season_name->season_name.'" aria-label="'.$season_name->season_name.'"  disabled>
                        <button class="btn btn-outline-warning text-nowrap h6" type="button" onclick="updateSeasonName(this)" data-identity="'.$season_name->id.'">
                            <i class="bx bx-edit-alt nav_icon flex-shrink-0 h4" ></i>
                        </button>
                        <button class="btn btn-outline-danger text-nowrap h6" type="button" onclick="deleteSeasonName(this)" data-identity="'.$season_name->id.'">
                            <i class="bx bx-x nav_icon flex-shrink-0 h4" ></i>
                        </button>
                    </div>
                ';
            }
            $details =  '(Delete => Season Name): ['.$_POST['delete_season_name'].'] deleted at time: '.date("F j, Y, g:i a").' by '.$_SESSION['username'];
            $dashboard->set_log_details($details);
            $dashboard->set_log_username($_SESSION['username']);
            $dashboard->set_log_user_role($_SESSION['user_role']);
            $event_type ='season_name_delete';
            $dashboard->set_log_event_type($event_type);
            $updateconsole= $dashboard->update_log_details();
        }
    }else{
        $output = 'delete error';
    }
    echo json_encode($output);
}

// League Info
if(isset($_POST['al_league_group'])){
    $dashboard->set_league_info_league_group($_POST['al_league_group']);
    $dashboard->set_league_info_season_name($_POST['al_season_name']);
    $dashboard->set_league_info_season_id($_POST['al_season_id']);
    $dashboard->set_league_info_league_name($_POST['al_league_name']);
    $sDate = $_POST['al_timeline_datepicker'];
    $tsDate = strtotime($sDate);
    $startDate =  date('Y-m-d H:i:s', $tsDate);
    $dashboard->set_league_info_start_date($startDate);
    $eDate = $_POST['al_timeline_end'];
    $teDate = strtotime($eDate);
    $endDate =  date('Y-m-d H:i:s', $teDate);
    $dashboard->set_league_info_est_end_date($endDate);
    $check_data = $dashboard->check_league_info();
    if(!empty($check_data->id)){
        $output = 'show duplicate';
    }else{
        $route_data = $dashboard->add_league_info();
        if(!empty($route_data->id)) {
            $output = '
                <div class="d-none">
                    <input id="al_league_db_league_group_'.$route_data->id.'"'.' type="text" class="form-control h6" placeholder="'.$route_data->league_group.'" aria-label="'.$route_data->league_group.'" disabled>
                    <input id="al_league_db_season_name_'.$route_data->id.'"'.' type="text" class="form-control h6" placeholder="'.$route_data->season_name.'" aria-label="'.$route_data->season_name.'" disabled>
                    <input id="al_league_db_season_id_'.$route_data->id.'"'.' type="text" class="form-control h6" placeholder="'.$route_data->season_id.'" aria-label="'.$route_data->season_id.'" disabled>
                    <input id="al_league_db_start_date_'.$route_data->id.'"'.' type="text" class="form-control h6" placeholder="'.$route_data->start_date.'" aria-label="'.$route_data->start_date.'" disabled>
                    <input id="al_league_db_est_end_date_'.$route_data->id.'"'.' type="text" class="form-control h6" placeholder="'.$route_data->est_end_date.'" aria-label="'.$route_data->est_end_date.'" disabled>
                </div>
                <div class="btn-group w-100">
                    <input id="al_league_db_league_name_'.$route_data->id.'"'.' type="text" class="form-control h6" placeholder="'.$route_data->league_name.'" aria-label="'.$route_data->league_name.'" disabled>
                    <button class="btn btn-outline-warning text-nowrap h6" type="button" onclick="updateAllLeague(this)" data-identity="'.$route_data->id.'">
                        <i class="bx bx-edit-alt nav_icon flex-shrink-0 h4" ></i>
                    </button>
                    <button class="btn btn-outline-danger text-nowrap h6" type="button" onclick="deleteAllLeague(this)" data-identity="'.$route_data->id.'">
                        <i class="bx bx-x nav_icon flex-shrink-0 h4" ></i>
                    </button>
                </div>
            ';

            $details =  '(Add => League): New League ['.$_POST['al_league_name'].'] added at time: '.date("F j, Y, g:i a").' by '.$_SESSION['username'];
            $dashboard->set_log_details($details);
            $dashboard->set_log_username($_SESSION['username']);
            $dashboard->set_log_user_role($_SESSION['user_role']);
            $event_type ='league_insert';
            $dashboard->set_log_event_type($event_type);
            $updateconsole= $dashboard->update_log_details();

            $dashboard->set_league_phase_info_league_name($route_data->league_name);
            $p1_sd =  $_POST['p1_sd'] ; $p1_sd_temp = strtotime($p1_sd); $p1_sd_date =  date('Y-m-d H:i:s', $p1_sd_temp); $dashboard->set_league_phase_info_p1_sd($p1_sd_date);
            $p1_ed =  $_POST['p1_ed'] ; $p1_ed_temp = strtotime($p1_ed); $p1_ed_date =  date('Y-m-d H:i:s', $p1_ed_temp); $dashboard->set_league_phase_info_p1_ed($p1_ed_date);
            $p2_sd =  $_POST['p2_sd'] ; $p2_sd_temp = strtotime($p2_sd); $p2_sd_date =  date('Y-m-d H:i:s', $p2_sd_temp); $dashboard->set_league_phase_info_p2_sd($p2_sd_date);
            $p2_ed =  $_POST['p2_ed'] ; $p2_ed_temp = strtotime($p2_ed); $p2_ed_date =  date('Y-m-d H:i:s', $p2_ed_temp); $dashboard->set_league_phase_info_p2_ed($p2_ed_date);
            $p3_sd =  $_POST['p3_sd'] ; $p3_sd_temp = strtotime($p3_sd); $p3_sd_date =  date('Y-m-d H:i:s', $p3_sd_temp); $dashboard->set_league_phase_info_p3_sd($p3_sd_date);
            $p3_ed =  $_POST['p3_ed'] ; $p3_ed_temp = strtotime($p3_ed); $p3_ed_date =  date('Y-m-d H:i:s', $p3_ed_temp); $dashboard->set_league_phase_info_p3_ed($p3_ed_date);
            $p4_sd =  $_POST['p4_sd'] ; $p4_sd_temp = strtotime($p4_sd); $p4_sd_date =  date('Y-m-d H:i:s', $p4_sd_temp); $dashboard->set_league_phase_info_p4_sd($p4_sd_date);
            $p4_ed =  $_POST['p4_ed'] ; $p4_ed_temp = strtotime($p4_ed); $p4_ed_date =  date('Y-m-d H:i:s', $p4_ed_temp); $dashboard->set_league_phase_info_p4_ed($p4_ed_date);
            $p5_sd =  $_POST['p5_sd'] ; $p5_sd_temp = strtotime($p5_sd); $p5_sd_date =  date('Y-m-d H:i:s', $p5_sd_temp); $dashboard->set_league_phase_info_p5_sd($p5_sd_date);
            $p5_ed =  $_POST['p5_ed'] ; $p5_ed_temp = strtotime($p5_ed); $p5_ed_date =  date('Y-m-d H:i:s', $p5_ed_temp); $dashboard->set_league_phase_info_p5_ed($p5_ed_date);
            $p6_sd =  $_POST['p6_sd'] ; $p6_sd_temp = strtotime($p6_sd); $p6_sd_date =  date('Y-m-d H:i:s', $p6_sd_temp); $dashboard->set_league_phase_info_p6_sd($p6_sd_date);
            $p6_ed =  $_POST['p6_ed'] ; $p6_ed_temp = strtotime($p6_ed); $p6_ed_date =  date('Y-m-d H:i:s', $p6_ed_temp); $dashboard->set_league_phase_info_p6_ed($p6_ed_date);
            $p7_sd =  $_POST['p7_sd'] ; $p7_sd_temp = strtotime($p7_sd); $p7_sd_date =  date('Y-m-d H:i:s', $p7_sd_temp); $dashboard->set_league_phase_info_p7_sd($p7_sd_date);
            $p7_ed =  $_POST['p7_ed'] ; $p7_ed_temp = strtotime($p7_ed); $p7_ed_date =  date('Y-m-d H:i:s', $p7_ed_temp); $dashboard->set_league_phase_info_p7_ed($p7_ed_date);
            $update_league_phase_info = $dashboard->update_league_phase_info();

        }
    }
    echo ($output);
}
if(isset($_POST['update_league_1'])){
    $dashboard->set_league_info_league_name($_POST['update_league_4']);
    $check_data = $dashboard->check_league_info();
    if(empty($check_data->id)){
        $output = 'update duplicate';
    }else{
        $dashboard->set_league_info_id($check_data->id);
        $sDate = $_POST['update_league_5'];
        $tsDate = strtotime($sDate);
        $startDate =  date('Y-m-d H:i:s', $tsDate);
        $dashboard->set_league_info_start_date($startDate);
        $eDate = $_POST['update_league_6'];
        $teDate = strtotime($eDate);
        $endDate =  date('Y-m-d H:i:s', $teDate);
        $dashboard->set_league_info_est_end_date($endDate);
        if($dashboard->update_league_info()){
            $all_league = $dashboard->get_all_league_info();
            //echo implode(" ",$all_league_group);
            foreach($all_league as $league) {
                echo '                                            
                <div class="d-none">
                    <input id="al_league_db_league_group_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->league_group.'" aria-label="'.$league->league_group.'" disabled>
                    <input id="al_league_db_season_name_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->season_name.'" aria-label="'.$league->season_name.'" disabled>
                    <input id="al_league_db_season_id_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->season_id.'" aria-label="'.$league->season_id.'" disabled>
                    <input id="al_league_db_start_date_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->start_date.'" aria-label="'.$league->start_date.'" disabled>
                    <input id="al_league_db_est_end_date_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->est_end_date.'" aria-label="'.$league->est_end_date.'" disabled>
                </div>
                <div class="btn-group w-100">
                    <input id="al_league_db_league_name_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->league_name.'" aria-label="'.$league->league_name.'" disabled>
                    <button class="btn btn-outline-warning text-nowrap h6" type="button" onclick="updateAllLeague(this)" data-identity="'.$league->id.'">
                        <i class="bx bx-edit-alt nav_icon flex-shrink-0 h4" ></i>
                    </button>
                    <button class="btn btn-outline-danger text-nowrap h6" type="button" onclick="deleteAllLeague(this)" data-identity="'.$league->id.'">
                        <i class="bx bx-x nav_icon flex-shrink-0 h4" ></i>
                    </button>
                </div>                                            
                ';
            }

            $details =  '(Update => League Start Date): Leage ['.$_POST['update_league_4'].'] start date updated to ['.$_POST['update_league_5'].'] at time: '.date("F j, Y, g:i a").' by '.$_SESSION['username'];
            $dashboard->set_log_details($details);
            $dashboard->set_log_username($_SESSION['username']);
            $dashboard->set_log_user_role($_SESSION['user_role']);
            $event_type ='league_update';
            $dashboard->set_log_event_type($event_type);
            $updateconsole= $dashboard->update_log_details();

        }else{
            $output = 'data error';
        }
    }
    echo $output;
}
if(isset($_POST['delete_league_1'])){
    $dashboard->set_league_info_league_name($_POST['delete_league_4']);
    $check_data = $dashboard->check_league_info();
    if(!empty($check_data->id)){
        $route_data = $dashboard->delete_league_info();
        if(empty($route_data->id)) {
            $all_league = $dashboard->get_all_league_info();
            foreach($all_league as $league) {
                echo '                                            
                <div class="d-none">
                    <input id="al_league_db_league_group_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->league_group.'" aria-label="'.$league->league_group.'" disabled>
                    <input id="al_league_db_season_name_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->season_name.'" aria-label="'.$league->season_name.'" disabled>
                    <input id="al_league_db_season_id_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->season_id.'" aria-label="'.$league->season_id.'" disabled>
                    <input id="al_league_db_start_date_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->start_date.'" aria-label="'.$league->start_date.'" disabled>
                    <input id="al_league_db_est_end_date_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->est_end_date.'" aria-label="'.$league->est_end_date.'" disabled>
                </div>
                <div class="btn-group w-100">
                    <input id="al_league_db_league_name_'.$league->id.'"'.' type="text" class="form-control h6" placeholder="'.$league->league_name.'" aria-label="'.$league->league_name.'" disabled>
                    <button class="btn btn-outline-warning text-nowrap h6" type="button" onclick="updateAllLeague(this)" data-identity="'.$league->id.'">
                        <i class="bx bx-edit-alt nav_icon flex-shrink-0 h4" ></i>
                    </button>
                    <button class="btn btn-outline-danger text-nowrap h6" type="button" onclick="deleteAllLeague(this)" data-identity="'.$league->id.'">
                        <i class="bx bx-x nav_icon flex-shrink-0 h4" ></i>
                    </button>
                </div>                                            
                ';
            }
            $details =  '(Delete => League): ['.$_POST['delete_league_4'].'] deleted at time: '.date("F j, Y, g:i a").' by '.$_SESSION['username'];
            $dashboard->set_log_details($details);
            $dashboard->set_log_username($_SESSION['username']);
            $dashboard->set_log_user_role($_SESSION['user_role']);
            $event_type ='league_delete';
            $dashboard->set_log_event_type($event_type);
            $updateconsole= $dashboard->update_log_details();
        }
    }else{
        $output = 'delete error';
    }
    echo $output;
}

// Current League
if(isset($_POST['current_league_refresh'])){
    $current_leage = $dashboard->get_league_info_current_league();
    foreach($current_leage as $leage) {
        echo '
    <div class="btn-group w-100">
            <input type="text" class="form-control current_league" name="current_league" value="'.$leage->league_name.'" aria-label="League Group Name" readonly>
            <button class="btn btn-outline-success" type="button" onclick="viewLeagueInfo(this)">
                <div> <i class="bx bx-search-alt nav_icon flex-shrink-0 h4"></i> </div>
            </button>
        </div>
    ';
    }
}


// Logout
if(!empty($_POST['dp_logout'])){
    session_start();
    session_unset();
    session_destroy();
    exit();
}