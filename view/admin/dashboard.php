<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/5/2022
 * Time: 7:53 AM
 */
require_once '../../model/dashboard.php';
$dboard = new dashboard();
$current_leage = $dboard->get_league_info_current_league();
$log_table = $dboard->get_all_log_details();
?>
<div id="dashboard" class="container-fluid" style="display: block; margin-top: 80px">
    <div class="row" style="margin-top: 80px">
        <div class="col-lg-4">
            <div class="shadow-lg bg-body rounded-3 p-4">
                <p class="h5 mt-3 mb-3">Current League</p>
                <div id="carouselCurrentLeauge" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        $count1 = 0;
                        foreach($current_leage as $leage) {
                            if($count1===0){
                                echo '
                                <button type="button" data-bs-target="#carouselCurrentLeauge" data-bs-slide-to="'.$count1.'" class="active" aria-current="true" aria-label="Slide '.($count1+1).'"></button>
                                ';
                            }else{
                                echo '
                                <button type="button" data-bs-target="#carouselCurrentLeauge" data-bs-slide-to="'.$count1.'" aria-label="Slide '.($count1+1).'"></button>
                                ';
                            }
                            $count1++;
                        }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <?php
                        $count2 = 0;
                        foreach($current_leage as $leage) {
                            if($count2===0){
                                echo '
                                <div class="carousel-item active">
                                    <div> <img src="../../assets/img/bg1.jpg" class="d-block w-100 h-75" alt=""> </div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-white">'.$leage->league_name.'</h5>
                                    </div>
                                </div>
                                ';
                            }
                            else{
                                if($count2%2==0){
                                    echo '
                                    <div class="carousel-item">
                                        <div> <img src="../../assets/img/bg1.jpg" class="d-block w-100" alt=""> </div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="text-white">'.$leage->league_name.'</h5>
                                        </div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="carousel-item">
                                        <div> <img src="../../assets/img/bg3.jpg" class="d-block w-100 h-75" alt=""> </div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="text-white">'.$leage->league_name.'</h5>
                                        </div>
                                    </div>
                                    ';
                                }
                            }
                            $count2++;
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCurrentLeauge" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCurrentLeauge" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="shadow-lg bg-body rounded-3 p-4">
                <p class="h5 mt-3 mb-3">Log Note</p>
                <ul class="list-group" style="max-height: 60vh;overflow-y: scroll;">
                    <?php
                    $count3 = 0;
                    foreach($log_table as $log) {

                        if($count3%2==0){
                            $data = $log->details;
                            $afterData = substr($data, strpos($data, "):") + 2);
                            $heading = strtok($data,  '):');
                            echo '<li class="list-group-item list-group-item-success border  border-success mb-1"><b>'.$heading.'):</b>'.$afterData.'</li>';
                        }
                        else{
                            $data = $log->details;
                            $afterData = substr($data, strpos($data, "):") + 2);
                            $heading = strtok($data,  '):');
                            echo ' <li class="list-group-item list-group-item-light border  border-success mb-1"><b>'.$heading.'):</b>'.$afterData.'</li>';
                        }
                        $count3++;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

</div>
