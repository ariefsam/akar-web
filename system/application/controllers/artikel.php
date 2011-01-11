<?php
class Artikel extends Controller {

    function Artikel()
    {
        parent::Controller();
        $this->load->model('Artikel_model', 'artikel');
    }

    function index()
    {
        redirect('artikel/l_artikel');
    }

    function l_artikel()
    {
        $data = new stdClass();
        $data->view_content = "kumpulan_artikel";
        $data->daftar_artikel = $this->artikel->get_semua_artikel();
        $data->current = "artikel";
        $data->title = "Artikel";
        $this->load->view('blog', $data);
    }

}