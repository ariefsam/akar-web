<?php
class Berita_model extends Model {

    function Berita_model()
    {
        parent::Model();
    }

    function get_semua_berita()
    {
        $data = array();
        $q = $this->db->query("SELECT * FROM berita order by id desc");

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

    function get_berita($id=1)
    {
        $data = "";
        $q = $this->db->query("SELECT * FROM berita WHERE id=$id");

        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_berita($data)
    {
        return $this->db->insert('berita', $data);
    }

    function update_berita($id_berita, $data)
    {
        $this->db->where('id', $id_berita);
        return $this->db->update('berita', $data);
    }

    function hapus_berita($id)
    {
        return $this->db->delete('berita', array('id' => $id));
    }

}