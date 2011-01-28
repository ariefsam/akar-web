<?php
class Kontak_model extends Model {

    function Kontak_model()
    {
        parent::Model();
    }

    function get_kontak()
    {
        $data = array();
        $queri = $this->db->order_by("urutan");
        $queri = $this->db->get("kontak");
        if($queri->num_rows() > 0)
        {
            foreach ($queri->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $queri->free_result();
        return $data;
    }

    function update_kontak($id_kontak, $data)
    {
        $this->db->where('id', $id_kontak);
        return $this->db->update('kontak', $data);
    }

    function hapus_kontak($id)
    {
        return $this->db->delete('kontak', array('id' => $id));
    }

    function insert_kontak($data)
    {
        $this->db->insert('kontak', $data);
    }

}