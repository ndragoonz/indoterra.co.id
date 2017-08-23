<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function cek_login() {
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        $cek = $this->db->query("SELECT * from tbl_user u
                                 INNER JOIN ref_role r on u.role_id = r.role_id "
        );

        if ($cek->num_rows() > 0) {
            $query = $cek->row();

            $session = array(
                'username' => $query->username,
                'password' => $query->password,
                'role' => $query->role_name,
                'login' => true
                );
            $this->session->set_userdata($session);
            return true;
        } else {
            return false;
        }

    }


}

?>
