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
        $data->kontak = $this->Kontak_model->get_kontak();
        $this->load->view('blog', $data);
    }

    function page($id=1)
    {
        $data = new stdClass();
        $data->kontak = $this->Kontak_model->get_kontak();
        $data->view_content = "artikel";
        $data->artikel = $this->artikel->get_artikel($id);
        $data->current = "artikel";
        $data->title = $data->artikel->judul;
        $this->load->view('blog', $data);
    }

}