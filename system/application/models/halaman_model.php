<?php
class Halaman_model extends Model {

    function Halaman_model()
    {
        parent::Model();
    }

    function get_halaman($id=1)
    {
        $data = "";
        $q = $this->db->query("SELECT * FROM halaman WHERE id=$id");

        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function get_semua_halaman()
    {
        $data = array();
        $q = $this->db->query("SELECT * FROM halaman");

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function update_halaman($id_halaman, $data)
    {
        $this->db->where('id', $id_halaman);
        return $this->db->update('halaman', $data);
    }

}