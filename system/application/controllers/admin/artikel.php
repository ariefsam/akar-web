<?php
class Artikel extends Controller {

    function artikel()
    {
        parent::Controller();
        $this->load->model('Artikel_model', 'artikel');
    }

    function index()
    {
        redirect('admin/artikel/page');
    }

    function page()
    {
        $data = new stdClass();
        $data->daftar_artikel = $this->artikel->get_semua_artikel();
        $data->title = "Halaman Depan";
        $data->view_content = "daftar_artikel";
        $this->load->view('admin/home', $data);
    }

    function edit($id = 1)
    {
        $data = new stdClass();
        $data->artikel = $this->artikel->get_artikel($id);
        $data->title = "Edit Halaman";
        $data->view_content = "edit_artikel";
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
            $this->artikel->update_artikel($data['id'], $data);
            redirect('admin/artikel/page');
        }
        else
        {
            redirect('admin/artikel/page');
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
            $this->artikel->insert_artikel($data);

        redirect('admin/artikel/page');
        }
        
        else
        {
            redirect('admin/artikel/page');
        }
    }

    function tambah()
    {
        $data = new stdClass();
        $data->title = "Tambah Artikel";
        $data->view_content = "tambah_artikel";
        $this->load->view('admin/home', $data);
    }

}