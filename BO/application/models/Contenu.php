<?php

class Contenu extends CI_Model {

    /*
    return all Contenus.
    created by your name
    created at 14-05-22.
    */
    public function getAll() {
        return $this->db->get('contenu')->result();
    }
    /*
    function for create Contenu.
    return Contenu inserted id.
    created by your name
    created at 14-05-22.
    */
    public function insert($data) {
        $this->db->insert('contenu', $data);
        return $this->db->insert_id();
    }
    /*
    return Contenu by id.
    created by your name
    created at 14-05-22.
    */
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('contenu')->result();
    }
    /*
    function for update Contenu.
    return true.
    created by your name
    created at 14-05-22.
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('contenu', $data);
        return true;
    }
    /*
    function for delete Contenu.
    return true.
    created by your name
    created at 14-05-22.
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('contenu');
        return true;
    }
    /*
    function for change status of Contenu.
    return activated of deactivated.
    created by your name
    created at 14-05-22.
    */
    public function changeStatus($id) {
        $table=$this->getDataById($id);
             if($table[0]->status==0)
             {
                $this->update($id,array('status' => '1'));
                return "Activated";
             }else{
                $this->update($id,array('status' => '0'));
                return "Deactivated";
             }
    }

}