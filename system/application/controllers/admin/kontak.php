<?php
class Kontak extends Controller {

    function Kontak()
    {
        parent::Controller();
        $this->load->model('Kontak_model', 'kontak');
    }

    function index()
    {
        redirect('admin/kontak/all');
    }

    function all()
    {
        $data = new stdClass();
        $data->daftar_kontak = $this->kontak->get_kontak();
        $data->title = "Daftar Kontak";
        $data->view_content = "daftar_kontak";
        $this->load->view('admin/home', $data);
    }

    function update()
    {
        
    }

}