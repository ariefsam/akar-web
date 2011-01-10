<?php
class Home extends Controller {

    function Home()
    {
        parent::Controller();
    }

    function index()
    {
        $data = new stdClass();
        $data->view_content = "depan";
        $data->title = "Home";
        $this->load->view('admin/home', $data);
    }

}