<?php
//session_start();  
class SuperUtilisateur extends CI_Model
{
     function login($email, $password)
     {
          $result = array();
          // $query = (" select Utilisateur.* from Utilisateur where email='%s' and password=sha1('%s')");
          // $query = sprintf($query, $email, $password);
          $query = (" select SuperUtilisateur.* from SuperUtilisateur where email='%s'");
          $query = sprintf($query, $email);
          $resultat = $this->db->query($query);
          if (count($resultat->result_array()) == 1) {
               $query0 = (" select SuperUtilisateur.* from SuperUtilisateur where email='%s' and password=sha1('%s')");
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

     function activate()
     {
          // $this->db->where('id', $id);
          // $this->db->update('utilisateur', array('active' => 1));
          // $this->db->select('*');
          // $this->db->from('utilisateur');
          // // $this->db->join('tbl_lining', 'products.lining=tbl_lining.id', 'left');
          // $this->db->where('id', $id);  // Also mention table name here
          // $query = $this->db->get();
          // $email = '';
          // if ($query->num_rows() > 0)
          //      $email = ($query->result())[0]->email;

          $this->load->config('email');
          $this->load->library('email');

          $from = $this->config->item('smtp_user');
          $to = 'renyudark@gmail.com';
          $subject ='test pory';
          $message = 'dfghvjeklm,nrtndgbzieorntvsiert';

          $this->email->set_newline("\r\n");
          $this->email->from($from);
          $this->email->to($to);
          $this->email->subject($subject);
          $this->email->message($message);

          if ($this->email->send()) {
               echo 'Your Email has successfully been sent.';
          } else {
               show_error($this->email->print_debugger());
          }


          // $this->load->library('email');
          // $from_email = "radoharivolakenny@gmail.com";
          // $to_email = 'renyudark@gmail.com';
          // $this->email->from($from_email, 'oh lelena');
          // $this->email->to($to_email);
          // $this->email->subject('test send email');
          // $this->email->message('test send email ehehe');
          // if ($this->email->send())
          //      $this->session->set_flashdata("email_sent", "Congratulation");
     }
}
