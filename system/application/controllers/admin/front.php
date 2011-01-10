<?php
class Front extends Controller {

    function Front()
    {
        parent::Controller();
        $this->load->model('Halaman_model', 'halaman');
    }

    function index()
    {
        redirect('admin/front/page');
    }

    function page()
    {
        $data = new stdClass();
        $data->daftar_halaman = $this->halaman->get_semua_halaman();
        $data->title = "Halaman Depan";
        $data->view_content = "daftar_halaman";
        $this->load->view('admin/home', $data);
    }

    function edit($id = 1)
    {
        $data = new stdClass();
        $data->halaman = $this->halaman->get_halaman($id);
        $data->title = "Edit Halaman";
        $data->view_content = "edit_halaman";
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
            $this->halaman->update_halaman($data['id'], $data);
            redirect('admin/front/page');
        }
        else
        {
            redirect('admin/front/page');
        }
    }

}