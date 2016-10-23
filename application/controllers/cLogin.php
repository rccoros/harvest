<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: CrisantoIII
 * Date: 24/06/2016
 * Time: 7:53 AM
 */
class cLogin extends CI_Controller {
    public function index()
    {
        if ($this->session->userdata('access_granted') == 'yes') {

            $active_page =  $this->input->get('ap');

            switch ( $active_page )
            {
                case 'dashboard':
                    $this -> session -> set_userdata('active_page','dashboard');
                    break;
				case 'calendar':
                    $this -> session -> set_userdata('active_page','calendar');
                    break;
                case 'pos':
                    $this -> session -> set_userdata('active_page','pos');
                    break;
                case 'users':
                    $this -> session -> set_userdata('active_page','users');
                    break;
                case 'usersv':
                    $this -> session -> set_userdata('active_page','usersv');
                    break;
                case 'usersa':
                    $this -> session -> set_userdata('active_page','usersa');
                    break;
                case 'userse':
                    $this -> session -> set_userdata('active_page','userse');
                    break;
                case 'measurements':
                    $this -> session -> set_userdata('active_page','measurements');
                    break;
                case 'inventory':
                    $this -> session -> set_userdata('active_page','inventory');
                    break;
                case 'schedules':
                    $this -> session -> set_userdata('active_page','schedules');
                    break;
                case 'scheduler':
                    $this -> session -> set_userdata('active_page','scheduler');
                    break;
                case 'polle':
                    $this -> session -> set_userdata('active_page','pollevents');
                    break;
                case 'pollr':
                    $this -> session -> set_userdata('active_page','pollreports');
                    break;
            }

            switch( $this -> session -> userdata('active_page')){
                case 'dashboard':
                    $this->dashboard();
                    break;
				case 'calendar':
                    $this->calendar();
                    break;
                case 'pos':
                    $this->pos();
                    break;
                case 'users':
                    $this->users();
                    break;
                case 'usersv':
                    $this->usersv();
                    break;
                case 'usersa':
                    $this->usersa();
                    break;
                case 'userse':
                    $this->userse();
                    break;
                case 'measurements':
                    $this->measurements();
                    break;
                case 'inventory':
                    $this->inventory();
                    break;
                case 'schedules':
                    $this->schedules();
                    break;
                case 'scheduler':
                    $this->scheduler();
                    break;
                case 'pollevents':
                    $this->pollevent();
                    break;
                case 'pollreports':
                    $this->pollreport();
                    break;

            }
        }else {
            $this->login();
        }

    }

    /*
    public function setActivePage(){
        $active_page =  $this->input->get('activepage');

        switch ( $active_page )
        {
            case 'dashboard':
                $this -> session -> set_userdata('active_page','dashboard');
                break;
            case 'users':
                $this -> session -> set_userdata('active_page','users');
                break;
        }
        redirect('', 'refresh');
    }
    */

    public function signin(){
        $this -> form_validation -> set_rules('username', 'Username', 'required');
        $this -> form_validation -> set_rules('password', 'Password', 'required');

        if ($this -> form_validation -> run() == FALSE) {
            redirect('/', 'location');
        } else {
            $this -> load -> model('mLogin');
            $result = $this -> mLogin -> signinUser();
            $user_id = $this -> mLogin -> getCurrentUserId();
            $user_type = $this -> mLogin -> getCurrentUserType($user_id);
            switch ($result) {
                case 'access_granted' :
                    //$data = array('username' => $this -> input -> post('username'), 'is_logged_in' => true);

                    $this -> session -> set_userdata('access_granted','yes');
                    $this -> session -> set_userdata('active_page','dashboard');
                    $this -> session -> set_userdata('user_id',$user_id);
                    $this -> session -> set_userdata('user_type',$user_type);

                    $this->session->set_flashdata('message', 'Access granted');
                    redirect('', 'refresh');
                    break;
                case 'access_denied' :
                    $data['result'] = $result;
                    $this->session->set_flashdata('message', 'Access denied');
                    redirect('', 'refresh');
                    break;
            }
        }
    }
	
