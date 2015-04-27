<?php

class user_model extends CI_Model {

    public function insert_user_to_db($udata) {
        $this->db->insert('users', $udata);
    }

    public function show_user_from_db() {

        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    public function edit_user_from_db($id) {

        $this->db->where('id', $id);
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    public function update_user_to_db($data) {
        $password = $data['password'];
        if ($password) {
            $this->db->where('id', $data['id']);
            $query=$this->db->update('users', $data);
            
        } else {
            $newdata=array(
                'name'=>$data['name'],
                'mobile'=>$data['mobile'],
                'address'=>$data['address']
            );
            $this->db->where('id', $data['id']);
            $query=$this->db->update('users', $newdata);
        }
    }
    
    public function delete_user_from_db($data){
        
        $this->db->delete('users', array('id' => $data)); 
    }

}
