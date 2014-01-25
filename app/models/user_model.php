<?php
class User_model extends CI_Model{
     
    public function create_member(){
        $new_member_insert = array(
            'first_name'       => $this->input->post('first_name'),
            'last_name'        => $this->input->post('last_name'),
            'email'            => $this->input->post('email'),
            'username'         => $this->input->post('username'),                    
            'password'         => md5($this->input->post('password'))
        );
        
        $insert = $this->db->insert('users', $new_member_insert);
        return $insert;
    }
    
    
    public function login_user($username,$passowrd){
        //Secure password
        $enc_password = md5($passowrd);
        
        //Validate
        $this->db->where('username',$username);
        $this->db->where('password',$enc_password);
        
        $result = $this->db->get('users');
        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }
    }
    
}
