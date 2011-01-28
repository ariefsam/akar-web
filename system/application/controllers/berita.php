<?php
class Berita extends Controller {

    function Berita()
    {
        parent::Controller();
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Berita_model', 'berita');
    }

    function index()
    {
        redirect('berita/l_berita');
    }

    function l_berita()
    {
        $data = new stdClass();
        $data->view_content = "kumpulan_berita";
        $data->daftar_berita = $this->berita->get_semua_berita();
        $data->daftar_artikel = $this->artikel->get_semua_artikel();
        $data->current = "berita";
        $data->title = "Berita";
        $data->kontak = $this->Kontak_model->get_kontak();
        $this->load->view('blog', $data);
    }

    function page($id=1)
    {
        $data = new stdClass();
        $data->kontak = $this->Kontak_model->get_kontak();
        $data->view_content = "berita";
        $data->berita = $this->berita->get_berita($id);
        $data->current = "berita";
        $data->title = $data->berita->judul;
        $this->load->view('blog', $data);
    }

}