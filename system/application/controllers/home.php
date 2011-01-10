<?php
class Home extends Controller {

    function Home()
    {
        parent::Controller();
        $this->load->model('Halaman_model', 'halaman');
    }

    function index($id=1)
    {
        $data = new stdClass();
        $data->view_content = 'depan';
        $data->current = "home";
        $data->title = "Home";
        $data->halaman = $this->halaman->get_halaman($id);
        $this->load->view('base', $data);
    }

    function tentang_kami()
    {
        $data = new stdClass();
        $data->current = "tentang_kami";
        $data->atas = "Tentang Kami";
        $data->title = "Tentang Kami";
        $data->view_content = 'about';
        $data->halaman = $this->halaman->get_halaman(2);
        $this->load->view('sub', $data);
    }

    function pelanggan()
    {
        $data = new stdClass();
        $data->current = "pelanggan";
        $data->atas = "Pelanggan";
        $data->title = "Pelanggan Kami";
        $data->view_content = 'pelanggan';
        $data->halaman = $this->halaman->get_halaman(3);
        $this->load->view('sub', $data);
    }

    function artikel($id=0)
    {
        if ($id==0) redirect('home/l_artikel');
        $data = new stdClass();
        $data->current = "pelanggan";
        $data->atas = "Pelanggan";
        $data->title = "Pelanggan Kami";
        $data->view_content = 'pelanggan';
        $data->halaman = $this->halaman->get_artikel($id);
        $this->load->view('blog', $data);
    }

    function l_artikel()
    {
        
    }

}