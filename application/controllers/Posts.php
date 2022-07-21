<?php 
class Posts extends CI_Controller {
   public function __construct(){
      parent::__construct();
      $this->load->model('Posts_model');
      $this->load->helper('url'); 
      $this->load->database();  
      $data = array(); 
      $this->load->helper('text');   
   }  

   public function index( $offset= 0 ) {
     //Pagination Config
     $config['base_url'] = base_url().'posts/index/';
     $config['total_rows'] = $this->db->count_all('posts');
     $config['per_page'] = 300;
     $config['uri_segment'] = 3;

     //Init pagination
     $this->pagination->initialize($config);
   // echo $this->pagination->create_links();
    
     $data['title'] = 'Latest Posts-';
     $data['posts'] = $this->Posts_model->get_posts(FALSE , $config['per_page'], $offset);
     $this->load->view('templetes/header');
     $this->load->view('posts/index', $data);
     $this->load->view('templetes/footer');   
   }

   public function view($slug = NULL) {
      
      $data['post'] = $this->Posts_model->get_posts($slug);
////  Get Category Name:-
      $data['name'] = $this->Posts_model->get_unique_category();
   //   print_r($result);

      if (empty($data['post'])) {
          show_404();
         } 
      $data['title'] = $data['post']['title'];
    
      $this->load->view('templetes/header');
      $this->load->view('posts/view', $data);
      $this->load->view('templetes/footer');
}

/// <----------------------------------------------------------- Create Function:------------------------------------------->
   public function create(){
      //category_id

      $data['category_id'] = $this->Posts_model->get_categories();
      // $data['name'] = $this->Posts_model->get_categories();
      // return $result;
      // print_r(json_encode($id));
      // die;  
      $data['title'] = 'Create Post';
   
      $this->load->view('templetes/header');
      $this->load->view('posts/create', $data);
      $this->load->view('templetes/footer');

   } 

   public function insert_data(){
      $data = array();
      $data['title']=$this->input->post('title');
      $data['slug']= $this->input->post('slug');
      $data['body']= $this->input->post('body');

      $result = $this->Posts_model->create_post($data);
      if($result){
         redirect('posts');
      }else{
         show_404();
      }
      //set msg create
      // $this->session->set_flashdata('post_created','Post has beeen created');
   }
   /// <----------------------------------------------------------- End Create FUNCTION:------------------------------------------->
   
   ///Delete Function
   public function delete($id){

      $this->Posts_model->delete_post($id);
      redirect('posts');
   }
   
/// <--------------------------------------------------------------- Edit Function:------------------------------------------->
// Get Previous Data And Edit

   public function edit(){
      /*$id = $this->input->get(2);
      print_r(json_encode($id));
      die;*/  
      $id = $this->uri->segment('3');
      $data['post'] = $this->Posts_model->get_post($id);
      $data['category_id'] = $this->Posts_model->get_categories();
      
      if (empty($data['post'])) {
            show_404();
      }else{
         $this->load->view('templetes/header');
         $this->load->view('posts/edit', $data);
         $this->load->view('templetes/footer');
       
      } 
      //set msg update
      // $this->session->set_flashdata('post_updated','Post has beeen created');  
   }
   
// Now Updated
   public function update(){
      $this->Posts_model->update_post(); 
      // echo ("Data updated");  
      redirect('posts'); 
   }

   /// <--------------------------------------------------------------- Get Category:------------------------------------------->

   public function category(){
      $data['category_id'] = $this->Posts_model->get_categories();
   }

}
?>