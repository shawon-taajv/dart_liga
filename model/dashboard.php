<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/11/2022
 * Time: 11:30 AM
 */
require_once ('pdo_connect.php');
//require_once $_SERVER['DOCUMENT_ROOT'] . '/model/pdo_connect.php';

class dashboard{

    public function refineDate($sDate){
        $sDate = $_POST['al_timeline_datepicker'];
        $tsDate = strtotime($sDate);
        $fDate =  date('Y-m-d H:i:s', $tsDate);
        return $fDate;
    }


    public function __construct()
    {
        $this->db = new Connection(); // creating the object of Connection class
        $this->db = $this->db->dbConnect(); // creating the instance of dbConnect method
    }
    public function ErrorResult(){
        $error = 'Error';
        return $error;
    }

    //========Log Table========//
    protected $league_phase_info_id, $league_phase_info_league_name, $league_phase_info_p1_sd, $league_phase_info_p1_ed, $league_phase_info_p2_sd, $league_phase_info_p3_sd, $league_phase_info_p3_ed,
        $league_phase_info_p4_sd, $league_phase_info_p4_ed, $league_phase_info_p5_sd, $league_phase_info_p5_ed, $league_phase_info_p6_sd, $league_phase_info_p6_ed,$league_phase_info_p7_sd, $league_phase_info_p7_ed,
        $league_phase_info_started, $league_phase_info_current_phase, $league_phase_info_total_player, $league_phase_info_total_group, $league_phase_info_top_player;

    public function set_league_phase_info_id($league_phase_info_id){$this->league_phase_info_id = $league_phase_info_id;}
    public function get_league_phase_info_id(){return $this->league_phase_info_id;}

    public function set_league_phase_info_league_name($league_phase_info_league_name){$this->league_phase_info_league_name = $league_phase_info_league_name;}
    public function get_league_phase_info_league_name(){return $this->league_phase_info_league_name;}

    public function set_league_phase_info_p1_sd($league_phase_info_p1_sd){$this->league_phase_info_p1_sd = $league_phase_info_p1_sd;}
    public function get_league_phase_info_p1_sd(){return $this->league_phase_info_p1_sd;}

    public function set_league_phase_info_p1_ed($league_phase_info_p1_ed){$this->league_phase_info_p1_ed = $league_phase_info_p1_ed;}
    public function get_league_phase_info_p1_ed(){return $this->league_phase_info_p1_ed;}

    public function set_league_phase_info_p2_sd($league_phase_info_p2_sd){$this->league_phase_info_p2_sd = $league_phase_info_p2_sd;}
    public function get_league_phase_info_p2_sd(){return $this->league_phase_info_p2_sd;}

    public function set_league_phase_info_p2_ed($league_phase_info_p2_ed){$this->league_phase_info_p2_ed = $league_phase_info_p2_ed;}
    public function get_league_phase_info_p2_ed(){return $this->league_phase_info_p2_ed;}

    public function set_league_phase_info_p3_sd($league_phase_info_p3_sd){$this->league_phase_info_p3_sd = $league_phase_info_p3_sd;}
    public function get_league_phase_info_p3_sd(){return $this->league_phase_info_p3_sd;}

    public function set_league_phase_info_p3_ed($league_phase_info_p3_ed){$this->league_phase_info_p3_ed = $league_phase_info_p3_ed;}
    public function get_league_phase_info_p3_ed(){return $this->league_phase_info_p3_ed;}

    public function set_league_phase_info_p4_sd($league_phase_info_p4_sd){$this->league_phase_info_p4_sd = $league_phase_info_p4_sd;}
    public function get_league_phase_info_p4_sd(){return $this->league_phase_info_p4_sd;}

    public function set_league_phase_info_p4_ed($league_phase_info_p4_ed){$this->league_phase_info_p4_ed = $league_phase_info_p4_ed;}
    public function get_league_phase_info_p4_ed(){return $this->league_phase_info_p4_ed;}

    public function set_league_phase_info_p5_sd($league_phase_info_p5_sd){$this->league_phase_info_p5_sd = $league_phase_info_p5_sd;}
    public function get_league_phase_info_p5_sd(){return $this->league_phase_info_p5_sd;}

    public function set_league_phase_info_p5_ed($league_phase_info_p5_ed){$this->league_phase_info_p5_ed = $league_phase_info_p5_ed;}
    public function get_league_phase_info_p5_ed(){return $this->league_phase_info_p5_ed;}

    public function set_league_phase_info_p6_sd($league_phase_info_p6_sd){$this->league_phase_info_p6_sd = $league_phase_info_p6_sd;}
    public function get_league_phase_info_p6_sd(){return $this->league_phase_info_p6_sd;}

