<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Win764xTestMachine1
 * Date: 6/29/2016
 * Time: 5:57 PM
 */
class mExams extends CI_Model{

    public function getSubject($id) {
        
        $this->db->where("id",$id);
        $query=$this->db->get("exams");

        $row = $query->row();

        return $row;
    }

    public function getList($subject_id) {
        $query = $this -> db ->query("SELECT * FROM Exams where subject_id='{$subject_id}'");
        return $query->result();
    }

    public function getRow($id) {
        $query = $this -> db ->query("SELECT * FROM exams WHERE id='{$id}'");
        return $query->row();
    }

    public function insert($data) {
        $this -> db -> insert('subject', $data);
        $this -> session -> set_flashdata('message', 'Your data inserted Successfully..');
        return true;
    }

    public function update($id, $data) {
        $this -> db -> where('id', $id);
        $this -> db -> update('exams', $data);
        $this -> session -> set_flashdata('message', 'Your data updated Successfully..');

        return true;
    }

    public function delete($id){
        $this -> db -> where('id', $id);
        $this -> db -> delete('exams');
        $this -> session -> set_flashdata('message', 'Your data deleted Successfully..');

        return true;
    }

}