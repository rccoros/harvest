<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Win764xTestMachine1
 * Date: 6/29/2016
 * Time: 5:57 PM
 */
class mGrades extends CI_Model{

    public function getSubject($id) {
        
        $this->db->where("id",$id);
        $query=$this->db->get("users");

        $row = $query->row();

        return $row;
    }

    public function getList($users,$exam_id) {
        //die($users.' '.$exam_id);
        $sql = "SELECT * FROM Grades g, Users u where g.user_id IN ({$users}) AND g.exam_id IN ({$exam_id}) AND u.id = g.user_id";
        $query = $this -> db ->query($sql);
        //die($sql);
        return $query->result();
    }

    public function getRow($id) {
        $query = $this -> db ->query("SELECT * FROM Grades WHERE id='{$id}'");
        return $query->row();
    }

    public function insert($data) {
        $this -> db -> insert('subject', $data);
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