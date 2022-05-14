<?php
//session_start();  
class Contenu extends CI_Model
{
    function getArticle($title,$texte)
    {
        $this->db->select('*');
        $this->db->from('contenu');
        // $this->db->join('tbl_lining', 'products.lining=tbl_lining.id', 'left');
        $this->db->like('title', $title);  // Also mention table name here
        $this->db->or_like('texte', $texte);  // Also mention table name here

        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->result();
    }
}
