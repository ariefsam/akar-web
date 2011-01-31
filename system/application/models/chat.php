<?php
class Chat extends Model {

    function Chat()
    {
        parent::Model();
    }

    function get_chat()
    {
        $data = array();
        $queri = $this->db->order_by('id');
        $x = $this->db->count_all_results('chat');
        $queri = $this->db->get('chat', 50, ($x-50));
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

    function insert_chat($data)
    {
        $this->db->insert('chat', $data);
    }

}