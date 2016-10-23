<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Win764xTestMachine1
 * Date: 6/29/2016
 * Time: 5:57 PM
 */
class mUsers extends CI_Model{

    public function getUser($id) {
        
        $this->db->where("id",$id);
        $query=$this->db->get("users");

        $row = $query->row();

        return $row;
    }

    public function getList() {
        $query = $this -> db ->query('SELECT * FROM users');
        return $query->result();
    }

    public function getStudents() {
        $query = $this -> db ->query('SELECT id FROM users WHERE type="Student"');
        return $query->result();
    }

    public function getRow($id) {
        $query = $this -> db ->query("SELECT * FROM users WHERE id='{$id}'");
        return $query->row();
    }

    public function insert($data) {
        $this -> db -> insert('users', $data);
        $this -> session -> set_flashdata('message', 'Your data inserted Successfully..');
        return true;
    }

    public function update($id, $data) {
        $this -> db -> where('id', $id);
        $this -> db -> update('users', $data);
        $this -> session -> set_flashdata('message', 'Your data updated Successfully..');

        return true;
    }

    public function delete($id){
        $this -> db -> where('id', $id);
        $this -> db -> delete('users');
        $this -> session -> set_flashdata('message', 'Your data deleted Successfully..');

        return true;
    }

}