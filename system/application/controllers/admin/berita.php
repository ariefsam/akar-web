<?php
class Berita extends Controller {

    function Berita()
    {
        parent::Controller();
        $this->load->model('Berita_model', 'berita');
    }

    function index()
    {
        redirect('admin/berita/page');
    }

    function page()
    {
        $data = new stdClass();
        $data->daftar_berita = $this->berita->get_semua_berita();
        $data->title = "Halaman Depan";
        $data->view_content = "daftar_berita";
        $this->load->view('admin/home', $data);
    }

    function edit($id = 1)
    {
        $data = new stdClass();
        $data->berita = $this->berita->get_berita($id);
        $data->title = "Edit Halaman";
        $data->view_content = "edit_berita";
        $this->load->view('admin/home', $data);
    }

    function update()
    {
        if($this->input->post('submit'))
        {
            $data = array();
            $data['id'] = $this->input->post('id');
            $data['judul'] = $this->input->post('judul');
            $data['isi'] = $this->input->post('isi');
            $this->berita->update_berita($data['id'], $data);
            redirect('admin/berita/page');
        }
        else
        {
            redirect('admin/berita/page');
        }
    }

    function insert()
    {
        if($this->input->post('submit'))
        {
            $data = array(
                "isi" => $this->input->post('isi'),
                "judul" => $this->input->post('judul')
            );
            $this->berita->insert_berita($data);

        redirect('admin/berita/page');
        }

        else
        {
            redirect('admin/berita/page');
        }
    }

    function tambah()
    {
        $data = new stdClass();
        $data->title = "Tambah Berita";
        $data->view_content = "tambah_berita";
        $this->load->view('admin/home', $data);
    }

    function hapus($id)
    {
        $x = $this->berita->hapus_berita($id);
    }

}