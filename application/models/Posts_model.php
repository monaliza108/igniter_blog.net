<?php
class Posts_model extends CI_Model{
    public function __construct(){
        $this->load->database();
        $data = array();
    }


    public function get_post_by_id(){

        $query=$this->db->get('posts');
        return $query->result_array();
    }


    public function get_posts($slug = False , $limit = Null, $offset = Null){
        $data = array();
        
        if($limit){
            $this->db->limit($limit,$offset);
        }       
            if($slug == FALSE){     
                $this->db->select('*');               
                $this->db->order_by('posts.id');           
                // $this->db->join('categories','categories.id = posts.category_id');
                $query=$this->db->get('posts');              
    
                if($query !== FALSE && $query->num_rows() > 0){
                    foreach ($query->result_array() as $row) {
                        $data[] = $row;
                    }
                }   
            return $data;
            return $query->result_array();
        }
           
            $query=$this->db->get_where('posts', array('slug' => $slug));
            return $query->row_array();
    }

    //get_unique_category()
    public function get_unique_category(){

        // $this->db->order_by('posts.id');
        $this->db->select('name');           
        $this->db->join('categories','categories.id = posts.category_id');
        $query=$this->db->get('posts');  
        return $query->row_array();
    }

//for update
    public function get_post($id){
        $query=$this->db->get_where('posts', array('id' => $id));
        return $query->row_array();
    }

    public function create_post($data){

        return $this->db->insert('posts', $data);
    }

    public function delete_post($id){

        $this->db->where('id', $id);
        $this->db->delete('posts');
        return true;
    }

    public function update_post(){

        $data = array(
            'title'=>$this->input->post('title'),
            'slug' =>$slug,
            'body' =>$this->input->post('body'),
            'category_id' =>$this->input->post('category_id'),           
        );
        // print_r($id);
        // die;
        $this->db->where('id', $this->input->post('id'));
        $result = $this->db->update('posts', $data);
        return $result;         
    }

    function get_categories(){ 
    //    $this->db->select('*');
       $this->db->order_by('name');
       $result = $this->db->get('categories');
       return $result->result_array(); 
    }
   
}


?>