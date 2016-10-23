<?php  defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: CrisantoIII
 * Date: 30/06/2016
 * Time: 2:12 AM
 */
class cExams  extends CI_Controller{

    public function index() {
        $this -> load();
    }

    public function load() {
        $data['ActivePage'] = "classrecord";

        $this -> load -> model('mClassRecords');
        $records['list'] = $this -> mClassRecords -> getList();

        $this -> load -> view('repeating/header', $data);
        $this -> load -> view('content/CR/lstRecords', $records);
        $this -> load -> view('repeating/footer', $data);
    }

    public function insert() {
        $data = $this -> setData();
        $this -> load -> model('mClassRecords');
        $this -> mClassRecords -> insert($data);
		$this -> session -> set_userdata('active_page','classrecord');
		$this->session->set_flashdata('message', 'User successfully added.');
        redirect('', 'refresh');
    }

    public function update() {
        $id = $this -> input ->post('id');
        $data = $this -> setData();
        $this -> load -> model('mUsers');
        $this -> mUsers -> update($id,$data);
		$this -> session -> set_userdata('active_page','classrecord');
		$this->session->set_flashdata('message', 'User successfully updated.');
		redirect('', 'refresh');
    }

    public function delete() {
        $id = $this -> input ->post('id');
        $this -> load -> model('mUsers');
        $this -> mUsers -> delete($id);
		$this -> session -> set_userdata('active_page','classrecord');
		$this->session->set_flashdata('message', 'User successfully deleted.');
        redirect('', 'refresh');
    }

    private  function setData(){
        $data = array('name'                  => $this -> input ->post('subject'));

        return $data;
    }

}