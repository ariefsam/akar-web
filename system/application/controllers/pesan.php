<?php
class Pesan extends Controller {

    function Pesan()
    {
        parent::Controller();
    }

    function index()
    {

    }

    function insert()
    {
        $data = array(
            'nama'  => $_POST['nama'],
            'email' => $_POST['email'],
            'nohp'    => $_POST['hp'],
            'pesan' => $_POST['pesan'],
            'url'   => $_POST['url']
        );
        $this->Chat->insert_chat($data);
        //echo $this->session->userdata('url');
        redirect($this->session->userdata('url'));
    }

}