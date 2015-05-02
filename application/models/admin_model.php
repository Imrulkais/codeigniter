<?php

class admin_model extends CI_Model {
    
   public function get_admin_from_db()
   {
        $this->db->select('*');
        $this->db->from('admin');
        $query = $this->db->get();
        return $query->result();
   }
}
?>