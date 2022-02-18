<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/5/2022
 * Time: 8:02 AM
 */
require_once '../../model/dashboard.php';
$leage = new dashboard();
$all_league = $leage->get_all_league_info();
$all_league_group = $leage->get_all_league_group();
$all_season_name = $leage->get_all_season_name();
$current_leage = $leage->get_league_info_current_league();
?>

<div id="league" class="container-fluid" style="display: none;">
    <div class="row" style="margin-top: 80px">
        <div class="col-lg-8">
            <div class="shadow-lg bg-body rounded-3 p-4">
                <div class="mb-3">
                    <ul class="nav nav-tabs d-flex flex-row justify-content-start" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link link-success active" data-bs-toggle="tab" data-bs-target="#AssignLeague" type="button" role="tab" aria-selected="true">
                                <p class="h6">Assign League</p>
                            </button>
                        </li>
                        <li class="nav-item " role="presentation">
                            <button class="nav-link link-success " data-bs-toggle="tab" data-bs-target="#CurrentLeague" type="button" role="tab" aria-selected="true">
                                <p class="h6">Current League</p>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link link-success" data-bs-toggle="tab" data-bs-target="#LeagueHistory" type="button" role="tab" aaria-selected="false">
                                <p class="h6">League History</p>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active col-lg-12" id="AssignLeague" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row border border-light border-2 rounded-3 py-4 d-flex flex-row">
                                <div class="col-xxl-7">
                                    <p class="h5 m-3">New League Schedule</p>
                                    <form id="league_shedule" class="row border rounded-3 m-2 py-4 d-flex flex-row" onsubmit="return false;">
                                        <div class="mb-3 row">
                                            <div class="col-sm-4 col-form-label"> Select League Group </div>
                                            <div class="btn-group col-sm-8">
                                                <button id="al_league_group" name="al_league_group" type="button" class="btn btn-success dropdown-toggle btn-group-lg text-start assign_league" data-bs-toggle="dropdown" aria-expanded="false"> Group Name </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li> <a class="dropdown-item h6" href="#">trer yuiyu</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">dgdg getg e</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">dfg tjtjt</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">x 12356</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">fgfgg dgd</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">x 12351</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">v 3376</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">v 334</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">v 546</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">fgfgg dgd wwr</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">v 54344</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">v 345</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">v 23</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">x 1235</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">v 234</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4 col-form-label"> Select Season Name </div>
                                            <div class="btn-group col-sm-8">
                                                <button id="al_season_name" name="al_season_name" type="button" class="btn btn-success dropdown-toggle btn-group-lg text-start assign_league" data-bs-toggle="dropdown" aria-expanded="false"> Season Name </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li> <a class="dropdown-item h6" href="#">Winter 3</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">Winte2</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">Winter 4</a> </li>
                                                    <li> <a class="dropdown-item h6" href="#">Winte5</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4 col-form-label"> Set Season ID </div>
                                            <div class="btn-group col-sm-8">
                                                <div class="input-group">
                                                    <input id="al_season_id" name="al_season_id" type="text" class="form-control bg-body assign_league season_id" placeholder="Set Season ID" readonly>
                                                    <button class="input-group-text" onclick="spinnerClear(this)"> <i class="bx bx-x nav_icon text-danger"></i> </button>
                                                    <button class="input-group-text" onclick="getSeasonNumber(this)"> <i class="bx bx bxs-right-top-arrow-circle nav_icon text-success"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4 col-form-label"> Set League Name </div>
                                            <div class="btn-group col-sm-8">
                                                <div class="input-group">
                                                    <input id="al_league_name" name="al_league_name" type="text" class="form-control bg-body assign_league" placeholder="Set League Name" readonly>
                                                    <button class="input-group-text" onclick="spinnerClear(this)"> <i class="bx bx-x nav_icon text-danger"></i> </button>
                                                    <button class="input-group-text" onclick="setLeagueName(this)"> <i class="bx bxs-left-down-arrow-circle nav_icon text-success"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4 col-form-label "> Set Season Timelap </div>
                                            <div class="col-sm-8 col-form-label">
                                                <div class="row form-group">
                                                    <label for="date" class=""></label>
                                                    <div class="col-sm-12">
                                                        <div class="input-group date w-100 " data-provide="datepicker">
                                                            <input id="al_timeline_datepicker" name="al_timeline_datepicker" type="text" class="form-control assign_league" placeholder="eg. Month XX, YEAR" readonly>
                                                            <span class="input-group-append">
                                                                <span class="input-group-text bg-white d-block">
                                                                    <i class="bx bx-calendar nav_icon"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4 col-form-label"> End of Seasson </div>
                                            <div class="btn-group col-sm-8">
                                                <div class="input-group">
                                                    <input id="al_timeline_end" name="al_timeline_end" type="text" class="form-control bg-body assign_league" placeholder="eg. Month XX, YEAR" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-none">

                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-sm-4"></div>
                                            <div class="btn-group col-sm-8">
                                                <div class="row">
                                                    <button class="btn btn-success col text-nowrap me-2 mt-1" style="margin-left: 12px;" onclick="timelinePreview(this)">Preview</button>
                                                    <button class="btn btn-success col text-nowrap ms-2 me-2 mt-1" type="button" onclick="assignLeague(this)">Assign</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xxl-5">
                                    <p class="h5 m-3">Preview</p>
                                    <div class="row border rounded-3 m-2 d-flex flex-row">
                                        <div class="mb-3 row">
                                            <div class="col-sm-12 mt-3">
                                                <div class="accordion">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                            <button id="timeLinePreviewBtn" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#timeLinePreview" aria-controls="panelsStayOpen-collapseOne">
                                                                TimeLine Preview
                                                            </button>
                                                        </h2>
                                                        <div id="timeLinePreview" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                                            <div class="accordion-body">
                                                                <div style="max-height: 60vh; overflow-y: scroll;">
                                                                    <div class="card card-body" id="timeline" style="display: none">
                                                                        <div class="panel panel-white no-radius">
                                                                            <div class="panel-body">
                                                                                <ul class="timeline-xs margin-top-20 margin-bottom-20">
                                                                                    <li class="timeline-item success list-group-item-warning">
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="row">
                                                                                                <div class="col text-muted text-small"> <strong class="text-black">Phase-1</strong> </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col d-inline-block">
                                                                                                <p class="text-info" href="">Start Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_1_start"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col">
                                                                                                <p class="text-info" href="">Finish Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_1_finish"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="timeline-item">
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="row">
                                                                                                <div class="col text-muted text-small"> <strong class="text-black">Phase-2</strong> </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col d-inline-block">
                                                                                                <p class="text-info" href="">Start Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_2_start"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col">
                                                                                                <p class="text-info" href="">Finish Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_2_finish"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="timeline-item danger list-group-item-danger">
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="row">
                                                                                                <div class="col text-muted text-small"> <strong class="text-black">Phase-3</strong> </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col d-inline-block">
                                                                                                <p class="text-info" href="">Start Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_3_start"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col">
                                                                                                <p class="text-info" href="">Finish Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_3_finish"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="timeline-item info">
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="row">
                                                                                                <div class="col text-muted text-small"> <strong class="text-black">Phase-4</strong> </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col d-inline-block">
                                                                                                <p class="text-info" href="">Start Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_4_start"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col">
                                                                                                <p class="text-info" href="">Finish Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_4_finish"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="timeline-item info list-group-item-warning">
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="row">
                                                                                                <div class="col text-muted text-small"> <strong class="text-black">Phase-5</strong> </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col d-inline-block">
                                                                                                <p class="text-info" href="">Start Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_5_start"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col">
                                                                                                <p class="text-info" href="">Finish Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_5_finish"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="timeline-item">
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="row">
                                                                                                <div class="col text-muted text-small"> <strong class="text-black">Phase-6</strong> </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col d-inline-block">
                                                                                                <p class="text-info" href="">Start Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_6_start"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col">
                                                                                                <p class="text-info" href="">Finish Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_6_finish"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="timeline-item danger list-group-item-danger">
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="row">
                                                                                                <div class="col text-muted text-small"> <strong class="text-black">Phase-7</strong> </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col d-inline-block">
                                                                                                <p class="text-info" href="">Start Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_7_start"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row margin-left-5">
                                                                                            <div class="col">
                                                                                                <p class="text-info" href="">Finish Date:</p>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <a id="timeline_phase_7_finish"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade col-lg-12" id="CurrentLeague" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class=" col-lg-12">
                                    <div class="row border border-light border-2 rounded-3 py-4 d-flex flex-row">
                                        <div class="col-sm-6 ">
                                            <p class="h5 m-3">League List</p>
                                            <div class="d-none">
                                                <input id="current_league_refresh" type="text" class="form-control h6 current_league_refresh" name="current_league_refresh" value="" disabled>
                                            </div>
                                            <div id="current_league_container" class="overflow-auto" style="max-height: 60vh;overflow-y: scroll;">
                                                <?php
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
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="h5 m-3">View Info</p>
                                            <div class="ps-4 pe-4 pb-4">
                                                <div class="card text-center" style="display: block">
                                                    <div class="card-header d-flex justify-content-center"> League Started On &nbsp;
                                                        <p></p>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">Current Phase</th>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Total Player</th>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Total Group</th>
                                                                <td>1</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="card-footer text-muted d-flex justify-content-center"> Will Finish On &nbsp;
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ps-4 pe-4 pb-4">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade col-lg-12" id="LeagueHistory" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row py-4 d-flex flex-row">
                                <div class="col-xxl-8">
                                    <p class="h5 m-3">History Table</p>
                                    <div class="border p-4">
                                        <div id="leagueHistoryTable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                            <table id="leagueHistoryTable" class="table table-striped table-responsive dt-responsive dataTable no-footer dtr-inline" style="cursor: pointer; width: 100%;" aria-describedby="leagueHistoryTable_info">
                                                <thead>
                                                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="leagueHistoryTable" rowspan="1" colspan="1" style="width: 51px;" aria-label="League Name: activate to sort column descending" aria-sort="ascending">League Name</th><th class="sorting" tabindex="0" aria-controls="leagueHistoryTable" rowspan="1" colspan="1" style="width: 50px;" aria-label="Start Date: activate to sort column ascending">Start Date</th><th class="sorting" tabindex="0" aria-controls="leagueHistoryTable" rowspan="1" colspan="1" style="width: 52px;" aria-label="End Date: activate to sort column ascending">End Date</th><th class="sorting" tabindex="0" aria-controls="leagueHistoryTable" rowspan="1" colspan="1" style="width: 78px;" aria-label="Total Participant: activate to sort column ascending">Total Participant</th><th class="sorting" tabindex="0" aria-controls="leagueHistoryTable" rowspan="1" colspan="1" style="width: 51px;" aria-label="Winner: activate to sort column ascending">Winner</th><th class="sorting" tabindex="0" aria-controls="leagueHistoryTable" rowspan="1" colspan="1" style="width: 35px;" aria-label="More Info: activate to sort column ascending">More Info</th></tr>
                                                </thead>
                                                <tbody>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="dtr-control sorting_1" tabindex="0">Flow-Spring-01</td>
                                                    <td>06/27/2021</td>
                                                    <td>09/25/2021</td>
                                                    <td style="">88</td>
                                                    <td style="">Tom Cruise</td>
                                                    <td style="">
                                                        <button class="input-group-text" onclick="spinnerInputPlus(this)"> <i class="bx bx-info-square nav_icon"></i> </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4">
                                    <p class="h5 m-3">View Info</p>
                                    <div class="border p-4">
                                        <div class="card text-center" style="display: block">
                                            <div class="card-header d-flex justify-content-center"> League Started On &nbsp;
                                                <p></p>
                                            </div>
                                            <div class="card-body">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">League Name</th>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Total Player</th>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Winner</th>
                                                        <td>1</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer text-muted d-flex justify-content-center"> Will Finish On &nbsp;
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="shadow-lg bg-body rounded-3 p-4">
                <div class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="AllLeaguesHeading">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#AllLeagues" aria-expanded="true" aria-controls="AllLeagues">
                                All Leagues
                            </button>
                        </h2>
                        <div id="AllLeagues" class="accordion-collapse collapse show" aria-labelledby="AllLeaguesHeading">
                            <div class="accordion-body">
                                <div class="row py-1 d-flex flex-row">
                                    <div id="al_league_container" class="w-100 overflow-auto" style="max-height: 60vh;overflow-y: scroll;">
                                        <?php
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
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="LeagueGroupHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#LeagueGroup" aria-expanded="false" aria-controls="LeagueGroup">
                                League Group
                            </button>
                        </h2>
                        <div id="LeagueGroup" class="accordion-collapse collapse" aria-labelledby="LeagueGroupHeading">
                            <div class="accordion-body">
                                <div class="row py-1 d-flex flex-row">
                                    <form>
                                        <div class="btn-group w-100 mb-2">
                                            <input name="league_group" type="text" class="form-control h6 league_group" placeholder="League Group Name" aria-label="League Group Name">
                                            <button class="btn btn-success text-nowrap h6 league_group" type="button" onclick="addLeagueGroup(this); return false;">Add Group</button>
                                        </div>
                                    </form>
                                    <div id="league_group_container" class="w-100 overflow-auto" style="max-height: 60vh;overflow-y: scroll;">
                                        <?php
                                        foreach($all_league_group as $league_group) {
                                            echo '
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
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="SeasonNameHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SeasonName" aria-expanded="false" aria-controls="SeasonName">
                                Season Name
                            </button>
                        </h2>
                        <div id="SeasonName" class="accordion-collapse collapse" aria-labelledby="SeasonNameHeading">
                            <div class="accordion-body">
                                <div class="row py-1 d-flex flex-row">
                                    <form>
                                        <div class="btn-group w-100 mb-2">
                                            <input name="season_name" type="text" class="form-control h6 season_name" placeholder="Season Name" aria-label="Season Name">
                                            <button class="btn btn-success text-nowrap h6" type="button" onclick="addSeasonName(this); return false;">Add Season</button>
                                        </div>
                                    </form>
                                    <div id="season_name_container" class="w-100 overflow-auto" style="max-height: 60vh;overflow-y: scroll;">
                                        <?php
                                        foreach($all_season_name as $season_name) {
                                            echo '
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
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>