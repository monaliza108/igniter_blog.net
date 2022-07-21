<html lang="en">
<head>
<!-- <link rel="stylesheet" href="https://bootswatch.com/3/united/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" > -->
<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" >
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<!-- <script src="http://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script> -->
</head>

<body>
<nav class="navbar navbar-inverse">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="<?php echo base_url('');?>">ciBlog</a>
</div>
<div id="navbar">
<ul class="nav navbar-nav">


<li><a href="<?php echo site_url('');?>" >Home</a></li>
<li><a href="<?php echo site_url('posts');?>" >Blogs</a></li>
<li><a href="<?php echo site_url('posts/create');?>" >Add Post</a></li>
<li><a href="<?php echo site_url('contact');?>" >Contact</a></li>
<li><a href="<?php echo site_url('about');?>">About</a></li>
<li><a href="<?php echo site_url('signup_user');?>" >Signup</a></li>
<li><a href="<?php echo site_url('login_user');?>">Login</a></li>

</ul>
</div>
</div>
</nav>


<div class="container">
<!-- <--Flash Messages  --> 
<?php 
if($this->session->flashdata('user_registered',' <p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>')):
// echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>' ; ?><?php endif ?>
  
<?php  if($this->session->flashdata('post_created')):
echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>' ; ?>
<?php endif ?>

<?php  if($this->session->flashdata('post_updated')):
echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>' ; ?>
<?php endif ?>

<?php  if($this->session->flashdata('post_deleted')):
echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>' ; ?>
<?php endif ?>

<?php  if($this->session->flashdata('login_failed')):
echo '<p class="alert alert-success">'.$this->session->flashdata('login_failed').'</p>' ; ?>
<?php endif ?>

