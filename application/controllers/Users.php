<?php
class Users extends CI_Controller{
   
   public function __construct(){
      parent::__construct();
      $this->load->library(array('session', 'form_validation'));
      $this->load->helper(array('url', 'form'));
      $this->load->database();   
      // $this->load->helper('url');
      $this->load->model('User_model' ,'user');       
      $data = array();
   }
   // public function index(){
   //    $this->load->view('pages/login_user' , $data);
   // }

//Action Register validartion
   public function users_signup(){    
       // field name, error message, validation rules
        $this->form_validation->set_rules('name','Name','required | callback_check_username_exists');
        $this->form_validation->set_rules('email','Mail','required | callback_check_email_exists|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password1','Confirm Password','trim|matches[password]');

      $data['name'] = html_escape($this->input->post('name'));
      $data['email']  = html_escape($this->input->post('email')); 
      $data['password']  = sha1($this->input->post('password')); 
  
     //Getting Post Values
   if($this->form_validation->run())
   {  $data = array();
      $this->load->view('templetes/header');
      $this->load->view('pages/login_user' , $data);
      $this->load->view('templetes/footer');
   }
  else{
    //Encrypt Password
    $enc_password = md5($this->input->post('password'));
    $enc_password = md5($this->input->post('matches[password]'));
    $this->User_model->register($enc_password);

    //<--Flash Message--> 
   //  $this->session->set_flashdata('user_registered','You are now registerd and can log in');
    redirect('posts');
      }
        }
      
        function check_username_exists($name){
         $this->form_validation->set_message('check_username_exists','The username is taken. Please choose different');
         
         if($this->User_model->check_username_exists($username)){
            return true;
         }else{
            return false;
            }
         }
         function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists','The email is taken. Please choose different');    
            if($this->User_model->check_username_exists($email)){
               return true;
            }else{
               return false;
               }
            }

         public function users_login(){
            $user_data=array();

            $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('password','password','required');

            if($this->form_validation->run() == FALSE)
            {               
               $this->load->view('templetes/header');
               $this->load->view('pages/login_user', $data);
               $this->load->view('templetes/footer');

            } else {

            $email = $this->input->post('email');
				$password = md5($this->input->post('password'));

            // Login user
				$user_id = $this->User_model->login($email, $password);

				if($user_id){
            
					$user_data = array(
						'id' => $user_id,
						'email' => $email,
						'logged_in' => true
					);
               $this->session->set_userdata($user_data);

               print_r($this->session->set_userdata($user_data));
               die();

               // Set message
               $this->session->set_flashdata('user_loggedin', 'You are now logged in');              
               redirect('posts');

            }else{
               // Set message
               $this->session->set_flashdata('login_failed', 'invalid login');
					redirect('pages/login_user');
             
            }
         
         }

            }

            
         



   }


 

 


?>