<?php

class Product_m extends CI_Model
{

    function save($data)
    {
        $this->db->insert('product', $data);
    }

    function get()
    {
        return $this->db->get('product')->result();
    }
}
