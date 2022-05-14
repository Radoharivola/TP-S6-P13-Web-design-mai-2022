<?php
//session_start();  
class Utilisateur extends CI_Model
{
    // function consoleLog($msg) {
    // 	echo '<script type="text/javascript">' .
    //       'console.log(' . $msg . ');</script>';
    // }
    function login($email, $password)
    {
        $result = array();
        // $query = (" select Utilisateur.* from Utilisateur where email='%s' and password=sha1('%s')");
        // $query = sprintf($query, $email, $password);
        $query = (" select Utilisateur.* from Utilisateur where email='%s'");
        $query = sprintf($query, $email);
        $resultat = $this->db->query($query);
        if (count($resultat->result_array()) > 0) {
            $query0 = (" select Utilisateur.* from Utilisateur where email='%s' and password=sha1('%s')");
            $query0 = sprintf($query0, $email, $password);
            $resultat0 = $this->db->query($query0);
            if (count($resultat0->result_array()) == 1) {
                $this->session->set_userdata("user", $resultat0->result_array()[0]);
                $result['etat'] = true;
                $result['message'] = "ehe boy";
                return $result;
            } else {
                $result['etat'] = false;
                $result['message'] = "Mot de passe incorrecte!!";
                return $result;
            }
        } else {
            $result['etat'] = false;
            $result['message'] = "Compte inexistant!!";
            return $result;
        }
    }
    function inscription($email, $password, $nom, $prenom)
    {
        $data  =  array(
            'email'  =>  $email,
            'password'  =>  sha1($password),
            'nom'  =>  $nom,
            'prenom'  =>  $prenom
        );

        $this->db->insert('utilisateur',  $data);
    }
    function getNonActive()
    {
        $this->db->select('*');
        $this->db->from('utilisateur');
        // $this->db->join('tbl_lining', 'products.lining=tbl_lining.id', 'left');
        $this->db->where('active', 0);  // Also mention table name here
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->result();
    }
    function getActive()
    {
        $this->db->select('*');
        $this->db->from('utilisateur');
        // $this->db->join('tbl_lining', 'products.lining=tbl_lining.id', 'left');
        $this->db->where('active', 1);  // Also mention table name here
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->result();
    }
}
