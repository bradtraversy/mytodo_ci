<?php
class Task_model extends CI_Model{
     
    public function get_task($id){
        $this->db->select('
            tasks.task_name,
            tasks.id,
            tasks.create_date,
            tasks.due_date,
            tasks.task_body,
            tasks.is_complete,
            lists.id as list_id,
            lists.list_name,
            lists.list_body
            ');
        $this->db->from('tasks');
        $this->db->join('lists', 'lists.id = tasks.list_id','LEFT');
        $this->db->where('tasks.id',$id);
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
    
     public function get_task_list_id($task_id){
        $this->db->where('id',$task_id);
        $query = $this->db->get('tasks');
        return $query->row()->list_id;
    }
    
    public function get_list_name($list_id){
        $this->db->where('id',$list_id);
        $query = $this->db->get('lists');
        return $query->row()->list_name;
    }
    
    
    public function create_task($data){
	$insert = $this->db->insert('tasks', $data);
	return $insert;
    }
    
    public function edit_task($task_id,$data){
        $this->db->where('id', $task_id);
        $this->db->update('tasks', $data); 
        return TRUE;
    }
    
    
     public function delete_task($task_id){
        $this->db->where('id',$task_id);
        $this->db->delete('tasks');
        return;
    }
    
    
     public function get_task_data($task_id){
        $this->db->where('id',$task_id);
        $query = $this->db->get('tasks');
        return $query->row();
    }
    
    
    public function check_if_complete($id){
        $this->db->where('id',$id);
        $query = $this->db->get('tasks');
        return $query->row()->is_complete;
    }
    
    public function mark_complete($task_id){
        $this->db->set('is_complete', 1);
        $this->db->where('id', $task_id);
        $this->db->update('tasks');
        return TRUE;
    }
    
     public function mark_new($task_id){
        $this->db->set('is_complete', 0);
        $this->db->where('id', $task_id);
        $this->db->update('tasks');
        return TRUE;
    }
    
    
     public function get_users_tasks($user_id){
        $this->db->where('list_user_id',$user_id);
        $this->db->join('tasks', 'lists.id = tasks.list_id');
        $this->db->order_by('tasks.create_date', 'asc'); 
        $query = $this->db->get('lists');
        return $query->result();
    }
}
