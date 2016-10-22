<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: CrisantoIII
 * Date: 24/06/2016
 * Time: 7:53 AM
 */
class Welcome extends CI_Controller {
    public function index()
    {
        /*if ($this->session->userdata('access_granted') == 'yes') {

            $active_page =  $this->input->get('ap');

            switch ( $active_page )
            {
                case 'dashboard':
                    $this -> session -> set_userdata('active_page','dashboard');
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
        }else {*/
            $this->login();
        //}

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
            
            switch ($result) {
                case 'access_granted' :
                    //$data = array('username' => $this -> input -> post('username'), 'is_logged_in' => true);

                    $this -> session -> set_userdata('access_granted','yes');
                    $this -> session -> set_userdata('active_page','dashboard');

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

}