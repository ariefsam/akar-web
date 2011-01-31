<?php
class Media extends Controller {

    function Media()
    {
        parent::Controller();
        $this->load->helper('directory');
        if(!$this->session->userdata('admin'))
            redirect('admin/login');
    }

    function index()
    {

        $data = new stdClass();
        $data->title = "Halaman Media";
        $data->view_content = "media";
        $data->error = "";
        $data->map = directory_map('./pictures/', TRUE);
        $this->load->view('admin/home', $data);
    }

    function hapus($filename)
    {        
        unlink('./pictures/' . $filename);
    }


}