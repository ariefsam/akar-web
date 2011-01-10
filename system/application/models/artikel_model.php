<?php
class Artikel_model extends Model {

    function Artikel_model()
    {
        parent::Model();
    }

    function get_semua_artikel()
    {
        $data = array();
        $q = $this->db->query("SELECT * FROM artikel order by id desc");

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

    function get_artikel($id=1)
    {
        $data = "";
        $q = $this->db->query("SELECT * FROM artikel WHERE id=$id");

        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_artikel($data)
    {
        return $this->db->insert('artikel', $data);
    }

    function update_artikel($id_artikel, $data)
    {
        $this->db->where('id', $id_artikel);
        return $this->db->update('artikel', $data);
    }

}