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

        $sql = "SELECT * from tbl_users WHERE username='{$username}' AND password='{$password}' LIMIT 1 ";
        $result = $this->db->query($sql);
        //$row = $result->row();
        if($result->num_rows() == 1){
            return 'access_granted';
        } else{
            return 'access_denied';
        }

    }
}