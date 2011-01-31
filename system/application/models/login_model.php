<?php
class Login_model extends Model {

    function Login_model()
    {
        parent::Model();
    }

    function login_admin($username, $password)
    {
        $password = md5($password);
        $query = $this->db->get_where('admin', array('username' => $username, 'password' => $password));
        if ($query->num_rows()>0)
        {
           $this->session->set_userdata('admin', $username);
           return 1;
        }
        else return 0;
    }

}