<h2><?php echo $post['title']; ?></h2>

<small><b>Posted on: </b> <?php echo $post['created_at'] ?></small>
<div class="post-body"><b class="post-tags&nbsp;post-tags-tag3">Body: </b><?php echo $post['body']; ?></div>

<ul class=""><li><strong>Categories: <?php echo $name['name']; ?> </strong></ul></li>
<!-- <?php echo $name['name']; ?> -->

<!-- $data['category_id'] = $this->Posts_model->get_categories(); -->

<!---EDIT BUTTON ---->
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['id']; ?>">Edit</a><hr>
<!---DELETE BUTTON ---->
<?php  echo form_open('/posts/delete/'.$post['id'] ); ?>
<button value="delete" type="submit" class="btn btn-danger">Delete</button>


