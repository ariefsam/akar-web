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

    function insert()
    {
        if($this->input->post('submit'))
        {
            $data = array(
            "nama"      => $_POST['nama'],
            "hp"        => $_POST['hp'],
            "ym"        => $_POST['ym'],
            "bagian"    => $_POST['bagian'],
            "urutan"    => $_POST['urutan']
            );

            $this->kontak->insert_kontak($data);
        }
        redirect('admin/kontak');
    }

    function all()
    {
        $data = new stdClass();
        $data->daftar_kontak = $this->kontak->get_kontak();
        $data->title = "Daftar Kontak";
        $data->view_content = "daftar_kontak";
        $this->load->view('admin/home', $data);
    }

    function update($id)
    {
        if($id)
        {
            $data = array(
                "nama"      => $_POST['nama'],
                "hp"        => $_POST['hp'],
                "ym"        => $_POST['ym'],
                "bagian"    => $_POST['bagian'],
                "urutan"    => $_POST['urutan']
            );
            $this->kontak->update_kontak($id, $data);

        }
        redirect('admin/kontak/all');
    }

    function hapus($id)
    {
        $this->kontak->hapus_kontak($id);
    }

}