    public function set_league_phase_info_p6_ed($league_phase_info_p6_ed){$this->league_phase_info_p6_ed = $league_phase_info_p6_ed;}
    public function get_league_phase_info_p6_ed(){return $this->league_phase_info_p6_ed;}

    public function set_league_phase_info_p7_sd($league_phase_info_p7_sd){$this->league_phase_info_p7_sd = $league_phase_info_p7_sd;}
    public function get_league_phase_info_p7_sd(){return $this->league_phase_info_p7_sd;}

    public function set_league_phase_info_p7_ed($league_phase_info_p7_ed){$this->league_phase_info_p7_ed = $league_phase_info_p7_ed;}
    public function get_league_phase_info_p7_ed(){return $this->league_phase_info_p7_ed;}

    public function set_league_phase_info_started($league_phase_info_started){$this->league_phase_info_started = $league_phase_info_started;}
    public function get_league_phase_info_started(){return $this->league_phase_info_started;}

    public function set_league_phase_info_current_phase($league_phase_info_current_phase){$this->league_phase_info_current_phase = $league_phase_info_current_phase;}
    public function get_league_phase_info_current_phase(){return $this->league_phase_info_current_phase;}

    public function set_league_phase_info_total_player($league_phase_info_total_player){$this->league_phase_info_total_player = $league_phase_info_total_player;}
    public function get_league_phase_info_total_player(){return $this->league_phase_info_total_player;}

    public function set_league_phase_info_total_group($league_phase_info_total_group){$this->league_phase_info_total_group = $league_phase_info_total_group;}
    public function get_league_phase_info_total_group(){return $this->league_phase_info_total_group;}

    public function set_league_phase_info_top_player($league_phase_info_top_player){$this->league_phase_info_top_player = $league_phase_info_top_player;}
    public function get_league_phase_info_top_player(){return $this->league_phase_info_top_player;}

