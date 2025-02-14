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

    function delete($id)
    {
        $this->db->where('id', $id)->delete('product');
    }

    function update($id, $data)
    {
        $this->db->where('id', $id)->update('product', $data);
    }
}