	public function signout(){

        if ($this -> session -> userdata('access_granted')) {

            $this->session->unset_userdata('access_granted');
            $this->session->unset_userdata('active_page');

            session_destroy();
            $this->session->set_flashdata('message', 'Successfully logout.');
            redirect(base_url(), 'location');
        } else {
            redirect(base_url(), 'location');
        }

	}



    //Call for all pages

    public function login() {
        $data['ActivePage'] = "login";

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('content/vLogin');
        $this -> load -> view('repeating/footer', $data);
    }

    public function dashboard(){
        $data['ActivePage'] = "dashboard";

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar', $data);
        //$this -> load -> view('repeating/left-menu', $data);
        $this -> load -> view('content/vDashboard');
        $this -> load -> view('repeating/footer', $data);
    }
	
	public function calendar(){
        $data['ActivePage'] = "calendar";

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar', $data);
        $this -> load -> view('repeating/left-menu', $data);
        $this -> load -> view('calendar.html');
        $this -> load -> view('repeating/footer', $data);
    }

    public function pos() {
        $data['ActivePage'] = "pos";

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar', $data);
        $this -> load -> view('repeating/left-menu', $data);
        $this -> load -> view('content/SaI/POS');
        $this -> load -> view('repeating/footer', $data);
    }


    //Users LIST, ADD & EDIT
    public function users() {

        $data['ActivePage'] = "users";

        $this -> load -> model('mUsers');
        $records['list'] = $this -> mUsers -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar');
        //$this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/UR/lstUsers', $records);
        $this -> load -> view('repeating/footer', $data);
    }

    public function usersv() {

        $data['ActivePage'] = "usersv";

        $this -> load -> model('mUsers');
        $data['list'] = $this -> mUsers -> getList();
        $id =  $this->input->get('id');
        $data['user'] = $this -> mUsers -> getRow($id);

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar');
        //$this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/UR/frmView', $data);
        $this -> load -> view('repeating/footer', $data);
    }

    public function usersa() {

        $data['ActivePage'] = "usersa";

        $this -> load -> model('mUsers');
        $records['list'] = $this -> mUsers -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar');
        //$this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/UR/frmAdd', $records);
        $this -> load -> view('repeating/footer', $data);
    }

    public function userse(){
        $data['ActivePage'] = "userse";

        $id =  $this->input->get('id');
        $this -> load -> model('mUsers');
        $data['user'] = $this -> mUsers -> getRow($id);

        $this -> load -> view('repeating/header', $data);
        //$this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/UR/frmEdit', $data);
        $this -> load -> view('repeating/footer', $data);
    }
    // End Users

    public function measurements() {
        $data['ActivePage'] = "measurements";

        $this -> load -> model('mMeasurements');
        $records['list'] = $this -> mMeasurements -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar');
        $this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/UR/lstMeasurements', $records);
        $this -> load -> view('repeating/footer', $data);
    }

    public function inventory() {
        $data['ActivePage'] = "inventory";

        $this -> load -> model('mInventory');
        $records['list'] = $this -> mInventory -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar');
        $this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/SaI/lstInventory', $records);
        $this -> load -> view('repeating/footer', $data);
    }

    public function schedules() {
        $data['ActivePage'] = "schedules";

        $this -> load -> model('mSchedule');
        $records['list'] = $this -> mSchedule -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar');
        $this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/SL/lstSchedules', $records);
        $this -> load -> view('repeating/footer', $data);
    }

    public function scheduler() {
        $data['ActivePage'] = "schedules";

        $this -> load -> model('mSchedule');
        $records['list'] = $this -> mSchedule -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar');
        $this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/SL/calendar', $records);
        $this -> load -> view('repeating/footer', $data);
    }

    public function pollevent() {
        $data['ActivePage'] = "pollevent";

        $this -> load -> model('mEvents');
        $records['list'] = $this -> mEvents -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar');
        $this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/EL/lstEvents', $records);
        $this -> load -> view('repeating/footer', $data);
    }

    public function pollreport() {
        $data['ActivePage'] = "pollreport";

        $this -> load -> model('mEvents');
        $records['list'] = $this -> mEvents -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('repeating/top-bar');
        $this -> load -> view('repeating/left-menu');
        $this -> load -> view('content/EL/calendar', $records);
        $this -> load -> view('repeating/footer', $data);
    }

}