    public function update_league_phase_info(){
        $command = $this->db->prepare("INSERT INTO league_phase_info(league_name, p1_sd, p1_ed, p2_sd, p2_ed, p3_sd, p3_ed, p4_sd, p4_ed, p5_sd, p5_ed, p6_sd, p6_ed, p7_sd, p7_ed) 
                                                        VALUES (:league_name, :p1_sd, :p1_ed, :p2_sd, :p2_ed, :p3_sd, :p3_ed, :p4_sd, :p4_ed, :p5_sd, :p5_ed, :p6_sd, :p6_ed, :p7_sd, :p7_ed)");
        $command->execute(array(
            ':league_name'=>$this->get_league_phase_info_league_name(),
            ':p1_sd'=>$this->get_league_phase_info_p1_sd(),
            ':p1_ed'=>$this->get_league_phase_info_p1_ed(),
            ':p2_sd'=>$this->get_league_phase_info_p2_sd(),
            ':p2_ed'=>$this->get_league_phase_info_p2_ed(),
            ':p3_sd'=>$this->get_league_phase_info_p3_sd(),
            ':p3_ed'=>$this->get_league_phase_info_p3_ed(),
            ':p4_sd'=>$this->get_league_phase_info_p4_sd(),
            ':p4_ed'=>$this->get_league_phase_info_p4_ed(),
            ':p5_sd'=>$this->get_league_phase_info_p5_sd(),
            ':p5_ed'=>$this->get_league_phase_info_p5_ed(),
            ':p6_sd'=>$this->get_league_phase_info_p6_sd(),
            ':p6_ed'=>$this->get_league_phase_info_p6_ed(),
            ':p7_sd'=>$this->get_league_phase_info_p7_sd(),
            ':p7_ed'=>$this->get_league_phase_info_p7_ed()
        ));
        return $command ? true : false;
    }

    public function check_phase_league_phase_info(){
        $command = $this->db->prepare("SELECT league_name, CASE WHEN CURDATE() BETWEEN p1_sd AND p1_ed THEN 'Phase-1' 
                            WHEN CURDATE() BETWEEN p2_sd AND p2_ed THEN 'Phase-2' WHEN CURDATE() BETWEEN p3_sd AND p3_ed THEN 'Phase-3' WHEN CURDATE() BETWEEN p4_sd AND p4_ed THEN 'Phase-4' 
                            WHEN CURDATE() BETWEEN p5_sd AND p5_ed THEN 'Phase-5' WHEN CURDATE() BETWEEN p6_sd AND p6_ed THEN 'Phase-6' WHEN CURDATE() BETWEEN p7_sd AND p7_ed THEN 'Phase-7' 
                            ELSE '' END as current_phase FROM league_phase_info WHERE league_name = :league_name;");
        $command->execute(array(
            ':league_name'=>$this->get_league_phase_info_league_name()
        ));
        return $command->fetch(PDO::FETCH_OBJ);
    }


    //========Log Table========//
    protected $log_id, $log_details, $log_username, $log_user_role, $log_event_type;

    public function set_log_id($log_id){$this->log_id = $log_id;}
    public function get_log_id(){return $this->log_id;}

    public function set_log_details($log_details){$this->log_details = $log_details;}
    public function get_log_details(){return $this->log_details;}

    public function set_log_username($log_username){$this->log_username = $log_username;}
    public function get_log_username(){return $this->log_username;}

    public function set_log_user_role($log_user_role){$this->log_user_role = $log_user_role;}
    public function get_log_user_role(){return $this->log_user_role;}

    public function set_log_event_type($log_event_type){$this->log_event_type = $log_event_type;}
    public function get_log_event_type(){return $this->log_event_type;}

    public function update_log_details(){
        $command = $this->db->prepare("INSERT INTO log_table (details, username, user_role, event_type)VALUES (:details, :username, :user_role, :event_type)");
        $command->execute(array(
            ':details'=>$this->get_log_details(),
            ':username'=>$this->get_log_username(),
            ':user_role'=>$this->get_log_user_role(),
            ':event_type'=>$this->get_log_event_type()
        ));
        return $command ? true : false;
    }

    public function get_all_log_details(){
        $command = $this->db->prepare("SELECT * FROM log_table");
        $command->execute();
        return $command->fetchAll(PDO::FETCH_OBJ);
    }

    //========League Info Table========//
    protected $league_info_id, $league_info_league_name, $league_info_league_group, $league_info_season_name, $league_info_season_id, $league_info_start_date, $league_info_est_end_date;

    public function set_league_info_id($league_info_id){$this->league_info_id = $league_info_id;}
    public function get_league_info_id(){return $this->league_info_id;}

    public function set_league_info_league_name($league_info_league_name){$this->league_info_league_name = $league_info_league_name;}
    public function get_league_info_league_name(){return $this->league_info_league_name;}

    public function set_league_info_league_group($league_info_league_group){$this->league_info_league_group = $league_info_league_group;}
    public function get_league_info_league_group(){return $this->league_info_league_group;}

    public function set_league_info_season_name($league_info_season_name){$this->league_info_season_name = $league_info_season_name;}
    public function get_league_info_season_name(){return $this->league_info_season_name;}

    public function set_league_info_season_id($league_info_season_id){$this->league_info_season_id = $league_info_season_id;}
    public function get_league_info_season_id(){return $this->league_info_season_id;}

    public function set_league_info_start_date($league_info_start_date){$this->league_info_start_date = $league_info_start_date;}
    public function get_league_info_start_date(){return $this->league_info_start_date;}

    public function set_league_info_est_end_date($league_info_est_end_date){$this->league_info_est_end_date = $league_info_est_end_date;}
    public function get_league_info_est_end_date(){return $this->league_info_est_end_date;}

    public function add_league_info(){
        $command = $this->db->prepare("INSERT INTO league_info (league_name, league_group, season_name, season_id, start_date, est_end_date) 
                                      VALUES (:league_info_league_name, :league_info_league_group, :league_info_season_name, :league_info_season_id, :league_info_start_date, :league_info_est_end_date)");
        $command->execute(array(
            ':league_info_league_name'=>$this->get_league_info_league_name(),
            ':league_info_league_group'=>$this->get_league_info_league_group(),
            ':league_info_season_name'=>$this->get_league_info_season_name(),
            ':league_info_season_id'=>$this->get_league_info_season_id(),
            ':league_info_start_date'=>$this->get_league_info_start_date(),
            ':league_info_est_end_date'=>$this->get_league_info_est_end_date()

        ));
        return $command ? $this->check_league_info() : $this->ErrorResult();
    }

    public function update_league_info(){
        $command = $this->db->prepare("UPDATE league_info as lg SET lg.start_date = :start_date, lg.est_end_date = :est_end_date WHERE lg.id = :id");
        $command->execute(array(
            ':id'=>$this->get_league_info_id(),
            ':start_date'=>$this->get_league_info_start_date(),
            ':est_end_date'=>$this->get_league_info_est_end_date()
        ));
        return $command ? true : false;
    }

    public function check_league_info(){
        $command = $this->db->prepare("SELECT * FROM league_info as lg WHERE lg.league_name = :league_name");
        $command->execute(array(
            ':league_name'=>$this->get_league_info_league_name()
        ));
        return $command->fetch(PDO::FETCH_OBJ);
    }

    public function delete_league_info(){
        $command = $this->db->prepare("DELETE FROM league_info WHERE league_name = :league_name");
        $command->execute(array(
            ':league_name'=>$this->get_league_info_league_name()
        ));
        return $command ? true : false;
    }

    public function get_all_league_info(){
        $command = $this->db->prepare("SELECT * FROM league_info");
        $command->execute();
        return $command->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_league_info_season_id_info(){
        $command = $this->db->prepare("SELECT season_id FROM league_info as lg WHERE lg.league_group = :league_group AND lg.season_name = :season_name ORDER BY id DESC LIMIT 1");
        $command->execute(array(
            ':league_group'=>$this->get_league_info_league_group(),
            ':season_name'=>$this->get_league_info_season_name()
        ));
        return $command->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_league_info_current_league(){
        $command = $this->db->prepare("SELECT * FROM league_info as lg WHERE lg.start_date < CURDATE() AND est_end_date > CURDATE();");
        $command->execute(array(
            ':league_group'=>$this->get_league_info_league_group(),
            ':season_name'=>$this->get_league_info_season_name()
        ));
        return $command->fetchAll(PDO::FETCH_OBJ);
    }

    //========League Group Table========//
    protected $league_group_id, $league_group;

    public function set_league_group_id($league_group_id){$this->league_group_id = $league_group_id;}
    public function get_league_group_id(){return $this->league_group_id;}

    public function set_league_group($league_group){$this->league_group = $league_group;}
    public function get_league_group(){return $this->league_group;}

    public function add_league_group(){
        $command = $this->db->prepare("INSERT INTO league_group (league_group) VALUES (:league_group)");
        $command->execute(array(
            ':league_group'=>$this->get_league_group()
        ));
        return $command ? $this->check_league_group() : $this->ErrorResult();
    }

    public function update_league_group(){
        $command = $this->db->prepare("UPDATE league_group as lg SET lg.league_group = :league_group WHERE lg.id = :id");
        $command->execute(array(
            ':id'=>$this->get_league_group_id(),
            ':league_group'=>$this->get_league_group()
        ));
        return $command ? $this->check_league_group() : $this->ErrorResult();
    }

    public function check_league_group(){
        $command = $this->db->prepare("SELECT * FROM league_group as lg WHERE lg.league_group = :league_group");
        $command->execute(array(
            ':league_group'=>$this->get_league_group()
        ));
        return $command->fetch(PDO::FETCH_OBJ);
    }

    public function delete_league_group(){
        $command = $this->db->prepare("DELETE FROM league_group WHERE league_group = :league_group");
        $command->execute(array(
            ':league_group'=>$this->get_league_group()
        ));
        return $command ? true : false;
    }

    public function get_all_league_group(){
        $command = $this->db->prepare("SELECT * FROM league_group");
        $command->execute();
        return $command->fetchAll(PDO::FETCH_OBJ);
    }

    //========Season Name Table========//
    protected $season_name_id, $season_name;

    public function set_season_name_id($season_name_id){$this->season_name_id = $season_name_id;}
    public function get_season_name_id(){return $this->season_name_id;}

    public function set_season_name($season_name){$this->season_name = $season_name;}
    public function get_season_name(){return $this->season_name;}

    public function add_season_name(){
        $command = $this->db->prepare("INSERT INTO season_name (season_name) VALUES (:season_name)");
        $command->execute(array(
            ':season_name'=>$this->get_season_name()
        ));
        return $command ? $this->check_season_name() : $this->ErrorResult();
    }

    public function update_season_name(){
        $command = $this->db->prepare("UPDATE season_name as lg SET lg.season_name = :season_name WHERE lg.id = :id");
        $command->execute(array(
            ':id'=>$this->get_season_name_id(),
            ':season_name'=>$this->get_season_name()
        ));
        return $command ? $this->check_season_name() : $this->ErrorResult();
    }

    public function check_season_name(){
        $command = $this->db->prepare("SELECT * FROM season_name as lg WHERE lg.season_name = :season_name");
        $command->execute(array(
            ':season_name'=>$this->get_season_name()
        ));
        return $command->fetch(PDO::FETCH_OBJ);
    }

    public function delete_season_name(){
        $command = $this->db->prepare("DELETE FROM season_name WHERE season_name = :season_name");
        $command->execute(array(
            ':season_name'=>$this->get_season_name()
        ));
        return $command ? true : false;
    }

    public function get_all_season_name(){
        $command = $this->db->prepare("SELECT * FROM season_name");
        $command->execute();
        return $command->fetchAll(PDO::FETCH_OBJ);
    }
}