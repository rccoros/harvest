<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: CrisantoIII
 * Date: 27/06/2016
 * Time: 7:43 AM
 */
class mLogin extends CI_Model{
    public function signinUser(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $sql = "SELECT * from users WHERE username='{$username}' AND password='".MD5($password)."' LIMIT 1 ";
        $result = $this->db->query($sql);
        if($result->num_rows() == 1){
            return 'access_granted';
        } else{
            return 'access_denied';
        }

    }

    public function getCurrentUserId(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $sql = "SELECT id from users WHERE username='{$username}' AND password='".MD5($password)."' LIMIT 1 ";
        $result = $this->db->query($sql);
        //$row = $result->row();
        if($result->num_rows() == 1){
            $currId = '';
            foreach ($result->result_array() as $row)
            {
                    $currId = $row['id'];
            }
            return $currId;
        } else{
            return NULL;
        }

    }

    public function getCurrentUserType($id){

        $sql = "SELECT type from users WHERE id={$id} LIMIT 1 ";
        $result = $this->db->query($sql);
        //$row = $result->row();
        if($result->num_rows() == 1){
            $type = '';
            foreach ($result->result_array() as $row)
            {
                    $type = $row['type'];
            }
            return $type;
        } else{
            return NULL;
        }

    }
}