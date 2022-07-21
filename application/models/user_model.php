<?php 
   class User_model extends CI_Model{
      public function __construct(){
         $this->load->database();
         $data = array();
     }
 
      public function register($enc_password){

        $data = array(
         'name'=> $this->input->post('name'),
         'email'=>$this->input->post('email'),
         'password'=>$enc_password,
        ); 
//Insert data
        return $this->db->insert('users', $data);
      }

      public function check_username_exists($name){
         $query= $this->db->get_where('users', array('name => $name'));
         if (empty($query->row_array())){
            return true;
         }else{
            return false;
         }
      }

      public function check_email_exists($email){
         $query= $this->db->get_where('users', array('email => $email'));
         if (empty($query->row_array())){
            return true;
         }else{
            return false;
         }
      }

      public function user_registered(){

      }

      public function login($username, $password){
         //validate
         $this->db->where('username' ,$username);
         $this->db->where('password' ,$password);

         $result= $this->db->get('users');

         if($result->num_rows() == 1){
            return $result->row(0)->id;
         }else{
            return false;
         }
      }

   }
?>