<?php
class Pages extends CI_Controller {

   public function __construct(){
     parent::__construct();
     $this->load->model('Posts_model');
   //   $data = array();
   }
   
   public function view($page = 'home') {
   if(!file_exists(APPPATH. 'views/pages/'.$page.'.php')){

   show_404 ();
   }

$data['title'] = ucfirst($page);
$this->load->view('templetes/header');
$this->load->view('pages/'.$page, $data);
$this->load->view('templetes/footer');

// $this->load->view('pages/'.$page, $data);
// $this->load->views('pages/'.$page,$data);
}
}
?>