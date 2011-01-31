<?php
//header('location: home');
if(!$this->session->userdata('admin'))
            redirect('admin/login');
echo "hai";
?>
