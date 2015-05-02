<?php

class user_model extends CI_Model {

//    insert
    public function insert_user_to_db($udata) {
        $this->db->insert('users', $udata);
    }

//show data with pagination
    public function record_count() {
        return $this->db->count_all("users");
    }

    public function show_user_from_db($offset) {

//        $this->db->select('*');
//        $this->db->from('users');
//        $query = $this->db->get();
//        return $query->result();

        $this->db->limit(3,$offset);
        //$this->db->where('id', $id);
        $query = $this->db->get("users");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

//update data
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
            $query = $this->db->update('users', $data);
        } else {
            $newdata = array(
                'name' => $data['name'],
                'mobile' => $data['mobile'],
                'address' => $data['address']
            );
            $this->db->where('id', $data['id']);
            $query = $this->db->update('users', $newdata);
        }
    }

//    delete data
    public function delete_user_from_db($data) {

        $this->db->delete('users', array('id' => $data));
    }

}
