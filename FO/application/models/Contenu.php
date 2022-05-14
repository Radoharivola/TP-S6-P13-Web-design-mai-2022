<?php
//session_start();  
class Contenu extends CI_Model
{
    function getArticle($title,$texte)
    {
        $this->db->select('*');
        $this->db->from('contenu');
        // $this->db->join('tbl_lining', 'products.lining=tbl_lining.id', 'left');
        $this->db->like('title', str_replace('-',' ',$title));  // Also mention table name here
        $this->db->or_like('texte', str_replace('-',' ',$texte));  // Also mention table name here

        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->result()[0];
    }
    function getById($id)
    {
        $this->db->select('*');
        $this->db->from('contenu');
        // $this->db->join('tbl_lining', 'products.lining=tbl_lining.id', 'left');
        $this->db->where('id', $id);  // Also mention table name here

        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->result()[0];
    }
    function getAll()
    {
        $this->db->select('*');
        $this->db->from('contenu');
        // $this->db->join('tbl_lining', 'products.lining=tbl_lining.id', 'left');
        // $this->db->where('id', $id);  // Also mention table name here

        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->result();
    }
}
