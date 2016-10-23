<?php  defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: CrisantoIII
 * Date: 30/06/2016
 * Time: 2:12 AM
 */
class cUsers  extends CI_Controller{

    public function index() {
        $this -> load();
    }

    public function load() {
        $data['ActivePage'] = "users";

        $this -> load -> model('mUsers');
        $records['list'] = $this -> mUsers -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('content/UR/lstUsers', $records);
        $this -> load -> view('repeating/footer', $data);
    }

    public function insert() {
        $data = $this -> setData();
        $this -> load -> model('mUsers');
        $this -> mUsers -> insert($data);
		$this -> session -> set_userdata('active_page','users');
		$this->session->set_flashdata('message', 'User successfully added.');
        redirect('', 'refresh');
    }

    public function update() {
        $id = $this -> input ->post('id');
        $data = $this -> setData();
        $this -> load -> model('mUsers');
        $this -> mUsers -> update($id,$data);
		$this -> session -> set_userdata('active_page','users');
		$this->session->set_flashdata('message', 'User successfully updated.');
		redirect('', 'refresh');
    }

    public function delete() {
        $id = $this -> input ->post('id');
        $this -> load -> model('mUsers');
        $this -> mUsers -> delete($id);
		$this -> session -> set_userdata('active_page','users');
		$this->session->set_flashdata('message', 'User successfully deleted.');
        redirect('', 'refresh');
    }

    private  function setData(){
        $type = $this->session->userdata('user_type') == "Administrator" ? "Teacher" : "Student";
        $data = array('first_name'                  => $this -> input ->post('first_name'),
            'last_name'                             => $this -> input ->post('last_name'),
            'password'                              => md5($this -> input ->post('password')),
            'type'                                  => $type,
            'username'                              => $this -> input ->post('username'));

        return $data;
    }

}